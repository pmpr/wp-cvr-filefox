<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645194b14c2a5             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; class Desktop extends Walker { protected $rowOpened = false; public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { parent::start_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); if (!($gquaqgsmiuqsaoum === 1 && $this->preElement && !$this->rowOpened)) { goto sqiciiuwmykocycc; } $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\144\151\166", ["\x63\154\x61\x73\x73" => "\155\x65\x67\141\x6d\x65\156\165\x2d\x69\164\145\155\163\40\144\55\146\154\145\x78\x20\146\154\x65\x78\55\143\x6f\x6c\x75\x6d\x6e\x20\x66\x6c\x65\x78\55\167\162\x61\160"]); $this->rowOpened = $this->preElement; sqiciiuwmykocycc: } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if (!($gquaqgsmiuqsaoum === 1 && $this->rowOpened)) { goto cggowoquuiwqkyew; } $aqykuigiuwmmcieu .= "\74\57\x64\151\166\76"; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ucicuwcaawugkseg = $this->ouqouwemcymaqoqc($this->rowOpened); if (!$ucicuwcaawugkseg) { goto uukumskkeggaowck; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($ucicuwcaawugkseg, self::mmieaueggwwaokig); if ($meqocwsecsywiiqs) { goto eequksumcoogyoem; } $meqocwsecsywiiqs = $this->syiamqaugssemesg($this->rowOpened, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); eequksumcoogyoem: $meqocwsecsywiiqs = sprintf(__("\123\145\145\40\x61\154\x6c\x20\x25\163", PR__CVR__FILEFOX), $meqocwsecsywiiqs); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->womgoiuoesugioqa($this->rowOpened), ["\143\154\x61\163\163" => "\142\x74\156\x20\142\x74\156\55\x70\x72\x69\155\x61\x72\x79\x20\155\x74\55\x33"])); uukumskkeggaowck: $this->rowOpened = false; cggowoquuiwqkyew: parent::end_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $iykuucyqscmsqccc = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto ocokwuuquaokmasc; } $iykuucyqscmsqccc = parent::usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); ocokwuuquaokmasc: return $iykuucyqscmsqccc; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto yiwiqaqmwiogawym; } $muiegiugiocacqkm = parent::usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); yiwiqaqmwiogawym: return $muiegiugiocacqkm; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $iykuucyqscmsqccc = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto goacqqsgaaigyuaw; } $iykuucyqscmsqccc = parent::kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); goacqqsgaaigyuaw: return $iykuucyqscmsqccc; } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if (!($gquaqgsmiuqsaoum < 2)) { goto meawswgwagoqgkye; } $muiegiugiocacqkm = parent::mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); meawswgwagoqgkye: return $muiegiugiocacqkm; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { goto kecwuwwcwokuksyq; } if ($igqsaukqcqscimok->menu_item_parent) { goto mswsoaimesegiiic; } $cmkqisoeyioisqaw[] = "\x6e\141\166\x2d\151\164\145\x6d"; goto egasokooagakisiy; mswsoaimesegiiic: $cmkqisoeyioisqaw[] = "\160\x2d\60"; egasokooagakisiy: goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: if ($igqsaukqcqscimok->menu_item_parent) { goto wcesymwqykqoyuqk; } $cmkqisoeyioisqaw[] = "\x6e\x61\x76\55\x69\164\145\x6d"; $cmkqisoeyioisqaw[] = "\144\162\157\160\x64\x6f\x77\x6e"; goto usqgaogkqgemuima; wcesymwqykqoyuqk: $cmkqisoeyioisqaw[] = "\150\x61\163\55\x6d\145\147\141\x73\165\x62\x6d\145\156\165"; $cmkqisoeyioisqaw[] = "\160\x2d\60"; usqgaogkqgemuima: qgegkeomwscwwiuw: if (!$cmkqisoeyioisqaw) { goto qmiwsequckckoaei; } $igqsaukqcqscimok->classes = $cmkqisoeyioisqaw; qmiwsequckckoaei: return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { if ($kywcekcsigagsimc == 0) { goto eiawsoasmscmqswa; } if (!($kywcekcsigagsimc == 1)) { goto goeoymmqqqeeoime; } $siquossayskcwkea["\x63\x6c\x61\163\163"] = "\x6d\x65\x67\x61\163\x75\142\155\145\x6e\165\x20\x64\x72\157\x70\144\157\x77\156\x2d\x6d\x65\x6e\165\40\x70\171\55\63\40\x70\x78\55\x34\40\155\x2d\60\40\142\x6f\x72\144\145\x72\x2d\163\x74\141\162\164\x2d\60"; goeoymmqqqeeoime: goto ickcmqoiosquugwe; eiawsoasmscmqswa: $siquossayskcwkea["\143\x6c\x61\x73\x73"] = "\x6d\x65\147\141\x6d\145\156\x75\40\x64\x72\x6f\x70\144\x6f\x77\156\55\x6d\x65\x6e\x75\40\160\x2d\x30"; ickcmqoiosquugwe: return parent::oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii); } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { if (!$igqsaukqcqscimok->menu_item_parent) { goto igymseewwyiocoug; } if ($gquaqgsmiuqsaoum > 1) { goto cgewcsueoyaeikgm; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x63\x6c\141\163\x73", "\x64\55\x62\154\x6f\x63\x6b\40\x70\55\x33"); goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: if ($kkisyguyosoyymqs) { goto ygkcacsyyckescqs; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\154\141\x73\x73", "\144\x2d\x62\x6c\x6f\143\153\x20\155\x62\55\x32\40\x74\x65\x78\x74\x2d\x67\162\141\171\55\66\60\x30"); goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\x6c\141\163\x73", "\144\55\x62\154\x6f\x63\x6b\40\x6d\142\55\x32\40\x74\x65\x78\164\55\x67\x72\x61\171\55\70\x30\60\40\x66\x77\55\x62\x6f\154\144\40\146\x73\x2d\x36"); cuoqqgaygogsmmic: sukskmcwsoysiuqu: goto mqccmesakuemceqi; igymseewwyiocoug: $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\143\154\x61\x73\163", "\156\x61\x76\x2d\154\x69\156\x6b"); if (!$kkisyguyosoyymqs) { goto qmeoaqmsuseueqiy; } $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\x64\x61\x74\x61\x2d\142\x73\x2d\x74\157\147\147\154\x65", "\144\x72\x6f\160\144\157\x77\x6e"); $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, "\141\x72\151\141\x2d\x65\170\160\141\x6e\144\145\144", "\146\x61\154\x73\145"); qmeoaqmsuseueqiy: mqccmesakuemceqi: return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if (!(!$igqsaukqcqscimok->menu_item_parent && $kkisyguyosoyymqs)) { goto eyiamcekkgkiawqy; } $egkyssmuqcwaciya .= "\146\167\x2d\142\157\x6c\144"; eyiamcekkgkiawqy: return $egkyssmuqcwaciya; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $cmkqisoeyioisqaw = "\x6d\145\55\x32\x20\155\x79\x2d\141\165\164\x6f\40"; if (!($gquaqgsmiuqsaoum == 0)) { goto twkmiuomimomscew; } $cmkqisoeyioisqaw .= "\x20\151\x63\157\x6e\x2d\x6d\x64"; twkmiuomimomscew: $siquossayskcwkea["\x63\x6c\141\x73\163"] = $cmkqisoeyioisqaw; return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } }
