<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3f8405c2c             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; class Desktop extends Walker { protected $rowOpened = false; public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { parent::start_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); if (!($gquaqgsmiuqsaoum === 1 && $this->preElement && !$this->rowOpened)) { goto cecuyayqoioasumi; } $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x64\151\x76", ["\143\x6c\141\163\163" => "\x6d\145\x67\141\x6d\145\156\x75\55\151\x74\145\155\x73\x20\144\55\146\x6c\x65\170\40\146\154\145\170\x2d\143\x6f\154\x75\155\156\40\x66\154\x65\x78\x2d\167\x72\141\160"]); $this->rowOpened = $this->preElement; cecuyayqoioasumi: } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (!($gquaqgsmiuqsaoum === 1 && $this->rowOpened)) { goto qgoiooayqmqqsiok; } $aqykuigiuwmmcieu .= "\x3c\57\x64\x69\166\x3e"; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ucicuwcaawugkseg = $this->ouqouwemcymaqoqc($this->rowOpened); if (!$ucicuwcaawugkseg) { goto qogqewiwmwiwskgm; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($ucicuwcaawugkseg, self::mmieaueggwwaokig); if ($meqocwsecsywiiqs) { goto qiaqsassksqiuyae; } $meqocwsecsywiiqs = $this->syiamqaugssemesg($this->rowOpened, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); qiaqsassksqiuyae: $meqocwsecsywiiqs = sprintf(__("\x53\x65\145\40\x61\154\x6c\x20\x25\163", PR__CVR__FILEFOX), $meqocwsecsywiiqs); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->womgoiuoesugioqa($this->rowOpened), ["\143\x6c\x61\163\x73" => "\142\164\x6e\40\142\x74\x6e\x2d\160\x72\151\x6d\x61\162\x79\x20\155\x74\55\63"])); qogqewiwmwiwskgm: $this->rowOpened = false; qgoiooayqmqqsiok: parent::end_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $iykuucyqscmsqccc = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto qwigomakwmyiwkgo; } $iykuucyqscmsqccc = parent::usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); qwigomakwmyiwkgo: return $iykuucyqscmsqccc; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto myoicgcuugciueis; } $muiegiugiocacqkm = parent::usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); myoicgcuugciueis: return $muiegiugiocacqkm; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $iykuucyqscmsqccc = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto asmecuqiyyswueqe; } $iykuucyqscmsqccc = parent::kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); asmecuqiyyswueqe: return $iykuucyqscmsqccc; } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto csscmcacoikwsecs; } $muiegiugiocacqkm = parent::mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); csscmcacoikwsecs: return $muiegiugiocacqkm; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { goto eqkauqciwewmgeoi; } if ($igqsaukqcqscimok->menu_item_parent) { goto mkwskuycuyguqqok; } $cmkqisoeyioisqaw[] = "\x6e\x61\166\x2d\x69\x74\x65\155"; goto sciwggaeogcoesiu; mkwskuycuyguqqok: $cmkqisoeyioisqaw[] = "\x70\x2d\x30"; sciwggaeogcoesiu: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: if ($igqsaukqcqscimok->menu_item_parent) { goto cuykwgmswkskqkyi; } $cmkqisoeyioisqaw[] = "\156\x61\166\x2d\x69\164\x65\x6d"; $cmkqisoeyioisqaw[] = "\144\162\x6f\160\144\157\x77\x6e"; goto kuicqywysciceggs; cuykwgmswkskqkyi: $cmkqisoeyioisqaw[] = "\x68\141\163\55\155\145\147\141\x73\x75\x62\155\145\156\165"; kuicqywysciceggs: kwagwqyusyiyoaqs: if (!$cmkqisoeyioisqaw) { goto yowsmsiyimmimemc; } $igqsaukqcqscimok->classes = $cmkqisoeyioisqaw; yowsmsiyimmimemc: return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { if ($kywcekcsigagsimc == 0) { goto iomcaiwewsawiamu; } if (!($kywcekcsigagsimc == 1)) { goto kiqogmwcgcamwiig; } $siquossayskcwkea["\143\x6c\141\x73\x73"] = "\x6d\x65\x67\141\163\x75\x62\x6d\x65\x6e\165\x20\x64\x72\157\160\x64\x6f\167\x6e\55\155\x65\156\165\40\160\171\55\63\40\x70\x78\x2d\x34\x20\x6d\55\x30\x20\x62\157\x72\144\x65\162\55\x30\40\142\x6f\x72\144\x65\x72\x2d\164\x6f\x70"; kiqogmwcgcamwiig: goto sqiciiuwmykocycc; iomcaiwewsawiamu: $siquossayskcwkea["\143\154\x61\163\163"] = "\x6d\145\147\x61\x6d\145\x6e\165\x20\144\162\x6f\x70\x64\157\167\156\55\x6d\145\x6e\165\x20\x70\x2d\60\x20\x62\x6f\x72\144\145\x72\x2d\60\40\x62\x6f\162\144\145\162\55\164\157\160"; sqiciiuwmykocycc: return parent::oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii); } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { if (!$igqsaukqcqscimok->menu_item_parent) { goto goacqqsgaaigyuaw; } if ($gquaqgsmiuqsaoum > 1) { goto ocokwuuquaokmasc; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\154\x61\163\163", "\x64\x2d\146\154\x65\170\x20\164\x65\x78\x74\55\156\157\x77\162\x61\160"); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: if ($kkisyguyosoyymqs) { goto uukumskkeggaowck; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\x6c\x61\x73\163", "\144\55\142\154\157\143\x6b\x20\155\x62\x2d\62\x20\x74\145\x78\x74\55\x67\162\141\171\55\x36\60\60"); goto cggowoquuiwqkyew; uukumskkeggaowck: $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\x6c\141\163\163", "\144\x2d\142\154\x6f\x63\153\40\155\x62\x2d\62\x20\164\145\x78\x74\55\x67\x72\x61\171\x2d\x38\x30\x30\40\146\x77\55\x62\157\x6c\x64\40\x66\163\x2d\66"); cggowoquuiwqkyew: yiwiqaqmwiogawym: goto meawswgwagoqgkye; goacqqsgaaigyuaw: $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\x6c\141\163\x73", "\156\141\x76\x2d\x6c\151\x6e\153\x20\144\x2d\x66\154\145\170"); if (!$kkisyguyosoyymqs) { goto eequksumcoogyoem; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\144\x61\164\x61\55\x62\x73\55\164\x6f\x67\x67\154\145", "\144\x72\x6f\160\x64\x6f\x77\x6e"); $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x61\162\x69\x61\55\x65\x78\160\141\x6e\144\145\144", "\146\x61\x6c\x73\x65"); eequksumcoogyoem: meawswgwagoqgkye: return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if (!(!$igqsaukqcqscimok->menu_item_parent && $kkisyguyosoyymqs)) { goto wcesymwqykqoyuqk; } $egkyssmuqcwaciya .= "\146\167\x2d\142\x6f\x6c\144"; wcesymwqykqoyuqk: return $egkyssmuqcwaciya; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $cmkqisoeyioisqaw = "\x6d\145\x2d\62\40\x6d\x79\x2d\141\165\x74\x6f\40"; if (!($gquaqgsmiuqsaoum == 0 && $kkisyguyosoyymqs)) { goto usqgaogkqgemuima; } $cmkqisoeyioisqaw .= "\x20\x69\143\x6f\x6e\x2d\x6d\x64"; usqgaogkqgemuima: $siquossayskcwkea["\x63\x6c\x61\163\x73"] = $cmkqisoeyioisqaw; return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } }
