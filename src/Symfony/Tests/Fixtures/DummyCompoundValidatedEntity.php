<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Symfony\Tests\Fixtures;

use ApiPlatform\Symfony\Tests\Fixtures\TestBundle\Validator\Constraint\DummyCompoundRequirements;

class DummyCompoundValidatedEntity
{
    /**
     * @var string
     */
    #[DummyCompoundRequirements]
    public $dummy;
}
