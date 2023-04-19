<?php

namespace Pmpr\Cover\Filefox;

use Pmpr\Cover\Filefox\Navigation\Navigation;
use Pmpr\Cover\Filefox\Woocommerce\Woocommerce;

/**
 * Class Filefox
 * @package Pmpr\Cover\Filefox
 */
class Filefox extends Container
{
    /**
     * Filefox constructor.
     */
    public function __construct()
    {
        $this->registerComponent(__DIR__, [
            self::TITLE     => static function () {
                return __('Filefox Cover', PR__CVR__FILEFOX);
            },
            self::MENU_SLUG => false
        ]);

        parent::__construct();
        $this->loadRequirement();
    }

    public function addActions()
    {
        $this->addAction('widgets_init', [$this, 'registerSidebar'])
             ->addAction('after_setup_theme', [$this, 'coverSupport'])
             ->addAction('get_the_archive_title_prefix', '__return_empty_string');

        $this->customAddAction('init_cover', [$this, 'render']);
    }

    public function addFilters()
    {
        $this->addFilter('body_class', [$this, 'bodyClass']);
    }

    public function loadRequirement()
    {
        Asset::getInstance();
        Header::getInstance();
        Footer::getInstance();
        Breadcrumb::getInstance();
        Navigation::getInstance();

        if ($this->getHelper()->getWoocommerce()->isActive()) {

            Woocommerce::getInstance();
        }
    }

    /**
     * @param $classes
     *
     * @return mixed
     */
    public function bodyClass($classes)
    {
        $classes[''] = 'bg-light';

        return $classes;
    }
    public function coverSupport()
    {
        $themeWrapper = $this->getWrapper()->getTheme();

        $themeWrapper->addSupport('aside');
        $themeWrapper->addSupport('html5', [self::SCRIPT, self::STYLE]);
        $themeWrapper->addSupport('menus');
        $themeWrapper->addSupport('widgets');
        $themeWrapper->addSupport('title-tag');
        $themeWrapper->addSupport('woocommerce');
        $themeWrapper->addSupport('post-thumbnails');
        $themeWrapper->addSupport('automatic-feed-links');
    }

    public function registerSidebar()
    {
        $defaultArgs = [
            self::BEFORE_WIDGET => '<div class="mb-5">',
            self::AFTER_WIDGET  => '</div>',
        ];

        $themeHelper = $this->getHelper()->getTheme();

        $stickyArgs = $defaultArgs;

    }
    public function render()
    {
        $component = self::getRegisteredComponent();

        $templating = $this->getTemplating();

        $namespace = $component->getTwigNamespace();
        $themeHelper = $this->getHelper()->getTheme();

        [$items, $parameters] = $themeHelper->getTemplateHierarchy(PR__CVR__FILEFOX);

        $template = $themeHelper->revertTemplate($templating, $items, $namespace);

        if (!$templating->exists($template)) {

            $template = $themeHelper->revertTemplate($templating, ['index'], $namespace);
        }

        [$template, $parameters] = $this->applyFilters('cover_template_requirements', [$template, $parameters]);

        $html = $this->renderTemplate($template, $parameters);

        echo $this->customApplyFilters('cover_render', $html, $template, $parameters);
    }
}
