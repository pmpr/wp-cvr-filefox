<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67915234b5a7e             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Container\CoverInitiator; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Textarea; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Cover\Filefox\Navigation\Navigation; use Pmpr\Cover\Filefox\Page\Front; use Pmpr\Cover\Filefox\Woocommerce\Woocommerce; class Filefox extends CoverInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\106\151\x6c\145\146\157\x78\x20\103\157\166\x65\x72", PR__CVR__FILEFOX); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Image::symcgieuakksimmu(); Search::symcgieuakksimmu(); Header::symcgieuakksimmu(); Footer::symcgieuakksimmu(); Archive::symcgieuakksimmu(); Comment::symcgieuakksimmu(); Breadcrumb::symcgieuakksimmu(); Navigation::symcgieuakksimmu(); Pagination::symcgieuakksimmu(); Front::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x69\x64\x67\145\164\x73\137\x69\x6e\x69\x74", [$this, "\171\155\141\x79\167\x63\143\141\x69\x73\143\x73\155\163\x69\x6b"])->qcsmikeggeemccuu("\141\146\164\x65\x72\137\x73\x65\x74\165\x70\x5f\164\x68\145\155\145", [$this, "\x71\161\167\161\x6d\x67\145\x61\x71\151\171\143\x65\x75\x71\x61"])->qcsmikeggeemccuu("\x67\x65\164\137\164\150\x65\x5f\141\162\x63\x68\x69\166\x65\137\x74\x69\164\154\145\x5f\x70\x72\145\146\x69\x78", "\137\x5f\162\145\164\165\162\x6e\137\x65\x6d\160\164\171\x5f\x73\164\x72\x69\156\x67"); $this->waqewsckuayqguos("\151\156\151\164\x5f\x63\157\166\x65\x72", [$this, "\162\145\x6e\144\x65\x72"])->waqewsckuayqguos("\142\x65\146\157\162\145\x5f\145\156\161\165\145\165\145\137\x66\x72\x6f\x6e\164\145\156\x64\137\141\163\x73\x65\164\163", [$this, "\145\x6e\x71\x75\145\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\x6f\144\171\x5f\x63\x6c\141\x73\x73", [$this, "\x63\x73\163\x6b\153\x77\x6b\151\167\x61\x6d\167\x75\x61\x77\165"]); $this->aqaqisyssqeomwom("\x74\x68\145\155\x65\x5f\143\x6f\x6c\x6f\162\x73", [$this, "\147\x69\x61\x63\145\143\161\141\x6d\143\x67\x61\171\x73\141\161"])->aqaqisyssqeomwom("\164\150\x65\155\145\x5f\142\165\164\x74\x6f\x6e\137\163\151\x7a\145\163", [$this, "\x61\167\155\151\x71\171\x77\141\x77\143\151\x75\x79\141\x6f\x65"])->aqaqisyssqeomwom("\146\162\157\156\x74\x65\156\x64\137\146\157\162\155\137\146\x69\145\x6c\x64\x73", [$this, "\x71\163\x6f\155\x77\165\x6b\x61\x6f\x69\x69\161\x73\171\157\155"], 999, 2); } public function enqueue() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $ccamueccusigaaio = "\141\x70\x70"; $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, "\146\x6f\156\164", "\x68\x74\x74\x70\x73\x3a\x2f\57\166\x31\x2e\x66\x6f\x6e\164\x61\x70\151\56\x69\162\57\143\163\163\57\126\x61\172\x69\162"))->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, $ccamueccusigaaio, "{$ccamueccusigaaio}\56\143\163\x73")); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, $ccamueccusigaaio, "{$ccamueccusigaaio}\x2e\x6a\x73")->simswskycwagoeqy()->okawmmwsiuauwsiu()->qcgcugswouueymok()); } } public function dequeue() { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->qkyugogwegiuiime("\147\154\157\142\x61\154\x2d\x73\164\x79\154\145\x73"); } public function qsomwukaoiiqsyom($ikgwqyuyckaewsow, $mcmcymukmqioukkk) { if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select || $aiowsaccomcoikus instanceof Textarea) { $aiowsaccomcoikus->uqamgcwceyasmoki(); } } } return $ikgwqyuyckaewsow; } public function giacecqamcgaysaq() : array { return [Constants::PRIMARY => __("\120\162\151\155\141\162\171", PR__CVR__FILEFOX), Constants::SECONDARY => __("\x53\x65\x63\x6f\x6e\x64\141\x72\x79", PR__CVR__FILEFOX), Constants::ckcawaoawwioqecq => __("\x53\x75\x63\143\x65\163\x73", PR__CVR__FILEFOX), Constants::smkwuwawwaqyimcq => __("\x49\x6e\x66\x6f", PR__CVR__FILEFOX), Constants::ecioqysekgaasegg => __("\127\141\x72\156\151\x6e\x67", PR__CVR__FILEFOX), Constants::wyaqwomqwwaoiwas => __("\x44\x61\156\x67\x65\x72", PR__CVR__FILEFOX)]; } public function awmiqywawciuyaoe() : array { return [Constants::ykecciymmukkwucu => __("\123\x6d\x61\154\154", PR__CVR__FILEFOX), Constants::agaisgmugicmioge => __("\x4d\x65\x64\x69\165\x6d", PR__CVR__FILEFOX), Constants::esgegasyoiyogwqc => __("\114\x61\162\x67\145", PR__CVR__FILEFOX)]; } public function csskkwkiwamwuawu($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[''] = "\x62\147\55\x6c\x69\x67\x68\x74"; return $cmkqisoeyioisqaw; } public function qqwqmgeaqiyceuqa() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $ewsqcacamuomwagw->musuokisgmmamoua("\141\x73\151\144\145"); $ewsqcacamuomwagw->musuokisgmmamoua("\150\x74\x6d\x6c\65", [Constants::qssgasiyswwaciwc, Constants::wwukgkqwyakeqwqk]); $ewsqcacamuomwagw->musuokisgmmamoua("\155\x65\156\165\163"); $ewsqcacamuomwagw->musuokisgmmamoua("\x77\151\144\147\145\164\163"); $ewsqcacamuomwagw->musuokisgmmamoua("\164\x69\x74\154\x65\55\x74\141\147"); $ewsqcacamuomwagw->musuokisgmmamoua("\167\157\157\143\157\x6d\x6d\145\162\x63\145"); $ewsqcacamuomwagw->musuokisgmmamoua("\160\x6f\x73\x74\55\164\150\165\155\142\156\141\151\154\x73"); $ewsqcacamuomwagw->musuokisgmmamoua("\141\165\164\157\155\x61\x74\151\143\55\146\x65\x65\144\x2d\154\151\156\x6b\x73"); } public function render() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->get($this); $iawmgqqucqegmiay = $this->kasioquywmeosmsi(); $aiieyweysaukqemc = $wksoawcgagcgoask->aqkmwawoaaigkoyq(); $wyemmogwicicgauy = $this->caokeucsksukesyo()->ogciwyoqgciosgcw(); [$oammesyieqmwuwyi, $qookweymeqawmcwo] = $wyemmogwicicgauy->ksiiwoecggoscqkm(PR__CVR__FILEFOX); $qqscaoyqikuyeoaw = $wyemmogwicicgauy->eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $aiieyweysaukqemc); if (!$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $qqscaoyqikuyeoaw = $wyemmogwicicgauy->eaqgqqisicwiqkio($iawmgqqucqegmiay, ["\151\x6e\144\145\170"], $aiieyweysaukqemc); } [$qqscaoyqikuyeoaw, $qookweymeqawmcwo] = $this->sscegwueamckwmcy("\x63\x6f\x76\x65\x72\x5f\164\x65\x6d\160\x6c\x61\164\145\x5f\x72\x65\x71\165\x69\x72\x65\x6d\x65\x6e\164\163", [$qqscaoyqikuyeoaw, $qookweymeqawmcwo]); $qookweymeqawmcwo["\x69\163\x5f\x6d\157\x62\x69\154\145"] = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm(); $qookweymeqawmcwo["\151\163\137\164\141\142\x6c\145\x74"] = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->qsqicssyqieuqooy(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo); echo $this->ocksiywmkyaqseou("\x63\157\x76\x65\x72\x5f\162\x65\x6e\144\145\x72", $nsmgceoqaqogqmuw, $qqscaoyqikuyeoaw, $qookweymeqawmcwo); } public function ymaywccaiscsmsik() { $cmauigumuqeyikee = [Constants::ckyiayyeksyqosei => '', Constants::gkkeyqoigqiukkqk => '']; $wyemmogwicicgauy = $this->caokeucsksukesyo()->ogciwyoqgciosgcw(); $iwooocaiciimomww = $cmauigumuqeyikee; $wyemmogwicicgauy->ymaywccaiscsmsik("\146\x6f\157\164\x65\x72\55\x74\x6f\160", __("\106\x6f\157\164\x65\x72\40\x54\x6f\160", PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik("\146\x6f\157\164\145\162\55\x31", __("\x46\157\157\164\x65\162\x20\43\61", PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik("\x66\157\x6f\164\145\162\55\62", __("\x46\x6f\x6f\164\145\x72\40\x23\x32", PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik("\x66\x6f\157\164\145\x72\55\63", __("\x46\x6f\157\164\145\162\x20\43\x33", PR__CVR__FILEFOX), $cmauigumuqeyikee); $wyemmogwicicgauy->ymaywccaiscsmsik("\146\157\157\164\145\162\x2d\64", __("\106\x6f\157\164\145\162\x20\43\x34", PR__CVR__FILEFOX), $cmauigumuqeyikee); } }
