<?php

namespace App\Controller;

/**
 * BakeArticles Controller.
 *
 * @property \App\Model\Table\BakeArticlesTable $BakeArticles
 * @property \Cake\Controller\Component\CsrfComponent $Csrf
 * @property \Cake\Controller\Component\AuthComponent $Auth
 */
class testBakeNoActions extends AppController
{
    /**
     * Helpers.
     *
     * @var array
     */
    public $helpers = ['Html', 'Time'];

    /**
     * Components.
     *
     * @var array
     */
    public $components = ['Csrf', 'Auth'];
}
