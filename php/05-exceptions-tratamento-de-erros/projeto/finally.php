<?php

try {
    echo "Executando" . PHP_EOL;
    throw new Exception("Exceção aqui");
} catch (\Throwable $th) {
    echo "Catch" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}