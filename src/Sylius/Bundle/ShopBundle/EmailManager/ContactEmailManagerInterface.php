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

namespace Sylius\Bundle\ShopBundle\EmailManager;

use Sylius\Component\Core\Model\ChannelInterface;

interface ContactEmailManagerInterface
{
    /**
     * @param array<string, mixed> $data
     * @param array<array-key, string> $recipients
     */
    public function sendContactRequest(
        array $data,
        array $recipients,
        ChannelInterface $channel,
        string $localeCode,
    ): void;
}
