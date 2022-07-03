<?php
    require_once('conexao.php');

    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $conteudo = $_POST['conteudo'];
    $categoria = $_POST['categoria'];

    $status = 'Nada ainda';

    if(isset($_POST['submit'])) {
        $status = 'error';
        if(!empty($_FILES['image']['name'])) {
            // Obter informações do arquivo
            $file_name = basename($_FILES['image']['name']);
            $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

            // Permiti certos formatos de arquivo
            $allow_types = array('jpg', 'png', 'jpeg', ' gif');

            if(in_array($file_type, $allow_types)) {
                $image = $_FILES['image']['tmp_name'];
                $image_content = addslashes(file_get_contents($image));

                // Inserir imagens no banco de dados

                $sql = "INSERT INTO tcc.postagem (titulo, subtitulo, conteudo, categoria, imagem, dt_criacao) VALUES ('$titulo', '$subtitulo', '$conteudo', '$categoria', '$image_content', NOW())";

                // $sql = "INSERT into img (imagem, created) VALUES ('$image_content', NOW())";
                // echo "$sql";
                $insert = $conn->query($sql);

                if($insert) {
                    $status = 'success';
                    $status_message = header("Location: http://localhost/official-website/index.php");
                } else {
                    $status_message = 'Falha no armazenamento do arquivo.';
                }
            } else {
                $status_message = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
        }
    } else {
        $status_message = 'Por favor selecione uma imagem para o upload.';
        
    }
    echo $status_message; 
?>