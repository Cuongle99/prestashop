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
{block name='hook_footer_before'}
  <div class="footer-top">
    {if isset($fullwidth_hook.displayFooterBefore) AND $fullwidth_hook.displayFooterBefore == 0}
      <div class="container">
    {/if}
      <div class="inner">{hook h='displayFooterBefore'}</div>
    {if isset($fullwidth_hook.displayFooterBefore) AND $fullwidth_hook.displayFooterBefore == 0}
      </div>
    {/if}
  </div>
{/block}
{block name='hook_footer'}
  <div class="footer-center">
    {if isset($fullwidth_hook.displayFooter) AND $fullwidth_hook.displayFooter == 0}
      <div class="container">
    {/if}
      <div class="inner">{hook h='displayFooter'}</div>
    {if isset($fullwidth_hook.displayFooter) AND $fullwidth_hook.displayFooter == 0}
      </div>
    {/if}
  </div>
{/block}
{block name='hook_footer_after'}
  <div class="footer-bottom">
    {if isset($fullwidth_hook.displayFooterAfter) AND $fullwidth_hook.displayFooterAfter == 0}
      <div class="container">
    {/if}
      <div class="inner">{hook h='displayFooterAfter'}</div>
    {if isset($fullwidth_hook.displayFooterAfter) AND $fullwidth_hook.displayFooterAfter == 0}
      </div>
    {/if}
  </div>
{/block}
<div class="modal fade js-checkout-modal" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="{l s='Close' d='Shop.Theme.Global'}">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="js-modal-content"></div>
    </div>
  </div>
</div>

{*<div class="text-sm-center">
  {if $tos_cms != false}
    <span class="d-block js-terms">{$tos_cms nofilter}</span>
  {/if}
  {l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
</div>*}
