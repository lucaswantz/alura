<?php

class Titular {

	private string $cpf;
	private string $nome;

	public function __construct($cpf, $nome) {
		$this->cpf = $cpf;
		$this->validaNome($nome);
		$this->nome = $nome;
	}

	public function recuperaCpf(): string {
		return $this->cpf;
	}

	public function recuperaNome(): string {
		return $this->nome;
	}

	private function validaNome(string $nome): void {
		if (strlen($nome) < 5) {
			echo "Nome precisa ter pelo menos 5 caracteres";
			exit();
		}
	}

}
