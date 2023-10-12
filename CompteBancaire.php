<?php
    class CompteBancaire {
        private $name;
        private $balance;

        public function __construct($name, $balance) {
            $this->name = $name;
            $this->balance = $balance;
        }

        public function depot($somme) {
            return $this->balance += $somme;
        }

        public function retrait($somme) {
            return $this->balance -= $somme;
        }

        public function show() {
            echo "{$this->name}'s bank account balance is {$this->balance} euros.\n";
        }

    }
?>
