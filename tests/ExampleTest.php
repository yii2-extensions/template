<?php

declare(strict_types=1);

namespace yii2\template\tests;

use PHPUnit\Framework\TestCase;
use yii2\template\Example;

final class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $example = new Example();

        $this->assertTrue($example->getExample());
    }
}
