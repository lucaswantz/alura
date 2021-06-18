<?php

class MinhaExcecao extends Exception {

    public function exibeLucas() {
        echo "Lucas";
    }
}

try {
    throw new MinhaExcecao();
} catch (\MinhaExcecao $minhaExcecao) {
    $minhaExcecao->exibeLucas();
}
