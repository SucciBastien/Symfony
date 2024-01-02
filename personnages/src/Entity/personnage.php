<?php

namespace App\Entity;

class personnage{

    public static $personnages = [];

    public function __construct(public $pseudo, public $sexe, public $age, public array $carac)
    {
        self::$personnages[] = $this;
    }

    public static function creerPersonnage(){
        $p1 = new personnage("Paul", true, 34, ["for" => 4, "agi" => 2, "int" => 2]);
        $p2 = new personnage("Pierre", true, 25, ["for" => 1, "agi" => 4, "int" => 3]);
        $p3 = new personnage("Jackie", false, 22, ["for" => 1, "agi" => 1, "int" => 6]);
        $tabPerso = ["p1" => $p1, "p2" => $p2, "p3" => $p3];
    }

}