<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class AccountsTable extends Table
{
    public function initialize(array $config)
    {
        $this->primaryKey('acc_id');
    }
}
