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
                        echo "Something is wrong";
                    }
                } else {
                    echo "Invalid format, you can upload MP3 or WAV files";
                }
            } catch (Exception $e) {
                echo "Something is wrong {$e->getCode()}";
            }
        } 
    }
?>