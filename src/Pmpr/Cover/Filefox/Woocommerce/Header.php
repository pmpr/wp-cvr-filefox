<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cf387430f32             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Cover\Filefox\Setting; use WC_Widget_Cart; class Header extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_footer', [$this, 'omsoqyikokqkiaqi'])->qcsmikeggeemccuu('wp_footer', [$this, 'wiewyouigmeywmew']); } public function oewskwikmmawggeg($aqykuigiuwmmcieu) : string { return $aqykuigiuwmmcieu . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($this->eokyamkqwyyuesek(0), ['class' => 'position-absolute bottom-0 end-0 bg-white rounded-circle text-primary icon-md text-center font-weight-bold fs-sm']); } public function omsoqyikokqkiaqi() { if ($this->guquooskwgqcmiyw() && $this->weysguygiseoukqw(Setting::ukaueakyaaeuoowc)) { $this->iuygowkemiiwqmiw('cart_aside', ['widget' => WC_Widget_Cart::class, 'aside_id' => 'header_cart', 'cart_title' => __('Shopping Cart', PR__CVR__FILEFOX), 'count_text' => sprintf('%s %s', $this->eokyamkqwyyuesek(0), __('Product', PR__CVR__FILEFOX)), 'empty_text' => __('No products in the cart.', PR__CVR__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } } public function wiewyouigmeywmew() { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum() && $this->weysguygiseoukqw(Setting::yuuegikmkgwcqoyu)) { $oammesyieqmwuwyi = []; $ymmmmaiuoocagigk = $this->weysguygiseoukqw(Setting::sakqiumesekgquyk, []); if ($ymmmmaiuoocagigk) { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $sowouiywwmkayamk = $cgceoyqmmwumqyqa->kamgouysgcgiaosw(); if ($sowouiywwmkayamk) { foreach ($sowouiywwmkayamk as $kgccggmwkeukkkci => $pkyyagewkiyckmwy) { if (in_array($kgccggmwkeukkkci, $ymmmmaiuoocagigk, true)) { $oammesyieqmwuwyi[$kgccggmwkeukkkci] = [Constants::TEXT => $pkyyagewkiyckmwy, Constants::qgqyauaqwqmqseim => $this->uuiqowweqqewoysu($kgccggmwkeukkkci), Constants::ogigqueukwysusii => $cgceoyqmmwumqyqa->quiocgkecyewioqa($kgccggmwkeukkkci), Constants::iuqumwggccmcuyem => 0]; } } } } $oammesyieqmwuwyi = (array) $this->ocksiywmkyaqseou('woocommerce_menu_account_dropdown_links', $oammesyieqmwuwyi); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $this->iuygowkemiiwqmiw('account_aside', ['links' => $oammesyieqmwuwyi, 'aside_id' => 'header_account', Constants::meksegaoamowuwoq => $yoiguusocukqeayg->get(), 'display_name' => $yoiguusocukqeayg->ygwimyogyaqgumam(), 'account_url' => $this->caokeucsksukesyo()->wikusamwomuogoau()->gauymgyqasaqyqam(), 'account_title' => __('My Account', PR__CVR__FILEFOX), 'account_url_text' => __('View Account', PR__CVR__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } } public function eokyamkqwyyuesek($gaeqamemwmwsyukm = null) : ?string { if ($gaeqamemwmwsyukm === null) { $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->wikusamwomuogoau()->gmoosossamayqukq(); } else { $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($gaeqamemwmwsyukm, ['class' => 'count-value']); } public function gwyousmeuuwwiecy($kyayogegqasiumes) { $kyayogegqasiumes['.count-value'] = $this->eokyamkqwyyuesek(); return $kyayogegqasiumes; } public function guquooskwgqcmiyw() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !$cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc(); } }
