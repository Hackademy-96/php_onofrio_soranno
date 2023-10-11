<?php
// OOP 1

// Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
// Automobile
// SUV
// Utilitaria
// Sportiva
// Tenere il conto degli oggetti creati per ogni classe
// --Extra 1: Creare una classe "Moto" (o qualcosa del genere) ed implementare un tratto che funzioni sia per le automobili che per le moto.
// --Extra 2: Rendere la classe Automobile astratta ed implementare un metodo astratto che venga ereditato dalle sottoclassi

// -Esercizio Extra: se volete esercitarvi ancora, potete creare uno zoo, partendo da una classe astratta animali ed espandendo (es. Animali->Mammiferi, Ovipari ecc.)

trait proprietà {
    public function stampa(){
        echo "sto accelerando";
    }
}


abstract class automobile {
    use proprietà;
    public $Marchio ;
    public $Modello ;
    public $Cavalli ;
    public $NumeroPorte ;
    public $Anno ;
    public $Prezzo ;
    
     public function __construct($_marchio, $_modello, $_cavalli, $_numeroPorte, $_anno, $_prezzo){
        $this->Marchio = $_marchio;
        $this->Modello = $_modello;
        $this->Cavalli = $_cavalli;
        $this->NumeroPorte = $_numeroPorte;
        $this->Anno = $_anno;
        $this->Prezzo = $_prezzo;
        }
        abstract public function stampaAutomobile();
        
        
    }
    
    
    
    
    class sportiva extends automobile{
   
        public function stampaAutomobile(){
            echo "L'automobile sportiva $this->Marchio $this->Modello dell'anno $this->Anno è dotata di $this->NumeroPorte porte ed ha una potenza di $this->Cavalli cavalli. E' dsiponibile a partire da € $this->Prezzo \n";
            
    }
    }
    
    $ferrari = new sportiva('Ferrari', 'F40', 478, 3, 1987, '€1000000');
    $ferrari->stampaAutomobile();

    class suv extends automobile{
        public function stampaAutomobile(){
            echo "Il suv $this->Marchio $this->Modello dell'anno $this->Anno è dotata di $this->NumeroPorte porte ed ha una potenza di $this->Cavalli cavalli. E' dsiponibile a partire da € $this->Prezzo  "  ;
        }

    }
    $suv = new suv('Alfa Romeo', 'Stelvio', 120, 5, 2023, '€50000');
    $suv->stampaAutomobile();

    class utilitaria extends automobile{
        public function stampaAutomobile(){
            echo "L'utilitaria $this->Marchio $this->Modello dell'anno $this->Anno è dotata di $this->NumeroPorte porte ed ha una potenza di $this->Cavalli cavalli. E' dsiponibile a partire da € $this->Prezzo  " ;
        }
    }
    
    class moto{
        use proprietà;
        public $modelloMoto;
        public function __construct($_modelloMoto){
            $this->modelloMoto = $_modelloMoto;            
        }
        public function Marca(){}
    }
    $Moto = new Moto('Ducati');
    $Moto->Marca();



 
