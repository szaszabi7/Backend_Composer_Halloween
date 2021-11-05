<?php 

namespace Petrik14s\SzalaiSzabolcs\Halloween\Models;

use DateTime;
use Petrik14s\SzalaiSzabolcs\Halloween\Models\Lako;

class Esemeny {
    private $nev;
    private $szervezo;
    private $resztvevok;
    private $ido;

    public function __construct(string $nev, Lako $szervezo, array $resztvevok, DateTime $ido) {
        $this -> nev = $nev;
        $this -> szervezo = $szervezo;
        $this -> resztvevok = $resztvevok;
        $this -> ido = $ido;
    }

    public function getNev() {
        return $this -> nev;
    }

    public function getSzervezo() {
        return $this -> szervezo;
    }

    public function getResztvevok() {
        return $this -> resztvevok;
    }

    public function getIdo() {
        return $this -> ido;
    }
}

?>