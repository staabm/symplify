<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\ForbiddenNestedCallInAssertMethodCallRule\Fixture;

use Symplify\PHPStanRules\Tests\Rules\ForbiddenNestedCallInAssertMethodCallRule\Source\AnyOtherObject;

final class NestedAssertMethodCall
{
    public function test()
    {
        $values = new AnyOtherObject();
        $this->assertSame('...', $values->run(1000));
    }
}
