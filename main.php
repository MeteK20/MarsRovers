<?php
    include('models/Photo.php');
    include('controllers/PhotosController.php');

    /* check geselecteerde rover en zet de waarde hiernaar */
    $photosController = new PhotosController();
    if (isset($_POST['submit'])) {
        if(isset($_POST['rover'])) {
            if($_POST['rover'] === 'cur') {
                $photosController->setCurrentRover('Curiosity');
            } else if($_POST['rover'] === 'opp'){
                $photosController->setCurrentRover('Opportunity');
            }
        }
    }

    /* haal foto's op van API en geef ze weer in HTML-elementen */
    $photosController->fetchAPI();
    if(empty($photosController->getPhotos())) {
        echo 'Geen foto\'s gevonden, herlaad de pagina';
    } else {
        echo 'Foto\'s van: <b>' . $photosController->getCurrentRover() . '</b></br>';
        echo '<div class="row photos-container">';
        foreach($photosController->getPhotos() as $array) {
            $photo = new Photo($array['id'], $array['img_src'], $array['rover']['name']);
                    
            echo '<div class="col-md-6">'
            . '<img src="' . $photo->getUrl() . '" alt="marsphoto" class="photo">'
            . '</div>';
        }
        echo '</div>';
    }
?>