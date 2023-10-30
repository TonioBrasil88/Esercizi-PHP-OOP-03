<?php

/* Esercizio
Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
Automobile;
SUV;
Utilitaria;
Sportiva; 

Tenere il conto degli oggetti creati per ogni classe */

class Auto{

    public $marchio;
    public $modello;
    public $porte;
    public $prezzo;

    static public $totalAutoCount = 0;

    public function __construct($marchio, $modello, $porte, $prezzo){
        $this->marchio = $marchio;
        $this->modello = $modello;
        $this->porte = $porte;
        $this->prezzo = $prezzo;

        self::$totalAutoCount++;
    }

    public function count(){
        echo $totalAutoCount;
    }
}


class Suv extends Auto{

    public $segmento;

    static public $suvAutoCount = 0;

    public function __construct($marchio, $modello, $porte, $prezzo, $segmento){
        parent::__construct($marchio, $modello, $porte, $prezzo, $segmento);
        $this->segmento = $segmento;

        self::$suvAutoCount++;
    }

    public function count(){
        echo $suvAutoCount;
    }

}

class Utilitaria extends Auto{

    public $segmento;

    static public $utilitariaAutoCount = 0;


    public function __construct($marchio, $modello, $porte, $prezzo, $segmento){
        parent::__construct($marchio, $modello, $porte, $prezzo, $segmento);
        $this->segmento = $segmento;

        self::$utilitariaAutoCount++;
    }

    public function count(){
        echo $utilitariaAutoCount;
    }

}

class Sportiva extends Auto{

    public $segmento;

    static public $sportivaAutoCount = 0;


    public function __construct($marchio, $modello, $porte, $prezzo, $segmento){
        parent::__construct($marchio, $modello, $porte, $prezzo, $segmento);
        $this->segmento = $segmento;

        self::$sportivaAutoCount++;
    }

}

$suv = new Suv("Honda", "e:Ny1", "5", 357.700, "SUV");
$utilitaria = new Utilitaria("Hyundai", "Bayon", "5", 21.800, "Utilitaria");
$sportiva = new Sportiva("Audi", "A4", "5", 47.605, "Sportiva");

$suv1 = new Suv("Alfa Romeo", "Stelvio", "5", 104.500, "SUV");
$utilitaria1 = new Utilitaria("Skoda", "Fabia", "5", 22.100, "Utilitaria");
$sportiva1 = new Sportiva("Aston Martin", "Vantage", "3", 161.832, "SUV");


var_dump($suv, $utilitaria, $sportiva);
var_dump($suv1, $utilitaria1, $sportiva1);

echo $suv->marchio;
