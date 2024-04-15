<?php

namespace PHPNomad\Template\Interfaces;

interface ScreenResolverStrategy
{
    /**
     * @param string $slug
     * @return string
     */
    public function getUrlForSlug(string $slug, array $context = []): string;

    /**
     * @param string $slug
     * @param string $action
     * @param array $context
     * @return string
     */
    public function getUrlForAction(string $slug, string $action,  array $context = []): string;

    /**
     * Returns true if the current request matches the specified slug.
     *
     * @param string $slug
     * @return bool
     */
    public function isCurrentScreen(string $slug): bool;

    /**
     * Returns true if the current request matches the specified action and slug.
     *
     * @param string $slug
     * @param string $action
     * @return bool
     */
    public function isCurrentAction(string $slug, string $action): bool;

    /**
     * Gets the current screen for this request.
     *
     * @return ?string
     */
    public function getCurrentScreen(): ?string;

    /**
     * Gets the current action for this request.
     *
     * @return ?string
     */
    public function getCurrentAction(): ?string;
}