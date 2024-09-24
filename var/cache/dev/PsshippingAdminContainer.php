<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class PsshippingAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'PrestaShop\\Module\\Psshipping\\Controller\\Admin\\CarrierController' => 'getCarrierControllerService',
            'PrestaShop\\Module\\Psshipping\\Controller\\Admin\\FaqController' => 'getFaqControllerService',
            'PrestaShop\\Module\\Psshipping\\Controller\\Admin\\HomeController' => 'getHomeControllerService',
            'PrestaShop\\Module\\Psshipping\\Controller\\Admin\\KeycloakAuthController' => 'getKeycloakAuthControllerService',
            'PrestaShop\\Module\\Psshipping\\Controller\\Admin\\OrdersController' => 'getOrdersControllerService',
            'PrestaShop\\Module\\Psshipping\\Controller\\Admin\\PsshippingOnboardingStepperController' => 'getPsshippingOnboardingStepperControllerService',
            'PrestaShop\\Module\\Psshipping\\Domain\\Carriers\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\Psshipping\\Domain\\Carriers\\PickupCarrierConfiguration' => 'getPickupCarrierConfigurationService',
            'PrestaShop\\Module\\Psshipping\\Domain\\Carriers\\StandardCarrierConfiguration' => 'getStandardCarrierConfigurationService',
            'PrestaShop\\Module\\Psshipping\\Handler\\ErrorHandler' => 'getErrorHandlerService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'psshipping' => 'getPsshippingService',
            'psshipping.context' => 'getPsshipping_ContextService',
            'psshipping.helper.config' => 'getPsshipping_Helper_ConfigService',
            'psshipping.ps_billings_context_wrapper' => 'getPsshipping_PsBillingsContextWrapperService',
            'psshipping.ps_billings_facade' => 'getPsshipping_PsBillingsFacadeService',
            'psshipping.ps_billings_service' => 'getPsshipping_PsBillingsServiceService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Controller\Admin\CarrierController' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Controller\Admin\CarrierController
     */
    protected function getCarrierControllerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Controller\\Admin\\CarrierController'] = new \PrestaShop\Module\Psshipping\Controller\Admin\CarrierController(($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Controller\Admin\FaqController' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Controller\Admin\FaqController
     */
    protected function getFaqControllerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Controller\\Admin\\FaqController'] = new \PrestaShop\Module\Psshipping\Controller\Admin\FaqController(($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Controller\Admin\HomeController' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Controller\Admin\HomeController
     */
    protected function getHomeControllerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Controller\\Admin\\HomeController'] = new \PrestaShop\Module\Psshipping\Controller\Admin\HomeController(($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Controller\Admin\KeycloakAuthController' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Controller\Admin\KeycloakAuthController
     */
    protected function getKeycloakAuthControllerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Controller\\Admin\\KeycloakAuthController'] = new \PrestaShop\Module\Psshipping\Controller\Admin\KeycloakAuthController();
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Controller\Admin\OrdersController' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Controller\Admin\OrdersController
     */
    protected function getOrdersControllerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Controller\\Admin\\OrdersController'] = new \PrestaShop\Module\Psshipping\Controller\Admin\OrdersController(($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Controller\Admin\PsshippingOnboardingStepperController' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Controller\Admin\PsshippingOnboardingStepperController
     */
    protected function getPsshippingOnboardingStepperControllerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Controller\\Admin\\PsshippingOnboardingStepperController'] = new \PrestaShop\Module\Psshipping\Controller\Admin\PsshippingOnboardingStepperController(($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Domain\Carriers\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Domain\Carriers\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Domain\\Carriers\\CarrierRepository'] = new \PrestaShop\Module\Psshipping\Domain\Carriers\CarrierRepository(($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Domain\Carriers\PickupCarrierConfiguration' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Domain\Carriers\PickupCarrierConfiguration
     */
    protected function getPickupCarrierConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Domain\\Carriers\\PickupCarrierConfiguration'] = new \PrestaShop\Module\Psshipping\Domain\Carriers\PickupCarrierConfiguration('prestashop.core.command_bus');
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Domain\Carriers\StandardCarrierConfiguration' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Domain\Carriers\StandardCarrierConfiguration
     */
    protected function getStandardCarrierConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Domain\\Carriers\\StandardCarrierConfiguration'] = new \PrestaShop\Module\Psshipping\Domain\Carriers\StandardCarrierConfiguration('prestashop.core.command_bus');
    }

    /**
     * Gets the public 'PrestaShop\Module\Psshipping\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Handler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\Psshipping\\Handler\\ErrorHandler'] = new \PrestaShop\Module\Psshipping\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['ps_accounts.installer'] ?? ($this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0'))));
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0');
    }

    /**
     * Gets the public 'psshipping' shared service.
     *
     * @return \Psshipping
     */
    protected function getPsshippingService()
    {
        return $this->services['psshipping'] = \Module::getInstanceByName('psshipping');
    }

    /**
     * Gets the public 'psshipping.context' shared service.
     *
     * @return \Context
     */
    protected function getPsshipping_ContextService()
    {
        return $this->services['psshipping.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'psshipping.helper.config' shared service.
     *
     * @return \PrestaShop\Module\Psshipping\Helper\ConfigHelper
     */
    protected function getPsshipping_Helper_ConfigService()
    {
        return $this->services['psshipping.helper.config'] = new \PrestaShop\Module\Psshipping\Helper\ConfigHelper('https://shipping-api.prestashop.com', 'https://assets.prestashop3.com/shipping', 0, 0, 'https://www.mbe.it/en/tracking?c=@', 'https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js', '3XsHeI2dfKoKE2wReGp7IO2bLa5hbeVB', 'https://78c41abf489931010a3a83cacc14926b@o298402.ingest.sentry.io/4505906299600896', 'production');
    }

    /**
     * Gets the public 'psshipping.ps_billings_context_wrapper' shared service.
     *
     * @return \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper
     */
    protected function getPsshipping_PsBillingsContextWrapperService()
    {
        return $this->services['psshipping.ps_billings_context_wrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(($this->services['ps_accounts.facade'] ?? $this->getPsAccounts_FacadeService()), ($this->services['psshipping.context'] ?? $this->getPsshipping_ContextService()), 0);
    }

    /**
     * Gets the public 'psshipping.ps_billings_facade' shared service.
     *
     * @return \PrestaShopCorp\Billing\Presenter\BillingPresenter
     */
    protected function getPsshipping_PsBillingsFacadeService()
    {
        return $this->services['psshipping.ps_billings_facade'] = new \PrestaShopCorp\Billing\Presenter\BillingPresenter(($this->services['psshipping.ps_billings_context_wrapper'] ?? $this->getPsshipping_PsBillingsContextWrapperService()), ($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * Gets the public 'psshipping.ps_billings_service' shared service.
     *
     * @return \PrestaShopCorp\Billing\Services\BillingService
     */
    protected function getPsshipping_PsBillingsServiceService()
    {
        return $this->services['psshipping.ps_billings_service'] = new \PrestaShopCorp\Billing\Services\BillingService(($this->services['psshipping.ps_billings_context_wrapper'] ?? $this->getPsshipping_PsBillingsContextWrapperService()), ($this->services['psshipping'] ?? $this->getPsshippingService()));
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'psshipping.sentry_dsn' => 'https://78c41abf489931010a3a83cacc14926b@o298402.ingest.sentry.io/4505906299600896',
            'psshipping.sentry_env' => 'production',
            'psshipping.ps_billing_sandbox' => 0,
            'psshipping.vue_app_dev_mode' => 0,
            'psshipping.cdn_url' => 'https://assets.prestashop3.com/shipping',
            'psshipping.api_url' => 'https://shipping-api.prestashop.com',
            'psshipping.cloudsync_cdc_url' => 'https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js',
            'psshipping.use_local_vue_app' => 0,
            'psshipping.mbe_tracking_url' => 'https://www.mbe.it/en/tracking?c=@',
            'psshipping.segment_key' => '3XsHeI2dfKoKE2wReGp7IO2bLa5hbeVB',
        ];
    }
}
