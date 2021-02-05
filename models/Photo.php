<?php
// strong types
declare(strict_types = 1);

class Photo {

    // attributen
    private int $id;
    private string $url;

    // constructor
    public function __construct(int $id, string $url) {
        $this->id = $id;
        $this->url = $url;
    }

    // methoden
    public function getId() : int {
        return $this->id;
    }

    public function getUrl() : string {
        return $this->url;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setUrl(string $url) {
        $this->url = $url;
    }

}

?>