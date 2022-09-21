const chalk = require('chalk');

console.log(chalk.red.bgWhite.bold("Vamos Começar!"));

const paragrafo = "Texto retornado por uma função";

function texto(string) {
	return string;
}

console.log(texto(paragrafo));
