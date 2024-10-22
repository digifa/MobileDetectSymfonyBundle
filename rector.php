<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php82: true)
    ->withAttributesSets(symfony: true, doctrine: true)
    ->withSets([
        Rector\Symfony\Set\SymfonySetList::SYMFONY_64,
        Rector\Symfony\Set\SymfonySetList::SYMFONY_70,
        Rector\Symfony\Set\SymfonySetList::SYMFONY_71,
        Rector\Symfony\Set\SymfonySetList::SYMFONY_CODE_QUALITY,
        Rector\Symfony\Set\SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
    ])
    ->withDeadCodeLevel(10)
    ->withTypeCoverageLevel(10);
