<?php

namespace Alura\Solid\Model;

class Curso implements Pontuavel, Assistivel
{
    private string $nome;
    private array $videos;
    private Feedback $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(Feedback $feedback): void
    {
        $this->feedbacks = $feedback;
    }

    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    public function recuperarVideos(): array
    {
        return $this->videos;
    }

    public function recuperaPontuacao(): int
    {
        return 100;
    }

    public function assistir(): void
    {
        foreach ($this->videos as $video) {
            $video->assistir();
        }
    }
}
