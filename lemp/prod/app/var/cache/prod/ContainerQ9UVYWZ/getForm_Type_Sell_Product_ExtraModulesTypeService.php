<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.extra_modules_type' shared service.

return $this->services['form.type.sell.product.extra_modules_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\ExtraModulesType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.adapter.data_provider.module'] ?? $this->getPrestashop_Adapter_DataProvider_ModuleService()), ($this->services['prestashop.core.admin.module.repository'] ?? $this->getPrestashop_Core_Admin_Module_RepositoryService()));