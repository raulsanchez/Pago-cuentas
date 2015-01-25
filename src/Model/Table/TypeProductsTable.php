<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class TypeProductsTable extends Table{

    public function initialize(array $config){
    	$this->primaryKey('typ_id');
    }

}
?>