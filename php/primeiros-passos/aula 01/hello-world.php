<?php

echo "hello world";

$codigoPromocional = "aaaads";

if (!$codigoPromocional) {
	echo "Falso";
}

$teste = strcasecmp(substr($codigoPromocional, -3), "ads");

echo $teste;
