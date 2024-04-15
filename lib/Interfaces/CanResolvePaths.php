<?php

namespace PHPNomad\Template\Interfaces;

interface CanResolvePaths
{
    /**
     * @param string $assetName
     * @return string
     */
    public function getPath(string $assetName): string;
}