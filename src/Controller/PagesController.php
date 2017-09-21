<?php

namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
        if (date('m') > 12):
            $month = 1; else:
            $month = date('m') + 1;
        endif;
        $this->loadModel('Products');
        $products = $this->Products->find('all')
                                    ->where(['pro_state' => '1'])
                                    ->toArray();
        $total_month = 0;
        foreach ($products as $product):
            if ($product->pro_payment == 0):
                $total_month += $product->pro_amount; else:
                // the first month be payment
                $product->pro_payment = $product->pro_payment - 1;
        $date_end_payment = date('Y-m', strtotime('+'.$product->pro_payment.' month', strtotime($product->pro_date_payment)));
        list($year_end, $month_end) = explode('-', $date_end_payment);
        if (date('Y') < $year_end):
                    $total_month += $product->pro_amount; elseif (date('Y') == $year_end):
                    if ($month <= $month_end):
                        $total_month += $product->pro_amount;
        endif;
        endif;
        endif;
        endforeach;
        $this->set(compact('total_month', 'month'));
    }

    public function detail()
    {
    }
}
