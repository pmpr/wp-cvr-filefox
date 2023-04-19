<?php

use Pmpr\Cover\Filefox\Filefox;

$helper  = Filefox::getStaticHelper();
$wrapper = Filefox::getStaticWrapper();

$passed = $helper->getPlugin()->isRequirementsPassed([
    'php'   => '7.2',
    'wp'    => '5.2',
    'title' => __('Herfe'),
    'file'  => __FILE__,
]);

if ($passed) {

    $themeIns = Filefox::getInstance();

} else {

    wp_die('Requirements did not pass for the cover');
}
