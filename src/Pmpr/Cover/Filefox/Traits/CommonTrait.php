<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646e28b10602f             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Traits; use WC_Product; trait CommonTrait { public function mkcqggisuwuuueqm() : array { return []; } public function ouqouwemcymaqoqc($mwwsoasauceiwsmk) { $ucicuwcaawugkseg = 0; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!("\x6d\141\164\145\x72\151\x61\x6c" === $gkyciwoiiisgywcs->get($mwwsoasauceiwsmk, self::ckmqoekmugkggeym))) { goto cggowoquuiwqkyew; } $ucicuwcaawugkseg = $gkyciwoiiisgywcs->get($mwwsoasauceiwsmk, self::ckmqoekmugkggeym . self::mswocgcucqoaesaa); cggowoquuiwqkyew: return $ucicuwcaawugkseg; } public function eqiugioqaemamocc($post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($post instanceof WC_Product) { goto ocokwuuquaokmasc; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $gcqseksiskwueksc = $post->get_id(); yiwiqaqmwiogawym: $seyqqsmuaiegkeeq = []; $ykwocskgogekuiog = false; switch ($seumokooiykcomco->gueasuouwqysmomu($gcqseksiskwueksc)) { case self::oguseymmyyoyaako: $seyqqsmuaiegkeeq = ["\155\141\x74\x65\x72\151\141\x6c" => "\45\163", "\x61\160\160\x6c\x69\x63\141\164\151\x6f\156" => __("\146\157\162\40\x25\x73\40", PR__CVR__FILEFOX), self::cmckeoksigiaqykc => __("\40\x69\156\x20\45\x73\x20\x63\141\x74\145\x67\x6f\162\171", PR__CVR__FILEFOX)]; $ykwocskgogekuiog = true; goto goacqqsgaaigyuaw; case self::mswoacegomcucaik: $seyqqsmuaiegkeeq = [self::qgciomgukmcwscqw => __("\x69\156\40\45\163\x20\143\x61\x74\145\x67\157\162\x79", PR__CVR__FILEFOX)]; goto goacqqsgaaigyuaw; } meawswgwagoqgkye: goacqqsgaaigyuaw: $nsmgceoqaqogqmuw = ''; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $wamcomkuwysqgwgk) { if (!($iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($gcqseksiskwueksc, $kesssewsiegssiya, [self::yewiqemgmmucemey => $ykwocskgogekuiog]))) { goto kecwuwwcwokuksyq; } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); switch ($kesssewsiegssiya) { case "\x6d\x61\x74\x65\x72\151\x61\x6c": case self::qgciomgukmcwscqw: $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\x63\154\x61\x73\x73" => "\146\167\55\142\x6f\x6c\144\145\x72\x20\x74\x65\x78\x74\x2d\163\145\143\157\x6e\144\x61\162\171"]); goto mswsoaimesegiiic; default: $iwywmkygwewiamwm = $swqimwqeweekeusq->ciuuiyckmsygceis($meqocwsecsywiiqs); goto mswsoaimesegiiic; } egasokooagakisiy: mswsoaimesegiiic: $nsmgceoqaqogqmuw .= sprintf($wamcomkuwysqgwgk, $iwywmkygwewiamwm); kecwuwwcwokuksyq: usqgaogkqgemuima: } wcesymwqykqoyuqk: if (!$nsmgceoqaqogqmuw) { goto qgegkeomwscwwiuw; } echo $swqimwqeweekeusq->iaaacsuskiakkwui($nsmgceoqaqogqmuw, ["\143\154\141\163\x73" => "\155\142\55\63\40\x74\x65\x78\x74\55\x6d\x75\164\145\144"]); qgegkeomwscwwiuw: } }
