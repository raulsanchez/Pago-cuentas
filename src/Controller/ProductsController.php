<?php // src/Controller/ArticlesController.php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProductsController extends AppController
{
	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
	   	$products = $this->Products->find('all')
                                    ->contain(['Accounts','TypeProducts']);
	   	$this->set(compact('products'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		$this->loadModel('Accounts');
		$accounts = $this->Accounts->find()
							// seleccionamos los campos a utilizar
							->select(['acc_id','acc_name'])
							// deben de estar activado
							->where(['acc_state' => '1'])
							// solamnete traemos los campos que queremos (no toda la challa que manda el ORM)
							->combine('acc_id', 'acc_name')
							// y por ultimo lo convierte en array
							->toArray();
		$this->set(compact('accounts'));

		$this->loadModel('TypeProducts');
		$typeproducts = $this->TypeProducts->find()
							->select(['typ_id','typ_name'])
							->where(['typ_state' => '1'])
							->combine('typ_id','typ_name')
							->toArray();
		$this->set(compact('typeproducts'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store()
	{
		debug($this->request->data);
		$products = TableRegistry::get('Products');
		$entity = $products->newEntity($this->request->data());
		if($products->save($entity)):
			$this->Flash->success('The Products has been save');
			return $this->redirect(['action' => 'index']);
	  	else:
	  		$this->Flash->error('The Products could not be save. Please, try again.');
			return $this->redirect($this->referer(['action' => 'create']));
	  	endif;
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
	   //
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit($id)
	{
	   //
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update($id)
	{
	   //
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
	   //
	}
}

?>