<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.validator.merchant' shared service.

return $this->services['ps_checkout.validator.merchant'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(($this->services['ps_checkout.paypal.configuration'] ?? $this->load('getPsCheckout_Paypal_ConfigurationService.php')), ($this->services['ps_checkout.repository.prestashop.account'] ?? $this->load('getPsCheckout_Repository_Prestashop_AccountService.php')), ($this->services['ps_checkout.context.prestashop'] ?? ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));