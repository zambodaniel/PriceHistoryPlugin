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

namespace Tests\Sylius\PriceHistoryPlugin\Behat\Element\Admin\Channel;

use FriendsOfBehat\PageObjectExtension\Element\Element;

final class ShowTheLowestPriceOfDiscountedProductsPriorToTheDiscountElement extends Element implements ShowTheLowestPriceOfDiscountedProductsPriorToTheDiscountElementInterface
{
    public function enable(): void
    {
        $this->getElement('lowest_price_for_discounted_products_visible')->check();
    }

    public function disable(): void
    {
        $this->getElement('lowest_price_for_discounted_products_visible')->uncheck();
    }

    public function isEnabled(): bool
    {
        return $this->getElement('lowest_price_for_discounted_products_visible')->isChecked();
    }

    protected function getDefinedElements(): array
    {
        return array_merge([
            'lowest_price_for_discounted_products_visible' => '#sylius_channel_lowestPriceForDiscountedProductsVisible',
        ]);
    }
}
