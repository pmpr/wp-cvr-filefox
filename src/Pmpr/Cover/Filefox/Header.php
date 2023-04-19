<?php

namespace Pmpr\Cover\Filefox;

use Pmpr\Common\Foundation\Interfaces\IconInterface;

/**
 * Class Header
 * @package Pmpr\Cover\Filefox
 */
class Header extends Container
{
    public function addActions()
    {
        $this->addAction('widgets_init', [$this, 'registerSidebar'])
             ->addAction('widgets_init', [$this, 'removeRecentCommentsStyle']);

        $this->customAddAction('render_header', [$this, 'render']);
    }

    public function addFilters()
    {

    }

    public function render()
    {
        [$template, $parameters] = $this->applyFilters('cover_template_requirements', [$this->getTemplateFile('index'), []]);

        echo $this->renderTemplate($template, $parameters);
    }

    public function registerSidebar()
    {
        $this->getHelper()->getTheme()->registerSidebar('mobile-aside', __('Mobile Aside', PR__CVR__FILEFOX), [
            self::BEFORE_WIDGET => '',
            self::AFTER_WIDGET  => '',
        ]);
    }

    public function removeRecentCommentsStyle()
    {
        global $wp_widget_factory;
        $this->removeAction('wp_head', [
            $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
            'recent_comments_style',
        ]);
    }

}
