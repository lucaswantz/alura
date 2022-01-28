<?php

namespace Alura\Cursos\Controller;

class FormularioLoginController extends HtmlController implements InterfaceControladorRequisicao {

	public function processaRequisicao(): void {
		echo $this->rederizaHtml("login/formulario.php", ['titulo' => "Login"]);
	}
}
