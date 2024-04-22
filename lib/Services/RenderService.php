<?php

namespace PHPNomad\Template\Services;

use PHPNomad\Template\Exceptions\TemplateNotFound;
use PHPNomad\Template\Interfaces\CanRender;
use PHPNomad\Template\Interfaces\CanResolvePaths;

class RenderService
{
    protected CanRender $canRender;
    protected CanResolvePaths $pathResolver;

    public function __construct(CanResolvePaths $canResolvePaths, CanRender $render)
    {
        $this->pathResolver = $canResolvePaths;
        $this->canRender = $render;
    }

    /**
     * @param $template
     * @param array $data
     * @return string
     * @throws TemplateNotFound
     */
    public function render($template, array $data = []): string
    {
        return $this->canRender->render($this->pathResolver->getPath($template), $data);
    }
}
