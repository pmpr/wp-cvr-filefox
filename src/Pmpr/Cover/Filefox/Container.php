<?php

namespace Pmpr\Cover\Filefox;

use Pmpr\Common\Foundation\Container\Container as BaseClass;

/**
 * Class Container
 * @package Pmpr\Cover\Filefox
 */
abstract class Container extends BaseClass
{
    /**
     * Container constructor.
     */
    public function __construct()
    {
        $this->settingObj = Setting::getInstance();
        parent::__construct();
    }
}
