<?php

namespace Alura\Cursos\Controller;

class FormularioInsercaoController extends HtmlController implements InterfaceControladorRequisicao {

	public function processaRequisicao(): void {
		echo $this->rederizaHtml("cursos/formulario.php", ['titulo' => "Novo Curso"]);
	}
}
