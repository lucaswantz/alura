<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
	private Client $httpClient;
	private Crawler $DOMCrawler;

	public function __construct(ClientInterface $httpClient, Crawler $DOMCrawler)
	{
		$this->httpClient = $httpClient;
		$this->DOMCrawler = $DOMCrawler;
	}

	public function buscar(string $url): array
	{
		$resposta = $this->httpClient->request("GET", $url);

	    $html = $resposta->getBody();
 		$this->DOMCrawler->addHtmlContent($html);

		$elementosCursos = $this->DOMCrawler->filter("span.card-curso__nome");
		$cursos = [];

		foreach ($elementosCursos as $elemento) {
			$cursos[] = $elemento->textContent;
		}

		return $cursos;
	}
}
