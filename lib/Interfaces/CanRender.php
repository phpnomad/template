<?php

namespace PHPNomad\Template\Interfaces;

use PHPNomad\Template\Exceptions\TemplateNotFound;

interface CanRender {
    /**
     * Renders a template with provided data.
     *
     * @param string $templatePath Path to the template file.
     * @param array $data Associative array of data to be used in the template.
     * @return string Rendered output as a string.
     * @throws TemplateNotFound
     */
    public function render(string $templatePath, array $data = []): string;
}
