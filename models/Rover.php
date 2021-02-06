<?php
// strong types
declare(strict_types = 1);

class Rover {
    // attributen
    private string $roverName;
    private string $sol;

    // constructor
    public function __construct(string $roverName, string $sol) {
        $this->roverName = $roverName;
        $this->sol = $sol;
    }

    // methoden
    public function getRoverName() : string {
        return $this->roverName;
    }

    public function getSol() : string {
        return $this->sol;
    }

    public function setRoverName(string $roverName) {
        $this->roverName = $roverName;
    }

    public function setSol(string $sol) {
        $this->sol = $sol;
    }
}

?>