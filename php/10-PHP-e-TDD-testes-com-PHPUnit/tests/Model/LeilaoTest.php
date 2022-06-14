<?php

namespace Alura\Leilao\Tests\Model;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase {

	/**
	 * @dataProvider geraLances
	 */
	public function testLeilaoDeveReceberLances(int $qtdLances, Leilao $leilao, array $valores) {
		static::assertCount($qtdLances, $leilao->getLances());

		foreach ($valores as $idx => $valorEsperado) {
			static::assertEquals($valorEsperado, $leilao->getLances()[$idx]->getValor());
		}
	}

	public function testLeilaoNaoDeveReceberLancesRepetidos() {
		$this->expectException(\DomainException::class);
		$this->expectExceptionMessage('Usuário não pode propor dois lances consecutivos');

		$joao = new Usuario('João');
		$leilao = new Leilao('Fiat 147 0km');

		$leilao->recebeLance(new Lance($joao, 1000));
		$leilao->recebeLance(new Lance($joao, 1500));
	}

	public function testLeilaoNaoDeveAceitarMaisDeCincoLancesPorUsuario() {
		$this->expectException(\DomainException::class);
		$this->expectExceptionMessage('Usuário não pode propor mais que cinco lances');

		$leilao = new Leilao('Brasília Amarela');

		$joao = new Usuario('João');
		$maria = new Usuario('Maria');

		$leilao->recebeLance(new Lance($joao, 1000));
		$leilao->recebeLance(new Lance($maria, 1500));
		$leilao->recebeLance(new Lance($joao, 2000));
		$leilao->recebeLance(new Lance($maria, 2500));
		$leilao->recebeLance(new Lance($joao, 3000));
		$leilao->recebeLance(new Lance($maria, 3500));
		$leilao->recebeLance(new Lance($joao, 4000));
		$leilao->recebeLance(new Lance($maria, 4500));
		$leilao->recebeLance(new Lance($joao, 5000));
		$leilao->recebeLance(new Lance($maria, 5500));

		$leilao->recebeLance(new Lance($joao, 6000));
		$leilao->recebeLance(new Lance($maria, 6500));
	}

	public function geraLances() {
		$joao = new Usuario('João');
		$maria = new Usuario('Maria');

		$leilaoCom2Lances = new Leilao('Fiat 147 0km');
		$leilaoCom2Lances->recebeLance(new Lance($joao, 1000));
		$leilaoCom2Lances->recebeLance(new Lance($maria, 2000));

		$leilaoCom1Lance = new Leilao('Fusca 1972 0km');
		$leilaoCom1Lance->recebeLance(new Lance($maria, 5000));

		return [
			"leilao-2-Lances" => [2, $leilaoCom2Lances, [1000, 2000]],
			"leilao-1-Lance" => [1, $leilaoCom1Lance, [5000]],
		];
	}
}
