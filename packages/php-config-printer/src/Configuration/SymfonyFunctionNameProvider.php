<?php

declare(strict_types=1);

namespace Symplify\PhpConfigPrinter\Configuration;

use Symplify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use Symplify\PhpConfigPrinter\ValueObject\FunctionName;
use Symplify\PhpConfigPrinter\ValueObject\SymfonyVersionFeature;

final class SymfonyFunctionNameProvider
{
    public function __construct(
        private SymfonyVersionFeatureGuardInterface $symfonyVersionFeatureGuard
    ) {
    }

    public function provideRefOrService(): string
    {
        if ($this->symfonyVersionFeatureGuard->isAtLeastSymfonyVersion(SymfonyVersionFeature::REF_OVER_SERVICE)) {
            return FunctionName::SERVICE;
        }

        return FunctionName::REF;
    }
}
