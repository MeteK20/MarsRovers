<?php
// strong types
declare(strict_types = 1);

// logica controller van de foto's
class PhotosController {
    private string $sol = '';
    private string $currentRover = 'Curiosity';
    private string $response = '';
    private array $photos = [];

    public function setSol() {
        $this->sol = strval(mt_rand(1, 2001));
    }

    public function setCurrentRover(string $rover) {
        $this->currentRover = $rover;
    }

    public function getCurrentRover() : string{
        return $this->currentRover;
    }

    // haal inhoud op obv API call
    public function fetchAPI(){
        $this->setSol();

        if($this->currentRover === 'Curiosity') {
            $this->response = file_get_contents('https://api.nasa.gov/mars-photos/'
        . 'api/v1/rovers/curiosity/photos?sol=' . $this->sol . '&page=1&'
        . 'api_key=508iAP5ZmqYM1BWgEORMF7ikPEJUtKJVKCPgJkn2');
        } else if($this->currentRover === 'Opportunity') {
            $this->response = file_get_contents('https://api.nasa.gov/mars-photos/' 
            . 'api/v1/rovers/opportunity/photos?sol=' . $this->sol . '&page=1&'
            . 'api_key=508iAP5ZmqYM1BWgEORMF7ikPEJUtKJVKCPgJkn2');
        }

        // converteer JSON data naar PHP array
        $this->photos = json_decode($this->response, true);
    }

    public function getPhotos() : array{
        return $this->photos['photos'];
    }

}
?>