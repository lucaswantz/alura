<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase {

	/** @var Avaliador */
	private $leiloeiro;

	public function setUp(): void {
		$this->leiloeiro = new Avaliador();
	}

	/**
	 * @dataProvider entregaLeiloes
	 */
	public function testAvaliadorDeveEncontrarMaiorValorDeLances(Leilao $leilao) {
		$this->leiloeiro->avalia($leilao);

		$maiorValor = $this->leiloeiro->getMaiorValor();

		$this->assertEquals(2500, $maiorValor);
	}

	/**
	 * @dataProvider leilaoEmOrdemCrescente
	 * @dataProvider leilaoEmOrdemDecrescente
	 * @dataProvider leilaoEmOrdemAleatoria
	 */
	public function testAvaliadorDeveEncontrarMenorValorDeLances(Leilao $leilao) {
		$this->leiloeiro->avalia($leilao);

		$menorValor = $this->leiloeiro->getMenorValor();

		$this->assertEquals(1500, $menorValor);
	}

	/**
	 * @dataProvider leilaoEmOrdemCrescente
	 * @dataProvider leilaoEmOrdemDecrescente
	 * @dataProvider leilaoEmOrdemAleatoria
	 */
	public function testAvaliadorDeveBuscarTresMaioresValores(Leilao $leilao) {
		$this->leiloeiro->avalia($leilao);

		$maiores = $this->leiloeiro->getMaioresLances();

		$this->assertCount(3, $maiores);
		$this->assertEquals(2500, $maiores[0]->getValor());
		$this->assertEquals(2000, $maiores[1]->getValor());
		$this->assertEquals(1500, $maiores[2]->getValor());
	}

	public function leilaoEmOrdemCrescente() {
		$leilao = new Leilao("Fiat 147 0KM");

		$maria = new Usuario('Maria');
		$joao = new Usuario('João');
		$ana = new Usuario('Ana');

		$leilao->recebeLance(new Lance($ana, 1500));
		$leilao->recebeLance(new Lance($joao, 2000));
		$leilao->recebeLance(new Lance($maria, 2500));

		return ["ordem-crescente" => [$leilao]];
	}

	public function leilaoEmOrdemDecrescente() {
		$leilao = new Leilao("Fiat 147 0KM");

		$maria = new Usuario('Maria');
		$joao = new Usuario('João');
		$ana = new Usuario('Ana');

		$leilao->recebeLance(new Lance($maria, 2500));
		$leilao->recebeLance(new Lance($joao, 2000));
		$leilao->recebeLance(new Lance($ana, 1500));

		return ["ordem-decrescente" => [$leilao]];
	}

	public function leilaoEmOrdemAleatoria() {
		$leilao = new Leilao("Fiat 147 0KM");

		$maria = new Usuario('Maria');
		$joao = new Usuario('João');
		$ana = new Usuario('Ana');

		$leilao->recebeLance(new Lance($joao, 2000));
		$leilao->recebeLance(new Lance($maria, 2500));
		$leilao->recebeLance(new Lance($ana, 1500));

		return ["ordem-aleatoria" => [$leilao]];
	}

	public function testLeilaoVazioNaoPodeSerAvaliado() {
		$this->expectException(\DomainException::class);
		$this->expectExceptionMessage("Não é possível avaliar leilão sem lances");

		$leilao = new Leilao("Fusca Azul");
		$this->leiloeiro->avalia($leilao);
	}

	public function testLeilaoFinalizadoNaoPodeSerAvaliado() {
		$this->expectException(\DomainException::class);
		$this->expectExceptionMessage("Leilão já finalizado");

		$leilao = new Leilao("Fiat 147 0KM");
		$ana = new Usuario('Ana');

		$leilao->recebeLance(new Lance($ana, 2000));
		$leilao->finaliza();

		$this->leiloeiro->avalia($leilao);
	}

	public function entregaLeiloes() {
		return [
			$this->leilaoEmOrdemCrescente()["ordem-crescente"],
			$this->leilaoEmOrdemDecrescente()["ordem-decrescente"],
			$this->leilaoEmOrdemAleatoria()["ordem-aleatoria"],
		];
	}

}
