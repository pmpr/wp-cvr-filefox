<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702d58f2e1             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Header extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('widgets_init', [$this, 'ymaywccaiscsmsik'])->qcsmikeggeemccuu('widgets_init', [$this, 'mysamweggamekgow']); $this->waqewsckuayqguos('render_header', [$this, 'render'])->waqewsckuayqguos('render_header_top_menu', [$this, 'oqciyuyakamguuqc']); } public function kgquecmsgcouyaya() { } public function render() { [$qqscaoyqikuyeoaw, $qookweymeqawmcwo] = $this->sscegwueamckwmcy('cover_template_requirements', [$this->eskggqsasgsiommy('index'), []]); echo $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo); } public function oqciyuyakamguuqc() { $nsmgceoqaqogqmuw = ''; $cucagwqokeieoecu = ['class' => 'icon-xxl icon-dark']; $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $oammesyieqmwuwyi = [Setting::mycgkcgmqgikqogk => [Constants::TEXT => __('Cart', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => Setting::giesgyymgqsuoqwm, Constants::auqoykcmsiauccao => $ekymkycgewkiouqe->geoemsmuouqcqmei()], Setting::cwuosgacqkwaikee => [Constants::TEXT => __('Account', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => Setting::eecasioqmcyaiqce, Constants::auqoykcmsiauccao => $ekymkycgewkiouqe->gauymgyqasaqyqam()]]; $ksgkoukcicwkkaum = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if ($this->weysguygiseoukqw($uusmaiomayssaecw . Constants::yyicwqsqaecyqwco)) { $eeamcawaiqocomwy = $igqsaukqcqscimok[Constants::auqoykcmsiauccao]; $cmwygeyygwqaemaq = $igqsaukqcqscimok[Constants::TEXT]; $wmqwkwyuqwksiiqk = $uusmaiomayssaecw === Setting::mycgkcgmqgikqogk; if (!$ksgkoukcicwkkaum || $wmqwkwyuqwksiiqk) { $kcyoesmigeeiiqgo = $swqimwqeweekeusq->cuoygaaeqeqcuggu($this->weysguygiseoukqw($igqsaukqcqscimok[Constants::qgqyauaqwqmqseim]), $cucagwqokeieoecu); } else { if ($this->weysguygiseoukqw(Setting::squceagkyimasiqg)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $kcyoesmigeeiiqgo = $yoiguusocukqeayg->ogcwgigqwycqswms($yoiguusocukqeayg->get(), 30, ['class' => 'rounded-circle']); } else { $kcyoesmigeeiiqgo = $swqimwqeweekeusq->cuoygaaeqeqcuggu($this->weysguygiseoukqw(Setting::oqoaescwoagoimae), $cucagwqokeieoecu); } } $kcyoesmigeeiiqgo = $this->ocksiywmkyaqseou("header_left_{$uusmaiomayssaecw}menu_icon", $kcyoesmigeeiiqgo, $igqsaukqcqscimok); $wwgucssaecqekuek = ['class' => 'd-flex position-relative']; if (!$wmqwkwyuqwksiiqk && ($ksgkoukcicwkkaum && !$cgceoyqmmwumqyqa->ckeyeaouokcgeqeq()) || $wmqwkwyuqwksiiqk && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc()) { $wwgucssaecqekuek = $swqimwqeweekeusq->sueyawuweyoqyeaq($wwgucssaecqekuek, ['class' => 'cart-aside-toggle aside-toggle', 'data-target' => "#{$uusmaiomayssaecw}aside"]); } $smuwyouaickeusue = $swqimwqeweekeusq->yuawgssgauywkiia($kcyoesmigeeiiqgo, $eeamcawaiqocomwy, $wwgucssaecqekuek, $cmwygeyygwqaemaq); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->iaaacsuskiakkwui($smuwyouaickeusue, ['class' => 'position-relative my-auto ms-3']); } } echo $nsmgceoqaqogqmuw; } } public function ymaywccaiscsmsik() { $wyemmogwicicgauy = $this->caokeucsksukesyo()->ogciwyoqgciosgcw(); $wyemmogwicicgauy->ymaywccaiscsmsik('mobile-aside', __('Mobile Aside', PR__CVR__FILEFOX), [Constants::ckyiayyeksyqosei => '', Constants::gkkeyqoigqiukkqk => '']); $wyemmogwicicgauy->ymaywccaiscsmsik('header-bottom-left', __('Header Bottom Left', PR__CVR__FILEFOX), [Constants::ckyiayyeksyqosei => '', Constants::gkkeyqoigqiukkqk => '']); } public function mysamweggamekgow() { global $wp_widget_factory; $this->kuieicsuscgmwigg('wp_head', [$wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style']); } }
