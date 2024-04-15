<?php

namespace PHPNomad\Template\Strategies;

use PHPNomad\Template\Exceptions\TemplateNotFound;
use PHPNomad\Template\Interfaces\CanRender;
use PHPNomad\Utils\Helpers\Str;

class PhpEngine implements CanRender {
    /**
     * @inheritDoc
     */
    public function render($templatePath, array $data = []): string {
        $file = Str::append($templatePath, '.php');

        if(!file_exists($file)){
            throw new TemplateNotFound("The provided template $templatePath could not be found");
        }

        ob_start();
        extract($data);
        require $file;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}