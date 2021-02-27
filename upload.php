<?php
    if(isset($_POST)) {
        if(isset($_FILES)) {
            //Linhas que pegam os dados vindos do array files enviado por post
            $name = $_FILES['f']['name'];
            $tmp = $_FILES['f']['tmp_name'];
            $ext = pathinfo($name,PATHINFO_EXTENSION);

            try {
                if(move_uploaded_file($tmp,__DIR__."/FILES/arch1teste.".$ext)) {
                    echo "Arquivo inserido com sucesso";
                } else {
                    echo "Algo deu errado na inserção de seu arquivo";
                }
            } catch (Exception $e) {
                echo "Something is wrong {$e->getCode()}";
            }
        } 
    }
?>