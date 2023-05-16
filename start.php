
    <?php
    class Wiel{
        public $spaken="spaak";        
    }
    class Fiets{
        public $merk = "baavus";
        public $wiel1;
        public function doen(){
            echo "gedaan";
        }
         function __construct(){
            $this->wiel1 = new Wiel();
        }
        
    }
    $fiets1 = new Fiets();

    echo $fiets1->merk;
    $fiets1->doen();
    echo $fiets1->wiel1->spaken;
    $fiets1->wiel2= new Wiel();
    if wiel
    ?>

