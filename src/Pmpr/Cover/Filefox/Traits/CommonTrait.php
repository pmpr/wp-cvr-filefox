<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647cafc95c295             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Traits; use WC_Product; trait CommonTrait { public function mkcqggisuwuuueqm() : array { return []; } public function ouqouwemcymaqoqc($mwwsoasauceiwsmk) { $ucicuwcaawugkseg = 0; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!("\x6d\141\164\145\162\x69\141\x6c" === $gkyciwoiiisgywcs->get($mwwsoasauceiwsmk, self::ckmqoekmugkggeym))) { goto yiwiqaqmwiogawym; } $ucicuwcaawugkseg = $gkyciwoiiisgywcs->get($mwwsoasauceiwsmk, self::ckmqoekmugkggeym . self::mswocgcucqoaesaa); yiwiqaqmwiogawym: return $ucicuwcaawugkseg; } public function eqiugioqaemamocc($post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($post instanceof WC_Product) { goto goacqqsgaaigyuaw; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $gcqseksiskwueksc = $post->get_id(); meawswgwagoqgkye: $seyqqsmuaiegkeeq = []; $ykwocskgogekuiog = false; switch ($seumokooiykcomco->gueasuouwqysmomu($gcqseksiskwueksc)) { case self::oguseymmyyoyaako: $seyqqsmuaiegkeeq = ["\155\141\164\145\162\x69\141\x6c" => "\45\x73", "\x61\x70\160\154\x69\x63\141\x74\x69\157\156" => __("\x66\x6f\x72\40\45\163\x20", PR__CVR__FILEFOX), self::cmckeoksigiaqykc => __("\40\151\x6e\40\x25\163\40\143\x61\164\145\147\x6f\162\x79", PR__CVR__FILEFOX)]; $ykwocskgogekuiog = true; goto wcesymwqykqoyuqk; case self::mswoacegomcucaik: $seyqqsmuaiegkeeq = [self::qgciomgukmcwscqw => __("\151\x6e\40\x25\163\x20\143\x61\164\145\147\157\x72\x79", PR__CVR__FILEFOX)]; goto wcesymwqykqoyuqk; } usqgaogkqgemuima: wcesymwqykqoyuqk: $nsmgceoqaqogqmuw = ''; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $wamcomkuwysqgwgk) { if (!($iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($gcqseksiskwueksc, $kesssewsiegssiya, [self::yewiqemgmmucemey => $ykwocskgogekuiog]))) { goto qmiwsequckckoaei; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); switch ($kesssewsiegssiya) { case "\155\x61\x74\145\x72\x69\x61\x6c": case self::qgciomgukmcwscqw: $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\x63\154\141\163\x73" => "\x66\167\55\x62\x6f\154\144\x65\x72\40\164\145\x78\164\55\x73\x65\143\x6f\156\144\141\x72\x79"]); goto kecwuwwcwokuksyq; default: $iwywmkygwewiamwm = $swqimwqeweekeusq->ciuuiyckmsygceis($meqocwsecsywiiqs); goto kecwuwwcwokuksyq; } qgegkeomwscwwiuw: kecwuwwcwokuksyq: $nsmgceoqaqogqmuw .= sprintf($wamcomkuwysqgwgk, $iwywmkygwewiamwm); qmiwsequckckoaei: egasokooagakisiy: } mswsoaimesegiiic: if (!$nsmgceoqaqogqmuw) { goto goeoymmqqqeeoime; } echo $swqimwqeweekeusq->iaaacsuskiakkwui($nsmgceoqaqogqmuw, ["\x63\x6c\x61\x73\163" => "\x6d\x62\x2d\63\40\x74\x65\170\x74\55\x6d\x75\x74\145\144"]); goeoymmqqqeeoime: } }
