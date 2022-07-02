<?php 

require_once 'conexao.php';

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
                $include = "INSERT INTO tcc.postagem (titulo, subtitulo, conteudo, categoria, imagem, dt_criacao) VALUES ('$titulo', '$subtitulo', '$conteudo', '$categoria', '$image_content', NOW())";
                // echo "$sql";
                $insert = $conn->query($include);

                if($insert) {
                    $status = 'success';
                    $status_message = 'Arquivo armazenado com sucesso';
                }
                
                else {
                    $status_message = 'Falha no armazenamento do arquivo.';
                }
            } 
                else {
                    $status_message = 'Desculpe, somente imagens em formato JPG, JPEG, PNG, & GIF são aceitas.';
                }
        }
     else {
            $status_message = 'Por favor selecione uma imagem para realizar o upload.';
        }
    echo $status_message; 
    }


?>