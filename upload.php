<?php
    if(isset($_POST)) {
        if(isset($_FILES)) {
            //Linhas que pegam os dados vindos do array files enviado por post
            $name = $_FILES['f']['name'];
            $tmp = $_FILES['f']['tmp_name'];
            $ext = pathinfo($name,PATHINFO_EXTENSION);

            try {
                if($ext == 'mp3' || $ext == 'wav') {
                    if(move_uploaded_file($tmp,__DIR__."/FILES/{$name}.".$ext)) {
                        echo "Success";
                    } else {
                        throw new Exception("Something is wrong with your upload!<br> Please try again!",500);
                    }
                } else {
                    throw new Exception("Invalid file format, you can upload MP3 and WAV file's", 415);
                    
                }
            } catch (Exception $e) {
                echo "Error {$e->getCode()}<br> {$e->getMessage()}";
            }
        } 
    }
?>