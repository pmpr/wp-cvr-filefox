<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bcab602aee             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; use Pmpr\Common\Foundation\Interfaces\Constants; class Desktop extends Walker { protected $rowOpened = false; public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { parent::start_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); if ($gquaqgsmiuqsaoum === 1 && $this->preElement && !$this->rowOpened) { $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x64\151\x76", ["\143\154\x61\163\163" => "\x6d\x65\147\141\x6d\x65\x6e\165\55\x69\164\x65\x6d\x73\x20\144\x2d\146\154\145\170\40\146\x6c\x65\170\x2d\143\157\154\165\x6d\x6e\40\146\x6c\145\x78\55\167\x72\x61\160"]); $this->rowOpened = $this->preElement; } } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if ($gquaqgsmiuqsaoum === 1 && $this->rowOpened) { $aqykuigiuwmmcieu .= "\x3c\57\x64\151\x76\x3e"; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ucicuwcaawugkseg = $this->ouqouwemcymaqoqc($this->rowOpened); if ($ucicuwcaawugkseg) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($ucicuwcaawugkseg, Constants::mmieaueggwwaokig); if (!$meqocwsecsywiiqs) { $meqocwsecsywiiqs = $this->syiamqaugssemesg($this->rowOpened, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } $meqocwsecsywiiqs = sprintf(__("\x53\145\145\x20\x61\x6c\154\40\45\163", PR__CVR__FILEFOX), $meqocwsecsywiiqs); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->womgoiuoesugioqa($this->rowOpened), ["\143\x6c\x61\163\x73" => "\142\x74\x6e\x20\x62\164\x6e\x2d\160\x72\151\155\x61\x72\x79\x20\x6d\164\55\x33"])); } $this->rowOpened = false; } parent::end_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $iykuucyqscmsqccc = ''; if ($gquaqgsmiuqsaoum < 2) { $iykuucyqscmsqccc = parent::usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $iykuucyqscmsqccc; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if ($gquaqgsmiuqsaoum < 2) { $muiegiugiocacqkm = parent::usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $muiegiugiocacqkm; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $iykuucyqscmsqccc = ''; if ($gquaqgsmiuqsaoum < 2) { $iykuucyqscmsqccc = parent::kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $iykuucyqscmsqccc; } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if ($gquaqgsmiuqsaoum < 2) { $muiegiugiocacqkm = parent::mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $muiegiugiocacqkm; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { if ($igqsaukqcqscimok->menu_item_parent) { $cmkqisoeyioisqaw[] = "\x68\141\x73\55\x6d\x65\147\141\x73\165\x62\x6d\145\x6e\x75"; } else { $cmkqisoeyioisqaw[] = "\x6e\x61\166\x2d\x69\x74\145\x6d"; $cmkqisoeyioisqaw[] = "\x64\x72\157\x70\x64\157\167\156"; } } else { if ($igqsaukqcqscimok->menu_item_parent) { $cmkqisoeyioisqaw[] = "\x70\55\x30"; } else { $cmkqisoeyioisqaw[] = "\x6e\141\166\55\x69\x74\x65\155"; } } if ($cmkqisoeyioisqaw) { $igqsaukqcqscimok->classes = $cmkqisoeyioisqaw; } return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { if ($kywcekcsigagsimc == 0) { $siquossayskcwkea["\143\154\x61\163\x73"] = "\x6d\x65\x67\x61\155\x65\x6e\165\40\144\162\x6f\x70\144\x6f\167\x6e\55\x6d\x65\156\x75\40\x70\55\60\40\142\157\162\144\145\162\55\x30\40\x62\x6f\162\x64\x65\162\55\x74\157\x70"; } else { if ($kywcekcsigagsimc == 1) { $siquossayskcwkea["\x63\154\x61\x73\163"] = "\155\145\x67\141\x73\165\142\155\145\x6e\165\40\144\162\157\x70\144\x6f\x77\156\55\155\x65\156\x75\x20\x70\171\55\x33\x20\160\170\55\64\40\x6d\55\60\x20\142\x6f\x72\x64\x65\162\x2d\60\40\142\157\x72\x64\145\162\x2d\164\x6f\160"; } } return parent::oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii); } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { if (!$igqsaukqcqscimok->menu_item_parent) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\154\141\x73\x73", "\x6e\141\x76\x2d\154\x69\x6e\x6b\40\144\55\x66\x6c\145\170"); if ($kkisyguyosoyymqs) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x64\x61\x74\x61\x2d\142\163\55\x74\x6f\147\147\154\x65", "\x64\x72\157\160\x64\x6f\167\156"); $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\141\162\151\x61\x2d\x65\x78\160\x61\x6e\144\145\x64", "\146\x61\154\163\x65"); } } else { if ($gquaqgsmiuqsaoum > 1) { if ($kkisyguyosoyymqs) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\x6c\x61\163\163", "\144\55\142\x6c\x6f\x63\153\40\x6d\142\55\x32\40\164\x65\x78\x74\55\147\162\x61\171\55\70\x30\x30\40\146\167\x2d\142\157\154\144\x20\x66\163\x2d\66"); } else { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\154\141\x73\163", "\x64\x2d\x62\x6c\x6f\x63\x6b\40\155\142\x2d\62\40\x74\145\170\164\55\x67\x72\141\171\55\66\x30\60"); } } else { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\154\x61\163\x73", "\144\x2d\x66\154\145\x78\40\x74\145\170\x74\x2d\156\157\167\x72\141\x70"); } } return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if (!$igqsaukqcqscimok->menu_item_parent && $kkisyguyosoyymqs) { $egkyssmuqcwaciya .= "\146\x77\x2d\142\157\154\x64"; } return $egkyssmuqcwaciya; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $cmkqisoeyioisqaw = "\155\145\x2d\62\40\155\171\55\x61\x75\x74\157\x20"; if ($gquaqgsmiuqsaoum == 0 && $kkisyguyosoyymqs) { $cmkqisoeyioisqaw .= "\40\151\143\x6f\x6e\x2d\x6d\144"; } $siquossayskcwkea["\143\154\141\x73\163"] = $cmkqisoeyioisqaw; return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } }
