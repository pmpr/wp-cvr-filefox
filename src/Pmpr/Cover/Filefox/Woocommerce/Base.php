<?php

namespace Pmpr\Cover\Filefox\Woocommerce;

/**
 * Class Base
 * @package Pmpr\Cover\Filefox\Woocommerce
 */
class Base extends Template
{
    public function removeActions()
    {
        // unhook the WooCommerce wrappers
        $this->removeAction('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20)
             ->removeAction('woocommerce_before_main_content', 'woocommerce_output_content_wrapper')
             ->removeAction('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');

        parent::removeActions();
    }

    public function addActions()
    {
        $this
            // open close container
            ->addAction('woocommerce_before_main_content', [$this, 'openContainer'], 0)
            ->addAction('woocommerce_sidebar', [$this, 'closeDiv'], PHP_INT_MAX);

        parent::addActions();
    }
}
