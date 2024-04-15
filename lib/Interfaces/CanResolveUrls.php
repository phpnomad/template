<?php

namespace PHPNomad\Template\Interfaces;

interface CanResolveUrls
{
    /**
     * @param string $assetName
     * @return string
     */
    public function getUrl(string $assetName): string;
}