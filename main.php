<?php

include('models/Photo.php');
include('models/Rover.php');

/* maak een nieuwe rover object aan, en zet de standaard rover op curiosity
    en geef een random sol waarde - mt_rand is de meest efficiente random 
    generator functie */
$rover = new Rover('Curiosity', strval(mt_rand(1, 2001)));

$response = '';
$photos = [];

// check de geselecteerde rover en zet de waarde hiernaar
if (isset($_POST['submit'])) {
    if(isset($_POST['rover'])) {
        if($_POST['rover'] === 'cur') {
            $rover->setRoverName('Curiosity');
        } else if($_POST['rover'] === 'opp'){
            $rover->setRoverName('Opportunity');
        }
    }
}

// doe een GET verzoek op de API en haal JSON response op
if($rover->getRoverName() === 'Curiosity') {
    $response = file_get_contents('https://api.nasa.gov/mars-photos/'
. 'api/v1/rovers/curiosity/photos?sol=' . $rover->getSol() . '&page=1&'
. 'api_key=508iAP5ZmqYM1BWgEORMF7ikPEJUtKJVKCPgJkn2');
} else if($rover->getRoverName() === 'Opportunity') {
    $response = file_get_contents('https://api.nasa.gov/mars-photos/' 
    . 'api/v1/rovers/opportunity/photos?sol=' . $rover->getSol() . '&page=1&'
    . 'api_key=508iAP5ZmqYM1BWgEORMF7ikPEJUtKJVKCPgJkn2');
}

// converteer JSON data naar PHP array
$photos = json_decode($response, true);

// haal foto's op van API en geef ze weer in HTML-elementen
if(empty($photos['photos'])) {
    echo 'Geen foto\'s gevonden, herlaad de pagina';
} else {
    echo 'Foto\'s van: <b>' . $rover->getRoverName() . '</b></br>';
    echo '<div class="row photos-container">';
    foreach($photos['photos'] as $array) {
        $photo = new Photo($array['id'], $array['img_src']);
                
        echo '<div class="col-md-6">'
        . '<img src="' . $photo->getUrl() . '" alt="marsphoto" class="photo">'
        . '</div>';
    }
    echo '</div>';
}

?>