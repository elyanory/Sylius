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

namespace Sylius\Behat\Page\Admin\Product;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

class ShowPage extends SymfonyPage implements ShowPageInterface
{
    public function isSimpleProductPage(): bool
    {
        return !$this->hasElement('variants');
    }

    public function isShowInShopButtonDisabled(): bool
    {
        return $this->getElement('show_product_single_button')->hasClass('disabled');
    }

    public function getName(): string
    {
        return $this->getElement('product_name')->getText();
    }

    public function getRouteName(): string
    {
        return 'sylius_admin_product_show';
    }

    public function showProductInChannel(string $channel): void
    {
        $this->getElement('show_product_dropdown')->clickLink($channel);
    }

    public function showProductInSingleChannel(): void
    {
        $this->getElement('show_product_single_button')->click();
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'product_name' => '#header h1 .content > span',
            'show_product_dropdown' => '.scrolling.menu',
            'show_product_single_button' => '.ui.labeled.icon.button',
            'variants' => '#variants',
        ]);
    }
}
