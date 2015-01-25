<?php
namespace App\Controller;

use App\Controller\AppController;

class DetailsController extends AppController{

	public function index(){

    }

    public function month($month = null){
    	if($month == null or $month > 12 or $month < 1){
    		$month = date('m')+1;
        }
        $date_now = date('Y').'-'.$month.'-05';
    	$this->loadModel('Products');
    	$products = $this->Products->find('all')
									->where(['pro_state' => '1'])
                                    ->contain(['Accounts','TypeProducts'])
									->toArray();
		$view_products = array();
    	foreach($products as $product):
            if($product->pro_payment == 0):
                array_push($view_products, $product);
            else:
                // the first month be payment
                $pro_payment_tmp = $product->pro_payment - 1;
                $date_end_payment = date('Y-m',strtotime ( '+'.$pro_payment_tmp.' month' , strtotime ( $product->pro_date_payment )));
                $product->number_payment = $this->payment($product->pro_date_payment,$date_now);
                list($year_end, $month_end) = explode('-',$date_end_payment);
                if(date('Y') < $year_end):
    				array_push($view_products, $product);
    			elseif(date('Y') == $year_end):
                    if( $month <= intval($month_end)):
    					array_push($view_products, $product);
					endif;
    			endif;
    		endif;
    	endforeach;
    	$this->set(compact('view_products','month'));
    }
    public function payment($date_buy,$date_now){
        $second_diff = strtotime($date_now) - strtotime($date_buy);
        if($second_diff < 0):
            return 999999;
        elseif($second_diff > 29203200):
            $anio = $second_diff / 29203200;
            return intval(date('m',$second_diff)+(12 * intval($anio)));
        else:
            return intval(date('m',$second_diff));
        endif;
    }
}