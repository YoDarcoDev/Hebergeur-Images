<?php

// VERIFIER SI IMAGE BIEN RECUE

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

    $error = 1;
    

    // TAILLE
    if ($_FILES['image']['size'] <= 3000000) {

        // EXTENSION
        $informationsImage = pathinfo($_FILES['image']['name']);
        $extensionImage = $informationsImage['extension'];
        $extensionsArray = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($extensionImage, $extensionsArray)) {

            $address = 'uploads/'.time().rand().rand().'.'.$extensionImage;

            move_uploaded_file($_FILES['image']['tmp_name'], $address);

            $error = 0;
        }
    }
}

