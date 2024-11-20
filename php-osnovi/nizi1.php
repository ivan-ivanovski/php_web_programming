<?php
    #cenovnik
    $pricingPackets=[
        "basic"=>"Web Design, review of design, up to 1 revision - $300",
        "standard"=>"Web Design and Development - Wordpress $400 / WebFlow $600",
        "pro"=>"E-commerce website development - Wordpress and Woocommerce $1000",
        "business"=>"Custom cms system + all from pro pricing plan starting $5000 "
    ];

    #echo "Primer za asocijativna niza \n";
    echo "Pricing packets:\n";
    foreach ($pricingPackets as $packet=>$service){
        echo "$packet - $service \n";
    }

//    while (list($packet1,$service1)=eaching($pricingPackets)){
//        echo "$packet1 - $service1 \n";
//    }
//    function eaching(&$array){
//        $key =key($array);
//            $res = ($key===null) ? false :
//                [$key, current($array), 'key', 'value' =>current($array)];
//        next($array);
//        return $res;
//    }

