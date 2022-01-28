<?php

use JetBrains\PhpStorm\Pure;

/** Third party library v 1.0 */
class HashGeneratorNewVersion
{
    /**
     * @param string $dataToHash
     */
    public function __construct(private string $dataToHash)
    {
    }

    public function setDataToHash(string $dataToHash): void
    {
        $this->dataToHash = $dataToHash;
    }


    #[Pure] public function createHash(): string
    {
        return $this->magic();
    }

    private function magic(): string
    {
        return md5($this->dataToHash);
    }

}