--
-- Base de Dados: `phpoojeitocerto`
--
CREATE DATABASE IF NOT EXISTS `phpoojeitocerto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpoojeitocerto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Produto 1', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:15:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(2, 'Produto 2', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:16:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(3, 'Produto 3', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:17:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(4, 'Produto 4', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:18:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(5, 'Produto 5', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:19:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(6, 'Produto 6', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:20:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(7, 'Produto 7', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:21:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(8, 'Produto 8', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:22:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(9, 'Produto 9', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:23:00', '0000-00-00 00:00:00');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `created_at`, `updated_at`) VALUES
(10, 'Produto 10', 'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.', '2015-03-31 11:24:00', '0000-00-00 00:00:00');

