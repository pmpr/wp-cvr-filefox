<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecad9be7e1             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Comment extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('render_comments', [$this, 'render']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('comment_form_fields', [$this, 'yceyooiweyiqgsam'], 99)->cecaguuoecmccuse('comment_form_fields', [$this, 'wccaswoeyuigssus'], 999)->cecaguuoecmccuse('comment_reply_link', [$this, 'qqsuqkomssgcoqka'], 999)->cecaguuoecmccuse('cancel_comment_reply_link', [$this, 'qqsuqkomssgcoqka'], 999); $this->aqaqisyssqeomwom('can_add_rating', '__return_false', 99)->aqaqisyssqeomwom('comment_form_html', [$this, 'wqmqwcqqkcuewecw'], 99)->aqaqisyssqeomwom('comment_form_args', [$this, 'iywqeugamcceukaa'], 99)->aqaqisyssqeomwom('comment_avatar_size', [$this, 'eyosseqakkugagcm'], 99, 2); parent::kgquecmsgcouyaya(); } public function qqsuqkomssgcoqka($iwywmkygwewiamwm) { return $iwywmkygwewiamwm; } public function wccaswoeyuigssus($ikgwqyuyckaewsow) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ikgwqyuyckaewsow, ['url', 'cookies']); return $ikgwqyuyckaewsow; } public function render() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq() && !$this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->ugcgywasgqgaysek() || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $this->ewcsyqaaigkicgse('comment_form_and_list_render', ['is_render' => true, 'has_rating' => false, Constants::kqigmeickowqiiyy => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(), Constants::ayscagukkeoucmoe => false]); } } public function eyosseqakkugagcm($oiegiwogmwmawkeo, $cuyooiakswegosog = true) { return 40; } public function wqmqwcqqkcuewecw($nsmgceoqaqogqmuw) { $siquossayskcwkea = ['textarea' => ['rows' => '5'], '.required-field-message' => ['class' => 'visually-hidden'], 'label:not(.rating-label)' => ['class' => 'visually-hidden'], 'p' => ['class' => 'form-group mt-0 col-12'], 'p:not(.form-submit):not(.comment-form-comment):not(.logged-in-as)' => ['class' => 'col-sm-6 order-1'], 'input:not([type="checkbox"]):not([type="submit"]), textarea' => ['class' => 'form-control p-3'], '.comment-form-comment' => ['class' => 'order-2'], '.form-submit' => ['class' => 'mb-0 order-3'], '.form-submit button' => ['class' => 'ms-auto']]; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $nsmgceoqaqogqmuw = $smuykqsageuocuos->mosawwqeoikikcuo($nsmgceoqaqogqmuw, 'div.recaptcha', ['class' => 'force-to-end']); } return $smuykqsageuocuos->igmaewykumgwoaoy($nsmgceoqaqogqmuw, $siquossayskcwkea); } public function yceyooiweyiqgsam($ikgwqyuyckaewsow) { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (Constants::COMMENT === $ymqmyyeuycgmigyo) { $pkyyagewkiyckmwy = __('Write Comment', PR__CVR__FILEFOX); } else { $pkyyagewkiyckmwy = $smuykqsageuocuos->qqimkcgcmeewwwei($aiowsaccomcoikus, "label[for=\"{$ymqmyyeuycgmigyo}\"]", true); } $siquossayskcwkea = ['p input[type="text"], input[type="email"], p textarea' => ['placeholder' => $pkyyagewkiyckmwy]]; switch ($ymqmyyeuycgmigyo) { case 'comment': $aiowsaccomcoikus = $smuykqsageuocuos->ogaeogwycyqqckeu($aiowsaccomcoikus, ['#comment' => ['cols', 'rows']]); break; case 'cookies': $aiowsaccomcoikus = $smuykqsageuocuos->yqmasmmquoocswuw($aiowsaccomcoikus, 'label', __('Save my name and email.', PR__CVR__FILEFOX), false); $ugugagoguiycqeys = ['input' => ['class' => 'custom-control-input'], 'p' => ['class' => 'custom-control custom-checkbox mb-3'], 'label' => ['class' => 'custom-control-label mb-0']]; break; default: $ugugagoguiycqeys = ['#email' => ['class' => 'direction-ltr-force']]; } if (isset($ugugagoguiycqeys)) { $siquossayskcwkea = array_merge($siquossayskcwkea, $ugugagoguiycqeys); } $aiowsaccomcoikus = $smuykqsageuocuos->igmaewykumgwoaoy($aiowsaccomcoikus, $siquossayskcwkea); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; } return $ikgwqyuyckaewsow; } public function iywqeugamcceukaa($ywmkwiwkosakssii = []) : array { return array_merge($ywmkwiwkosakssii, ['class_form' => 'row g-3 mt-0', 'collapsible' => false, 'title_reply' => __('Leave a Comment', PR__CVR__FILEFOX), 'class_submit' => 'main-action', 'title_reply_before' => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('h3', ['id' => 'reply-title', 'class' => 'comment-reply-title pb-3']), 'label_submit' => __('Send Comment', PR__CVR__FILEFOX), 'title_reply_after' => '</h3>']); } }
