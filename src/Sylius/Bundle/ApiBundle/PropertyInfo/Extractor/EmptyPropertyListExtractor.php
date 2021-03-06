<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ApiBundle\PropertyInfo\Extractor;

use Symfony\Component\PropertyInfo\PropertyListExtractorInterface;

/** @experimental */
final class EmptyPropertyListExtractor implements PropertyListExtractorInterface
{
    public function getProperties(string $class, array $context = []): ?array
    {
        if (class_exists($class)) {
            return [];
        }

        return null;
    }
}
