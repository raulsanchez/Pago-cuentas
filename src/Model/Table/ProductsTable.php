<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class ProductsTable extends Table{

    public function initialize(array $config){

    	$this->primaryKey('pro_id');
    	$this->hasOne(
    		'Accounts', [
				'className' => 'Accounts',
        		'foreignKey' => false,
        		'conditions' => array('Products.pro_acc_id = Accounts.acc_id')]);
    	$this->hasOne(
            'TypeProducts', [
				'className' => 'TypeProducts',
        		'foreignKey' => false,
        		'conditions' => array('Products.pro_typ_id = TypeProducts.typ_id')
            ]);
    }

}
?>