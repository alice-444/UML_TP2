<?php
    class CompteBancaire {
        private $name;
        private $balance;

        public function __construct($name = 'Dupont', $balance = 1000) {
            $this->name = $name;
            $this->balance = $balance;
        }

        public function depot($somme) {
            $this->balance += $somme;
        }

        public function retrait($somme) {
            $this->balance -= $somme;
        }

        public function show() {
            echo "{$this->name}'s bank account balance is {$this->balance} euros.\n";
        }

    }

    $compte1 = new CompteBancaire('Duchmol', 800);
    $compte1->depot(350);
    $compte1->retrait(200);
    $compte1->show();
    
    $compte2 = new CompteBancaire();
    $compte2->depot(25);
    $compte2->show();
?>
