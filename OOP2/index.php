<?php
// ESERCIZI PHP 4 - OOP 2

// Rivedere la lezione
// Recap
// Replicare la batmobile vista a lezione
// Extra n.1 - Se volete esercitarvi di più in maniera guidata, replicare Jeeg Robot visto a lezione
// Creare un Computer con Dependency Injection e Object Composition, composto da
// RAM
// Scheda Madre
// Scheda Video
// altro

// (Se l’esercizio del computer non vi piace, o non siete confident su quali siano i componenti all’interno di un pc, qualsiasi idea per esercitarvi va bene, ve ne elenco alcune qui sotto)

// Extra n.2 - Se volete esercitarvi ancora o l’idea del Computer me l’avete bocciata, potete fare qualcosa del genere: (Un sistema gdr con classi varie, una macchinetta del caffe con diversi tipi di filtri o marca di caffe, una band musicale composta da diversi membri che cantano diverse canzoni, aiuto ho finito le idee pensateci voi <3)
// -Pushatemi tutto su github!

// ESERCIZIO BATMAN
class BatmanCar{
    public $parteAnteriore;
    public $partePosteriore;

    public function __construct(parteAnteriore $_parteAnteriore, partePosteriore $_partePosteriore){
        $this->parteAnteriore = $_parteAnteriore;
        $this->partePosteriore = $_partePosteriore;

    }
    public function pulsanteAttacca(){
        $this->parteAnteriore->attacca();
    }
    public function pulsanteDifendi(){
        $this->partePosteriore->difendi();
    }
}
// DIFENDERE
abstract class partePosteriore{
    abstract public function difendi();
}
// ATTACCARE
abstract class parteAnteriore{
    abstract public function attacca();

}
class razzi extends parteAnteriore{
    public function attacca(){
        echo "boom boom! \n";
    }
}
class laser extends parteAnteriore{
    public $color;
    public function __construct($_color){
        $this->color = $_color;
    }
    public function attacca(){
        echo "pew pew! di colore $this->color";
    }
}

class fumo extends partePosteriore{
    public $color;
    public function __costruct($_color){
        $this->colore = $_color;

    }
    public function difendi(){
        echo "Non mi tocchi";
    }
}

class scudo extends partePosteriore{
    public function difendi(){
        echo "Non mi sfiori";
    }
}

// $razzi1 = new razzi();
// $scudo1= new scudo();
// $batman1 = new BatmanCar($razzi1, $scudo1);

// $batman1->pulsanteDifendi();

// $batman3 = new batmancar(new laser("rosso"), new scudo("giallo"));

// $batman3->pulsanteDifendi();


// ESERCIZIO

class macchinettaCaffè{
    public $tipologieCaffè;
    public $aggiuntaLatte;
    public function __construct(varieCaffè $_tipologieCaffè, latte $_aggiuntaLatte){
        $this->tipologieCaffè = $_tipologieCaffè;
        $this->aggiuntaLatte = $_aggiuntaLatte;
    }
    public function varieCaffè(){
        $this->tipologieCaffè->erogaTipologia();
    }
    public function latte(){
        $this->aggiuntaLatte->montaLatte();
    }
}

abstract class varieCaffè{
    abstract public function erogaTipologia();
}

abstract class latte{
    abstract public function montaLatte();
}

class caffè extends varieCaffè{
    public function erogaTipologia(){
        echo "erogazione caffè in corso";
    }
}

class caffeDeck extends varieCaffè{
    public function erogaTipologia(){
        echo "erogazione caffè deck in corso";
    }
}

class ginseng extends varieCaffè{
    public function erogaTipologia(){
        echo "erogazione ginseng in corso!!";
    }
}

class espressino extends latte{
    public function montaLatte(){
        echo "erogazione espressino in corso";
    }
}

class caffèMacchiato extends latte{
    public function montaLatte(){
        echo "erogazione caffè macchiato in corso!! ";

    }
}

class capuccino extends latte{
    public function montaLatte(){
        echo "erogazione capuccino in corso";
    }
}

$macchinetta= new macchinettaCaffè(new ginseng(), new capuccino());
$macchinetta->varieCaffè();