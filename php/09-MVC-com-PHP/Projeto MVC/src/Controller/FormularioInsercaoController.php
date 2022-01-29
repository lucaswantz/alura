<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorHTMLTrait;

class FormularioInsercaoController implements InterfaceControladorRequisicao {

	use RenderizadorHTMLTrait;

	public function processaRequisicao(): void {
		echo $this->rederizaHtml("cursos/formulario.php", ['titulo' => "Novo Curso"]);
	}
}
