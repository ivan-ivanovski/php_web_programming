<?php
    function presmetajProsek($poeniNiza=array()){
        // prosek na poeni
        $zbirPoeni=array_sum($poeniNiza);
        return $zbirPoeni / count($poeniNiza);
    }

    function filterPoGodini($niza=array(), $godini=0){
        // filtriranje na site studenti postari od dadena vrednost za godini
        $tmp = array();
        foreach($niza as $student){
            $studentVozdrast = $student['godini'];
            if($studentVozdrast >= $godini){
                array_push($tmp, $student);
            }
        }
        return $tmp;
    }

    function golemaBukva(&$niza=array())
    {
        // funkcija koga pretvara mali bukvi vo golemi bukvi. Se odenesuvaa za ime. Ako ime zapocnuva so mala bukva prvata bukva se zamenuva so golema
        foreach ($niza as &$student){
            $student['ime']=ucwords($student['ime']);
        }
    }

    function sortiranjePoIme(&$niza){
        // sortiranje na studenti po ime
        return usort($niza, function ($a,$b){
           return strcmp($a['ime'],$b['ime']);
        });
    }

    function prikaziStudenti($niza=array())
    {
        // funkcija za prikazuvanje na site studenti
        // ime ${ime}, godini {$god}, prosek {$prosek}
        foreach ($niza as $student){
            $prosek=number_format((float)presmetajProsek($student['poeni']),2,'.');
            echo "Ime {$student['ime']}, godini {$student['godini']}, prosek {$prosek}.\n";
        }
    }

    $studenti=[
        [
            "ime"=>"Ivan Ivanovski",
            "godini"=>22,
            "poeni"=>[65, 75, 86]
        ],
        [
            "ime"=>"Eva Stajkovska",
            "godini"=>19,
            'poeni'=>[73, 52, 86]
        ],
        [
            "ime"=>"Pece Pecevski",
            "godini"=>20,
            'poeni'=>[73, 52, 86]
        ],
        [
            "ime"=>"magde magdalenovska",
            "godini"=>18,
            'poeni'=>[73, 12, 26]
        ],
    ];

    echo "Lab 1 \n";

    echo "---------------------------------------------- \n";
    echo "Lista na site studenti \n";
    golemaBukva($studenti);
    prikaziStudenti($studenti);

    echo "---------------------------------------------- \n";
    echo "Site studenti postari od 20 godini \n";
    prikaziStudenti(filterPoGodini($studenti,20));

    echo "---------------------------------------------- \n";
    echo "Sortiranje na studenti po ime \n";
    sortiranjePoIme($studenti);
    prikaziStudenti($studenti);
    echo "---------------------------------------------- \n";
