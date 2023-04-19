<?php

namespace Pmpr\Cover\Filefox\Traits;

/**
 * Trait CommonTrait
 * @package Pmpr\Cover\Filefox\Traits
 */
trait CommonTrait
{
    /**
     * @return array
     */
    public function getCoverImageSizes(): array
    {
        return [
        ];
    }

    /**
     * @param array $attrs
     * @param string $effect
     * @param int|string $delay
     * @param bool $echo
     * @param bool $immediately
     *
     * @return array|mixed|string
     */
    public function addAnimation(array $attrs = [], string $effect = 'fadeIn', $delay = '1', bool $echo = true, bool $immediately = false)
    {
        $class = 'animate';
        if ($immediately) {

            $class .= " animated {$effect} animate-delay-" . (int)$delay;
        }
        $HTMLHelper = $this->getHelper()->getHTML();

        $attrs = $HTMLHelper->addAttributes($attrs, [
            'class'       => $class,
            'data-delay'  => "{$delay}s",
            'data-effect' => $effect,
        ]);

        if ($echo) {

            echo $HTMLHelper->parseAttributes($attrs);
            $attrs = '';
        }

        return $attrs;
    }

}
