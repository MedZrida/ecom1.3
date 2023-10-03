<?php
function namelength($name) {

    $length =  strlen($name);
    $reponses = ['valid' =>true,'msg'=>'' ];

    if ($length < 2) {
        $reponses = ['valid' =>false,'msg'=>'faux' ];
    }
    if ($length > 10) {
        $reponses = ['valid' =>false,'msg'=>'faux' ];
    }
    
return $reponses;
}
?>