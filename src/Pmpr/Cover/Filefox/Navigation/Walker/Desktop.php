<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6457947d922eb             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; class Desktop extends Walker { protected $rowOpened = false; public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { parent::start_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); if (!($gquaqgsmiuqsaoum === 1 && $this->preElement && !$this->rowOpened)) { goto sqiciiuwmykocycc; } $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x64\151\166", ["\143\154\141\x73\x73" => "\155\145\x67\141\155\145\x6e\x75\x2d\x69\x74\x65\155\x73\x20\144\55\146\154\x65\x78\40\146\154\x65\170\x2d\143\157\x6c\165\155\156\40\146\154\145\170\55\x77\x72\x61\x70"]); $this->rowOpened = $this->preElement; sqiciiuwmykocycc: } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (!($gquaqgsmiuqsaoum === 1 && $this->rowOpened)) { goto cggowoquuiwqkyew; } $aqykuigiuwmmcieu .= "\x3c\x2f\144\x69\166\x3e"; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ucicuwcaawugkseg = $this->ouqouwemcymaqoqc($this->rowOpened); if (!$ucicuwcaawugkseg) { goto uukumskkeggaowck; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($ucicuwcaawugkseg, self::mmieaueggwwaokig); if ($meqocwsecsywiiqs) { goto eequksumcoogyoem; } $meqocwsecsywiiqs = $this->syiamqaugssemesg($this->rowOpened, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); eequksumcoogyoem: $meqocwsecsywiiqs = sprintf(__("\x53\145\145\40\x61\x6c\154\x20\45\x73", PR__CVR__FILEFOX), $meqocwsecsywiiqs); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->womgoiuoesugioqa($this->rowOpened), ["\x63\x6c\141\163\163" => "\142\x74\156\40\142\x74\156\x2d\x70\162\x69\155\141\162\x79\x20\x6d\164\55\63"])); uukumskkeggaowck: $this->rowOpened = false; cggowoquuiwqkyew: parent::end_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $iykuucyqscmsqccc = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto ocokwuuquaokmasc; } $iykuucyqscmsqccc = parent::usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); ocokwuuquaokmasc: return $iykuucyqscmsqccc; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto yiwiqaqmwiogawym; } $muiegiugiocacqkm = parent::usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); yiwiqaqmwiogawym: return $muiegiugiocacqkm; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $iykuucyqscmsqccc = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto goacqqsgaaigyuaw; } $iykuucyqscmsqccc = parent::kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); goacqqsgaaigyuaw: return $iykuucyqscmsqccc; } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto meawswgwagoqgkye; } $muiegiugiocacqkm = parent::mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); meawswgwagoqgkye: return $muiegiugiocacqkm; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { goto kecwuwwcwokuksyq; } if ($igqsaukqcqscimok->menu_item_parent) { goto mswsoaimesegiiic; } $cmkqisoeyioisqaw[] = "\156\141\166\55\151\164\x65\x6d"; goto egasokooagakisiy; mswsoaimesegiiic: $cmkqisoeyioisqaw[] = "\160\55\60"; egasokooagakisiy: goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: if ($igqsaukqcqscimok->menu_item_parent) { goto wcesymwqykqoyuqk; } $cmkqisoeyioisqaw[] = "\x6e\x61\166\55\151\164\145\155"; $cmkqisoeyioisqaw[] = "\144\162\x6f\x70\x64\x6f\167\x6e"; goto usqgaogkqgemuima; wcesymwqykqoyuqk: $cmkqisoeyioisqaw[] = "\x68\x61\x73\x2d\155\145\x67\x61\x73\165\x62\x6d\145\156\165"; $cmkqisoeyioisqaw[] = "\x70\x2d\x30"; usqgaogkqgemuima: qgegkeomwscwwiuw: if (!$cmkqisoeyioisqaw) { goto qmiwsequckckoaei; } $igqsaukqcqscimok->classes = $cmkqisoeyioisqaw; qmiwsequckckoaei: return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { if ($kywcekcsigagsimc == 0) { goto eiawsoasmscmqswa; } if (!($kywcekcsigagsimc == 1)) { goto goeoymmqqqeeoime; } $siquossayskcwkea["\x63\x6c\x61\x73\x73"] = "\x6d\145\147\x61\163\x75\142\155\x65\156\165\40\144\x72\157\x70\x64\157\167\156\55\x6d\x65\x6e\165\x20\x70\171\x2d\x33\x20\x70\170\55\x34\40\x6d\55\60\40\142\x6f\162\x64\145\162\55\60\40\x62\157\162\x64\x65\x72\x2d\x74\157\160"; goeoymmqqqeeoime: goto ickcmqoiosquugwe; eiawsoasmscmqswa: $siquossayskcwkea["\x63\x6c\x61\163\163"] = "\155\x65\x67\x61\155\145\x6e\165\40\144\162\x6f\x70\x64\157\x77\x6e\55\155\x65\x6e\165\40\x70\x2d\x30\40\142\x6f\162\144\x65\162\x2d\60\40\142\x6f\x72\144\145\162\x2d\164\157\x70"; ickcmqoiosquugwe: return parent::oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii); } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { if (!$igqsaukqcqscimok->menu_item_parent) { goto igymseewwyiocoug; } if ($gquaqgsmiuqsaoum > 1) { goto cgewcsueoyaeikgm; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\x6c\x61\x73\163", "\x64\x2d\x66\x6c\145\170\x20\x70\55\63\x20\x74\145\170\164\55\156\157\x77\x72\141\x70"); goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: if ($kkisyguyosoyymqs) { goto ygkcacsyyckescqs; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\154\x61\163\163", "\x64\x2d\142\x6c\x6f\143\x6b\40\x6d\x62\x2d\x32\x20\164\x65\x78\x74\x2d\x67\162\141\x79\55\66\60\x30"); goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\x6c\x61\163\163", "\144\x2d\142\154\157\x63\153\x20\x6d\x62\55\62\40\164\145\170\164\55\147\x72\141\x79\x2d\70\60\x30\40\146\167\55\x62\157\154\x64\40\146\163\x2d\66"); cuoqqgaygogsmmic: sukskmcwsoysiuqu: goto mqccmesakuemceqi; igymseewwyiocoug: $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\154\x61\163\163", "\x6e\x61\x76\x2d\154\151\x6e\x6b\40\x64\x2d\146\154\145\x78"); if (!$kkisyguyosoyymqs) { goto qmeoaqmsuseueqiy; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\144\x61\x74\141\55\142\x73\55\164\x6f\147\147\x6c\145", "\x64\162\157\x70\144\x6f\167\x6e"); $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x61\x72\x69\141\x2d\x65\x78\x70\141\156\x64\145\x64", "\146\x61\154\x73\145"); qmeoaqmsuseueqiy: mqccmesakuemceqi: return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if (!(!$igqsaukqcqscimok->menu_item_parent && $kkisyguyosoyymqs)) { goto eyiamcekkgkiawqy; } $egkyssmuqcwaciya .= "\146\167\x2d\x62\x6f\x6c\x64"; eyiamcekkgkiawqy: return $egkyssmuqcwaciya; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $cmkqisoeyioisqaw = "\155\x65\55\62\x20\x6d\x79\x2d\x61\165\x74\x6f\40"; if (!($gquaqgsmiuqsaoum == 0 && $kkisyguyosoyymqs)) { goto twkmiuomimomscew; } $cmkqisoeyioisqaw .= "\x20\151\143\x6f\x6e\x2d\155\144"; twkmiuomimomscew: $siquossayskcwkea["\x63\154\141\x73\x73"] = $cmkqisoeyioisqaw; return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } }
