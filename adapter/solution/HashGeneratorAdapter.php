<?php

use JetBrains\PhpStorm\Pure;

class HashGeneratorAdapter
{
    private HashGenerator $hashGenerator;

    #[Pure] public function __construct()
    {
        $this->hashGenerator = new HashGenerator('');
    }

    public function setData(string $hashGenerator): void
    {
        $this->hashGenerator = new HashGenerator($hashGenerator);
    }

    #[Pure] public function createHash(): string
    {
        return $this->hashGenerator->generateHash();
    }

}