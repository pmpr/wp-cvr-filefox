<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702d58f2e1             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Pagination extends Container { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('pagination_attributes', [$this, 'ccekeuwwqqoiwuwy'], 999)->aqaqisyssqeomwom('pagination_post_arguments', [$this, 'eeqoiekoosqgcyoa'], 999)->aqaqisyssqeomwom('pagination_term_arguments', [$this, 'eeqoiekoosqgcyoa'], 999)->aqaqisyssqeomwom('pagination_comment_arguments', [$this, 'owmeqcskcqmosugo'], 999); $this->cecaguuoecmccuse('paginate_links_output', [$this, 'kguymsmguiokwqes'], 99)->cecaguuoecmccuse('woocommerce_pagination_args', [$this, 'eeqoiekoosqgcyoa'], 99)->cecaguuoecmccuse('woocommerce_comment_pagination_args', [$this, 'owmeqcskcqmosugo'], 99); } public function kguymsmguiokwqes($aqykuigiuwmmcieu = '') : string { if ($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys() || $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm() || $this->caokeucsksukesyo()->aqasygcsqysmmyke()->wyigkiucqmacckiu()) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->gkksucgseqqemesc()->igmaewykumgwoaoy($aqykuigiuwmmcieu, $this->ccekeuwwqqoiwuwy()); } return $aqykuigiuwmmcieu; } public function ccekeuwwqqoiwuwy() : array { $ucsmiamgwmayyoco = 'page-link'; return ['ul' => ['class' => 'pagination'], '.current' => ['class' => 'active'], 'ul > li > span' => ['class' => $ucsmiamgwmayyoco], 'ul > li > a' => ['class' => $ucsmiamgwmayyoco], '.dots' => ['class' => 'border-0 text-primary bg-white'], '.svg-icon' => ['class' => 'icon-centered icon-normal']]; } public function eeqoiekoosqgcyoa($ywmkwiwkosakssii = []) : array { $giqggecqqikcysgq = 999999; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw([Constants::kkwcgeymmoomceyo => str_replace($giqggecqqikcysgq, '%#%', $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ycgmicmqesqeymuw($giqggecqqikcysgq, false)), Constants::yqemseykugmsyeqa => '?paged=%#%'], $ywmkwiwkosakssii); return $this->wsoecgmgaaaiiogu($ywmkwiwkosakssii); } public function owmeqcskcqmosugo($ywmkwiwkosakssii = []) : array { return $this->wsoecgmgaaaiiogu($ywmkwiwkosakssii); } public function wsoecgmgaaaiiogu($ywmkwiwkosakssii = []) : array { $ggauoeuaesiymgee = [Constants::squoamkioomemiyi => Constants::ugmwekegkosuuwii, 'add_fragment' => '', 'after_page_number' => '', 'before_page_number' => '']; $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); $qawecuimqqcqwgsw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm(); $cwwowqyuwccuykom = ['show_all' => false, 'add_args' => false, 'end_size' => 1, 'mid_size' => 1, 'prev_next' => !$qawecuimqqcqwgsw, 'prev_text' => "&laquo;", 'next_text' => "&raquo;"]; return $cwaqscoiqkokyase->ckscqqquyskscaaw($cwwowqyuwccuykom, $ywmkwiwkosakssii); } }
