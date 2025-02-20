<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702d58f2e1             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Container\CoverInitiator; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Textarea; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Cover\Filefox\Navigation\Navigation; use Pmpr\Cover\Filefox\Page\Front; use Pmpr\Cover\Filefox\Woocommerce\Woocommerce; class Filefox extends CoverInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Filefox Cover', PR__CVR__FILEFOX); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Image::symcgieuakksimmu(); Search::symcgieuakksimmu(); Header::symcgieuakksimmu(); Footer::symcgieuakksimmu(); Archive::symcgieuakksimmu(); Comment::symcgieuakksimmu(); Breadcrumb::symcgieuakksimmu(); Navigation::symcgieuakksimmu(); Pagination::symcgieuakksimmu(); Front::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('widgets_init', [$this, 'ymaywccaiscsmsik'])->qcsmikeggeemccuu('after_setup_theme', [$this, 'qqwqmgeaqiyceuqa'])->qcsmikeggeemccuu('get_the_archive_title_prefix', '__return_empty_string'); $this->waqewsckuayqguos('init_cover', [$this, 'render'])->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'enqueue']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('body_class', [$this, 'csskkwkiwamwuawu']); $this->aqaqisyssqeomwom('theme_colors', [$this, 'giacecqamcgaysaq'])->aqaqisyssqeomwom('theme_button_sizes', [$this, 'awmiqywawciuyaoe'])->aqaqisyssqeomwom('frontend_form_fields', [$this, 'qsomwukaoiiqsyom'], 999, 2); } public function enqueue() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $ccamueccusigaaio = 'app'; $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'font', 'https://v1.fontapi.ir/css/Vazir'))->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, $ccamueccusigaaio, "{$ccamueccusigaaio}.css")); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, $ccamueccusigaaio, "{$ccamueccusigaaio}.js")->simswskycwagoeqy()->okawmmwsiuauwsiu()->qcgcugswouueymok()); } } public function dequeue() { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->qkyugogwegiuiime('global-styles'); } public function qsomwukaoiiqsyom($ikgwqyuyckaewsow, $mcmcymukmqioukkk) { if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select || $aiowsaccomcoikus instanceof Textarea) { $aiowsaccomcoikus->uqamgcwceyasmoki(); } } } return $ikgwqyuyckaewsow; } public function giacecqamcgaysaq() : array { return [Constants::PRIMARY => __('Primary', PR__CVR__FILEFOX), Constants::SECONDARY => __('Secondary', PR__CVR__FILEFOX), Constants::ckcawaoawwioqecq => __('Success', PR__CVR__FILEFOX), Constants::smkwuwawwaqyimcq => __('Info', PR__CVR__FILEFOX), Constants::ecioqysekgaasegg => __('Warning', PR__CVR__FILEFOX), Constants::wyaqwomqwwaoiwas => __('Danger', PR__CVR__FILEFOX)]; } public function awmiqywawciuyaoe() : array { return [Constants::ykecciymmukkwucu => __('Small', PR__CVR__FILEFOX), Constants::agaisgmugicmioge => __('Medium', PR__CVR__FILEFOX), Constants::esgegasyoiyogwqc => __('Large', PR__CVR__FILEFOX)]; } public function csskkwkiwamwuawu($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[''] = 'bg-light'; return $cmkqisoeyioisqaw; } public function qqwqmgeaqiyceuqa() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $ewsqcacamuomwagw->musuokisgmmamoua('aside'); $ewsqcacamuomwagw->musuokisgmmamoua('html5', [Constants::qssgasiyswwaciwc, Constants::wwukgkqwyakeqwqk]); $ewsqcacamuomwagw->musuokisgmmamoua('menus'); $ewsqcacamuomwagw->musuokisgmmamoua('widgets'); $ewsqcacamuomwagw->musuokisgmmamoua('title-tag'); $ewsqcacamuomwagw->musuokisgmmamoua('woocommerce'); $ewsqcacamuomwagw->musuokisgmmamoua('post-thumbnails'); $ewsqcacamuomwagw->musuokisgmmamoua('automatic-feed-links'); } public function render() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this); $iawmgqqucqegmiay = $this->kasioquywmeosmsi(); $aiieyweysaukqemc = $wksoawcgagcgoask->aqkmwawoaaigkoyq(); $wyemmogwicicgauy = $this->caokeucsksukesyo()->ogciwyoqgciosgcw(); [$oammesyieqmwuwyi, $qookweymeqawmcwo] = $wyemmogwicicgauy->ksiiwoecggoscqkm(PR__CVR__FILEFOX); $qqscaoyqikuyeoaw = $wyemmogwicicgauy->eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $aiieyweysaukqemc); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $qqscaoyqikuyeoaw = $wyemmogwicicgauy->eaqgqqisicwiqkio($iawmgqqucqegmiay, ['index'], $aiieyweysaukqemc); } [$qqscaoyqikuyeoaw, $qookweymeqawmcwo] = $this->sscegwueamckwmcy('cover_template_requirements', [$qqscaoyqikuyeoaw, $qookweymeqawmcwo]); $qookweymeqawmcwo['is_mobile'] = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm(); $qookweymeqawmcwo['is_tablet'] = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->qsqicssyqieuqooy(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo); echo $this->ocksiywmkyaqseou('cover_render', $nsmgceoqaqogqmuw, $qqscaoyqikuyeoaw, $qookweymeqawmcwo); } public function ymaywccaiscsmsik() { $cmauigumuqeyikee = [Constants::ckyiayyeksyqosei => '', Constants::gkkeyqoigqiukkqk => '']; $wyemmogwicicgauy = $this->caokeucsksukesyo()->ogciwyoqgciosgcw(); $iwooocaiciimomww = $cmauigumuqeyikee; $wyemmogwicicgauy->ymaywccaiscsmsik('footer-top', __('Footer Top', PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik('footer-1', __('Footer #1', PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik('footer-2', __('Footer #2', PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik('footer-3', __('Footer #3', PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik('footer-4', __('Footer #4', PR__CVR__FILEFOX), $cmauigumuqeyikee); } }
