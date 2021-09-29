<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $pontuavel): void
    {
        $pontuavel->assistir();
    }
}
