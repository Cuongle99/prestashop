{**
 * Copyright  PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright  PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div id="_desktop_currency_selector" class="popup-over">
  <div class="currency-selector dropdown js-dropdown">
    <span id="currency-selector-label">{l s='Currency:' d='Shop.Theme.Global'}</span>
    <button data-toggle="dropdown" class="btn-unstyle popup-title" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Currency dropdown' d='Shop.Theme.Global'}">
      <span class="expand-more _gray-darker">{$current_currency.iso_code}{*{if $current_currency.iso_code !== $current_currency.sign} {$current_currency.sign}{/if}*}</span>
      <i class="pe7s- pe-7s-angle-down"></i>
    </button>
    <ul class="dropdown-menu popup-content" aria-labelledby="currency-selector-label">
      {foreach from=$currencies item=currency}
        <li {if $currency.current} class="current" {/if}>
          <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.iso_code}{if $currency.sign !== $currency.iso_code} {$currency.sign}{/if}</a>
        </li>
      {/foreach}
    </ul>
  </div>
</div>
