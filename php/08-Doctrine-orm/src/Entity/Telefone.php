<?php

namespace Alura\Doctrine\Entity;

/**
 * @Entity
 */
class Telefone {

	/**
	 * @Id
	 * @GeneratedValue
	 * @Column (type="integer")
	 */
	private int $id;

	/**
	 * @Column (type="string")
	 */
	private string $numero;

	/**
	 * @ManyToOne (targetEntity="Aluno")
	 */
	private Aluno $aluno;

	public function getId(): int{
		return $this->id;
	}

	public function getNumero(): string {
		return $this->numero;
	}

	public function setNumero(string $numero): self {
		$this->numero = $numero;
		return $this;
	}

	public function getAluno(): Aluno {
		return $this->aluno;
	}

	public function setAluno(Aluno $aluno): self {
		$this->aluno = $aluno;
		return $this;
	}
}
