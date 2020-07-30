<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];

if ($countrycode=='DE')
    header( 'Location: https://dvmeq.dateszone.net/c/da57dc555e50572d?s1=19712&s2=1127166&j1=1&j3=1' ) ;
else if ($countrycode=='GB')
    header( 'Location: https://t.frtyl.com/ovdc57k29s?url_id=0&aff_id=7838&offer_id=3917' ) ;
else if ($countrycode=='CA')
    header( 'Location: https://t.frtyl.com/a9pen5sqps?url_id=0&aff_id=7838&offer_id=3917' ) ;
else if ($countrycode=='FR')
    header( 'Location: https://t.frtyl.com/8v8aq5c1og?url_id=0&aff_id=7838&offer_id=6824' ) ;
else if ($countrycode=='AU')
    header( 'Location: https://t.frtyl.com/sm8jot920w?url_id=0&aff_id=7838&offer_id=3917' ) ;
else if ($countrycode=='BE')
    header( 'Location: https://t.frtyl.com/8v8aq5c1og?url_id=0&aff_id=7838&offer_id=6824' ) ;
else if ($contrycode=='RO')
    header( 'Location: https://t.frtyl.com/riofzkyx4w?url_id=19184&aff_id=7838&offer_id=6692' ) ; 
else if ($countrycode=='US')
    header( 'Location: https://t.frtyl.com/clw6v4qyww?url_id=0&aff_id=7838&offer_id=3917' ) ; 
else
    header( 'Location: https://dvmeq.dateszone.net/c/da57dc555e50572d?s1=19712&s2=1127166&j1=1&j3=1' ) ;
?>
