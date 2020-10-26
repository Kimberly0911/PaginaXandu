<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		$vistas = view('Plantillas/header').
					view('Plantillas/Menu').
					view('index').
					view('Plantillas/footer');
		return $vistas;
	}

	public function Pag1()
	{

		$vistas = view('Plantillas/header').
					view('Plantillas/Menu').
					view('Pagina1').
					view('Plantillas/footer');
		return $vistas;

		
	}

	public function Pag2()
	{

		$vistas = view('Plantillas/header').
					view('Plantillas/Menu').
					view('Pagina2').
					view('Plantillas/footer');
		return $vistas;

		
	}

	public function contacto() {
		return view('contacto');
	}

	public function pasarPost() {
		echo $_POST['valor1'];
	}

}
