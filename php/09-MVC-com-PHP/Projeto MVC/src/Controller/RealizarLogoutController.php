<?php

namespace Alura\Cursos\Controller;

class RealizarLogoutController implements InterfaceControladorRequisicao
{

	public function processaRequisicao(): void
	{
		session_destroy();
		header('Location: /login');
	}

}
