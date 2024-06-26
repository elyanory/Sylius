<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Core;

/** @deprecated since Sylius 1.13 and will be removed in Sylius 2.0. */
interface SyliusLocaleEvents
{
    public const CODE_CHANGED = 'sylius.locale.code_changed';
}
