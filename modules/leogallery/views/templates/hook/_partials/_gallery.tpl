{*
 * 2007-2022 LeoTheme
 *
 * NOTICE OF LICENSE
 *
 * LeoGallery is module help you can displays amazing gallery with many features on product page
 *
 * DISCLAIMER
 *
 *  @author    LeoTheme <leotheme@gmail.com>
 *  @copyright 2007-2022 LeoTheme
 *  @license   http://apollotheme.com - prestashop template provider
*}

<div class="leo-config-panel {if empty($active_tab) || $active_tab == 'LeoGalleryConfigForm'}{else}hidden{/if}" id="leo-gallery">
    {$form->generateForm($formParams) nofilter}{* HTML content generated by HelperForm, no escape necessary *}
</div>