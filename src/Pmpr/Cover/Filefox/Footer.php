<?php

namespace Pmpr\Cover\Filefox;

/**
 * Class Footer
 * @package Pmpr\Cover\Filefox
 */
class Footer extends Container
{
    public function addActions()
    {
        $this->addAction('wp_footer', [$this, 'maybeAddScrollUp'])
             ->addAction('widgets_init', [$this, 'registerSidebar']);

        $this->customAddAction('render_footer', [$this, 'render'])
             ->customAddAction('render_signature', [$this, 'renderSignature']);
    }

    public function render()
    {
        echo $this->renderTemplate('index');
    }

    public function maybeAddScrollUp()
    {
//        if ($this->getCustomizerOption(self::SCROLL_UP)) {
//
//            $htmlHelper = $this->getHelper()->getHTML();
//
//            $icon = $this->getCustomizerOption(
//                self::SCROLL_UP_ICON,
//                IconInterface::ICON_FASM_CIRCLE_ARROW_UP
//            );
//
//            $icon = $htmlHelper->generateIcon($icon, [
//                'class' => 'icon-lg icon-white hover-transient',
//            ]);
//
//            echo $htmlHelper->generateLink($icon, '#top', [
//                'id'    => 'scrollUp',
//                'class' => 'p-2 left-0 bottom-0 ml-5 mb-10 bg-primary-secondary d-none',
//            ], __('Scroll UP', PR__CVR__FILEFOX));
//        }
    }

    public function registerSidebar()
    {
//        $sidebars = [
//            sprintf(__('Footer #%s', PR__CVR__FILEFOX), $this->transNumber(1)),
//            sprintf(__('Footer #%s', PR__CVR__FILEFOX), $this->transNumber(2)),
//            sprintf(__('Footer #%s', PR__CVR__FILEFOX), $this->transNumber(3)),
//            sprintf(__('Footer #%s', PR__CVR__FILEFOX), $this->transNumber(4)),
//            sprintf(__('Footer #%s', PR__CVR__FILEFOX), $this->transNumber(5)),
//        ];
//
//        $themeHelper = $this->getHelper()->getTheme();
//        foreach ($sidebars as $index => $title) {
//
//            ++$index;
//            $themeHelper->registerSidebar("footer-{$index}", $title, [
//                self::BEFORE_WIDGET => '',
//                self::AFTER_WIDGET  => '',
//            ]);
//        }
    }

}
