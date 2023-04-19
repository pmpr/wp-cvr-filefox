<?php

namespace Pmpr\Cover\Filefox\Navigation;

use Pmpr\Cover\Filefox\Container;
use Pmpr\Cover\Filefox\Navigation\Walker\Desktop;
use Pmpr\Cover\Filefox\Navigation\Walker\Mobile;
use Pmpr\Cover\Filefox\Navigation\Walker\Walker;

/**
 * Class Navigation
 * @package Pmpr\Cover\Filefox\Navigation
 */
class Navigation extends Container
{
    const MOBILE_MENU  = 'mobile-menu';
    const DESKTOP_MENU = 'desktop-menu';
    public function addActions()
    {
        $this->addAction('init', [$this, 'registerMenus']);
    }

    public function addFilters()
    {
        $this->addFilter('wp_nav_menu_args', [$this, 'updateNavArgs']);
    }

    /**
     * @return array
     */
    public function getLocations(): array
    {
        return [
            self::DESKTOP_MENU => __('Desktop Navigation Menu', PR__CVR__FILEFOX),
            self::MOBILE_MENU  => __('Mobile Navigation Menu', PR__CVR__FILEFOX),
        ];
    }

    public function registerMenus()
    {
        $themeWrapper = $this->getWrapper()->getTheme();
        foreach ($this->getLocations() as $location => $name) {

            $themeWrapper->registerNavMenu($location, $name);
        }
    }

    /**
     * @param array $args
     *
     * @return array
     */
    public function updateNavArgs($args = []): array
    {
        $location = $this->getHelper()->getArray()->get($args, 'theme_location');

        $default = [
            'echo'                 => true,
            'menu'                 => '',
            'depth'                => 0,
            'after'                => '',
            'walker'               => new Walker(),
            'before'               => '',
            'menu_id'              => '',
            'li_class'             => '',
            'container'            => '',
            'link_class'           => 'nav-link',
            'items_wrap'           => '',
            'menu_class'           => '',
            'link_after'           => '',
            'link_before'          => '',
            'fallback_cb'          => false,
            'item_spacing'         => 'discard', // Accepts 'preserve' or 'discard'
            'container_id'         => '',
            'container_class'      => '',
            'container_aria_label' => '',

        ];

        $args      = $this->getHelper()->getFormat()->arrayParseArgs(array_filter($args), $default);
        $wrapClass = 'list-unstyled mb-0';
        switch ($location) {
            case self::MOBILE_MENU:

                $args['walker'] = new Mobile();
                break;
            case self::DESKTOP_MENU:

                $wrapClass      .= ' d-flex';
                $args['walker'] = new Desktop();
                break;
        }

        $args['items_wrap'] = $this->getHelper()->getHTML()->generateCloseableElement('ul', ['class' => $wrapClass], '%3$s');

        return $args;
    }
}
