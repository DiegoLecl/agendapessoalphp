SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(99) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pessoa` (`id`, `nome`, `nascimento`, `endereco`, `telefone`) VALUES
(2, 'Beatriz Souza', '1941-08-10', 'Rua Botoes de Ouro, 968', '(13) 5036-4135'),
(3, 'Murilo Ferreira', '1986-09-20', 'Rua Juca LÃºcio, 1973', '(34) 3925-7363'),
(5, 'Renan Azevedo', '1997-01-06', 'Rua JosÃ© Casemiro Correia', '(41) 9710-4845'),
(6, 'Giovana Santos', '1991-01-02', 'Rodovia Washington Luiz, 70', '(83) 8607-6604');

ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
