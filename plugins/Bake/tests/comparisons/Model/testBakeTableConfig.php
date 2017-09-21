<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * BakeArticles Model.
 */
class testBakeTableConfig extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config The configuration for the Table.
     *
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('articles');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }
}
