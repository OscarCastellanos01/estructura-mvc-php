<?php
class ViewsController extends Controller
{
	public function index()
	{
		$userModel = $this->model('UserModel');
		$users = $userModel->getUsers();

		$this->view('inicio', [
			'title' => 'Inicio',
			'users' => $users
		]);
	}

	public function update($id)
	{
		echo "Update view " . $id;
	}
	
	public function test()
	{
		echo "Funcion test";
	}
}