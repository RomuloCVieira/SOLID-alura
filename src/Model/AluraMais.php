<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel
{
    private string $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(Slug $slug): string
    {
        return 'http://videos.alura.com.br/' . $slug;
    }

    public function recuperaPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
