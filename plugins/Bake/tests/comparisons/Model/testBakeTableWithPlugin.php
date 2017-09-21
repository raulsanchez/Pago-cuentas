<?php

namespace ModelTest\Model\Table;

use Cake\ORM\Table;

/**
 * BakeArticles Model.
 */
class testBakeTableWithPlugin extends Table
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
        $this->primaryKey('id');
    }
}
