<?php

namespace Petrik14s\SzalaiSzabolcs\Halloween\Models;

use BadFunctionCallException;

class Lako {
    private $nev;

    public function __construct(string $nev)
    {
        $this -> nev = $nev;
    }

    public function getNev() {
        return $this -> nev;
    }
}