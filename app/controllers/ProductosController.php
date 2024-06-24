<?php

class ProductosController extends Controller
{
	public function index()
	{
		$productoModel = $this->model('ProductoModel');
		$productos = $productoModel->getProductos();

		$this->view('productos/index', [
			'title' => 'Productos',
			'productos' => $productos
		]);
	}
}