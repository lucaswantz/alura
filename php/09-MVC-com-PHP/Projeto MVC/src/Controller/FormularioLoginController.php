<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorHTMLTrait;

class FormularioLoginController implements InterfaceControladorRequisicao {

	use RenderizadorHTMLTrait;

	public function processaRequisicao(): void {
		echo $this->rederizaHtml("login/formulario.php", ['titulo' => "Login"]);
	}
}
