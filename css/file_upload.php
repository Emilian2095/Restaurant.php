<?php

function fileUpload($image)
{

    if ($image['error'] === 4) {
        $imageName = 'user.jpg';
        $message = 'No image was uploaded, but you can do it later';
    } else {
        $checkImage = getimagesize($image['tmp_name']);
        $message = $checkImage ? 'Done' : 'Not an image';
    }
    if ($message === 'Done') {
        $ext = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        $imageName = uniqid("") . "." . $ext;
        $destination = "image/{$imageName}";
        move_uploaded_file($image["tmp_name"], $destination);
    }
    return [$imageName, $message];
}
