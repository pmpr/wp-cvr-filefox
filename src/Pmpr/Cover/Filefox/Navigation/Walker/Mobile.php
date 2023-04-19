<?php

namespace Pmpr\Cover\Filefox\Navigation\Walker;

use Pmpr\Common\Foundation\Interfaces\IconInterface;

/**
 * Class Mobile
 * @package Pmpr\Cover\Filefox\Navigation\Walker
 */
class Mobile extends Walker
{
    /**
     * Mobile constructor.
     */
    public function __construct()
    {
        $this->setLvlAttrs([
            'class' => 'list-unstyled collapse border-none',
        ]);
    }

    /**
     * @param $item
     * @param $hasChildren
     *
     * @return string
     */
    public function getLinkClass($item, $hasChildren): string
    {
        return 'font-weight-bold fs-sm p-0 text-white-secondary';
    }

    /**
     * @param $attributes
     * @param $item
     * @param $hasChildren
     *
     * @return mixed
     */
    public function updateItemAttributes($attributes, $item, $hasChildren)
    {
        $attributes = $this->getHelper()->getHTML()->addAttribute($attributes, 'class', 'py-2');

        return parent::updateItemAttributes($attributes, $item, $hasChildren);
    }

    /**
     * @param $link
     * @param $item
     * @param $hasChildren
     *
     * @return mixed
     */
    public function updateLink($link, $item, $hasChildren)
    {
        if ($hasChildren) {

            $htmlHelper = $this->getHelper()->getHTML();

            $arrow = $htmlHelper->generateIcon(IconInterface::ICON_FASM_ANGLE_DOWN, ['class' => 'icon-light rotate-180']);

            $arrow = $htmlHelper->generateLink($arrow, "#{$this->generateLevelId()}", [
                'class'         => 'rotate-on-show d-flex w-100 my-auto justify-content-end',
                'data-toggle'   => 'collapse',
                'aria-expanded' => 'false',
            ], __('Arrow Icon', PR__CVR__FILEFOX));

            $link = $htmlHelper->generateSpan($link . $arrow, [
                'class' => 'd-flex justify-content-between',
            ]);
        }
        return $link;
    }
}
