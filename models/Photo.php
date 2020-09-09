<?php
// strong types
declare(strict_types = 1);

class Photo {

    // attributen
    private int $id;
    private string $url;
    private string $roverName;

    // constructor
    public function __construct(int $id, string $url, string $roverName) {
        $this->id = $id;
        $this->url = $url;
        $this->roverName = $roverName;
    }

    // methoden
    public function getId() : int {
        return $this->id;
    }

    public function getUrl() : string {
        return $this->url;
    }

    public function getRoverName() : string {
        return $this->roverName;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setUrl(string $url) {
        $this->url = $url;
    }

    public function setRoverName(string $roverName) {
        $this->roverName = $roverName;
    }

}

?>