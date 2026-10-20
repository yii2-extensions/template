<?php

declare(strict_types=1);

namespace yii\template;

/**
 * Provides a placeholder API that a new extension replaces with its own classes.
 */
final class Example
{
    /**
     * Returns the requested mode.
     *
     * @param bool $legacy Whether legacy mode is requested.
     *
     * @return bool `true` for legacy mode, `false` otherwise.
     */
    public function getExample(bool $legacy = false): bool
    {
        return $legacy;
    }
}
