CREATE TABLE `postagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `conteudo` varchar(1000) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `imagem` longblob NOT NULL,
  `dt_criacao` datetime NOT NULL DEFAULT current_timestamp()
)