<?php

namespace Pmpr\Cover\Filefox;

/**
 * Class Asset
 * @package Pmpr\Cover\Filefox
 */
class Asset extends Container
{
    public function addActions()
    {
        $this->addAction('after_setup_theme', [$this, 'enqueue'])
             ->addAction('wp_enqueue_scripts', [$this, 'dequeue']);
    }

    public function dequeue()
    {
        $this->getWrapper()->getAsset()->dequeueStyle('global-styles');
    }

    public function enqueue()
    {
        $manager = $this->getAssetManager();
        if (!$this->getHelper()->getQuery()->isAMP()) {

            $target = 'app';
            $font   = 'https://v1.fontapi.ir/css/Vazir';

            $manager->addFrontSource($manager->getStyleSource('font', $font))
                    ->addFrontSource($manager->getStyleSource($target, $manager->get("{$target}.css")));

            $manager->addFrontSource(
                $manager->getScriptSource(
                    $target, $manager->get("{$target}.js")
                )->addCommonDependencies()
            );
        }
    }

}
