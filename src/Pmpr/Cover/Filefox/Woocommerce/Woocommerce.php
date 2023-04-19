<?php

namespace Pmpr\Cover\Filefox\Woocommerce;

/**
 * Class Woocommerce
 * @package Pmpr\Cover\Filefox\Woocommerce
 */
class Woocommerce extends Common
{
    public function addActions()
    {
        $this->addAction('wp', [$this, 'wp']);
    }

    public function addFilters()
    {
        $this->addFilter('amp_has_amp', [$this, 'disableAmp']);
    }

    public function wp()
    {
        $this->loadRequirement();
        $wooWrapper = $this->getWrapper()->getWoocommerce();
        if ($wooWrapper->isCart()
            || $wooWrapper->isCheckout()
            || $wooWrapper->isAccountPage()) {

            define('PR_OPT_DONT_CACHE_PAGE', 1);
        }
    }

    public function loadRequirement()
    {
        Base::getInstance();
    }

    /**
     * @param $has
     *
     * @return bool
     */
    public function disableAmp($has): bool
    {
        $wooWrapper = $this->getWrapper()->getWoocommerce();
        return $has && !$wooWrapper->isWoocommerce()
            && !$wooWrapper->isAccountPage();
    }
}
