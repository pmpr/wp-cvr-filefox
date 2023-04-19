<?php

namespace Pmpr\Cover\Filefox\Navigation\Walker;

use Pmpr\Common\Foundation\Interfaces\IconInterface;

/**
 * Class Desktop
 * @package Pmpr\Cover\Filefox\Navigation\Walker
 */
class Desktop extends Walker
{
    /**
     * Menu constructor.
     */
    public function __construct()
    {
        $this->setLvlAttrs([
            'class' => 'mt-12 p-0 bg-primary dropdown-menu list-unstyled animated-on-show',
        ]);
    }

    /**
     * @param $attributes
     * @param $item
     * @param $hasChildren
     *
     * @return mixed
     */
    public function updateLinkAttributes($attributes, $item, $hasChildren)
    {
        if ($hasChildren) {

            $attributes = $this->addAttribute($attributes, 'data-toggle', 'dropdown');
        }

        return parent::updateLinkAttributes($attributes, $item, $hasChildren);
    }

    /**
     * @param $item
     * @param $hasChildren
     *
     * @return array|mixed|string
     */
    public function addClassToItem($item, $hasChildren)
    {
        $classes      = [];
        $dropdownItem = 'px-2 py-2';
        $firstLevel   = 'px-2 py-3 mr-2';
        if ($hasChildren) {

            $classes = ['custom-dropdown'];
            if ($item->menu_item_parent) {

                $classes[] = $dropdownItem;
            } else {

                $classes[] = $firstLevel;
            }
            $classes[] = 'my-auto';
            $classes[] = 'nav-item';
            $classes[] = 'dropdown';
        } else {

            if ($item->menu_item_parent) {

                $classes[] = $dropdownItem;
            } else {

                $classes[] = $firstLevel;
            }
        }
        if ($classes) {

            $item = $this->addAttribute($item, 'classes', $classes);
        }

        return parent::addClassToItem($item, $hasChildren);
    }

    /**
     * @param $item
     * @param $hasChildren
     *
     * @return string
     */
    public function getLinkClass($item, $hasChildren): string
    {
        $class = 'font-weight-bold fs-sm text-white-secondary';
        if ($item->menu_item_parent && $hasChildren) {

            $class .= ' dropdown-link dropdown-toggle';
        } else {

            $class .= ' p-0';
        }

        return $class;
    }

    /**
     * @param $title
     * @param $item
     * @param $hasChildren
     *
     * @return mixed
     */
    public function updateTitle($title, $item, $hasChildren)
    {
        $arrow      = null;
        $htmlHelper = $this->getHelper()->getHTML();
        if ($item->menu_item_parent) {

            if ($hasChildren) {

                $arrow = $htmlHelper->generateIcon(IconInterface::ICON_FASM_ANGLE_RIGHT, ['class' => 'icon-sm icon-light']);
            }
        } else if ($hasChildren) {

            $arrow = $htmlHelper->generateIcon(IconInterface::ICON_FASM_ANGLE_DOWN, ['class' => 'ml-1 icon-light my-auto icon-sm']);
        }
        if ($arrow) {

            $title = $htmlHelper->generateSpan(
                $title . $arrow,
                ['class' => 'd-flex justify-content-between']
            );
        }

        return $title;
    }
}
