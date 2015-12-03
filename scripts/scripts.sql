-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/12/2015 às 23:01
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- Versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `quiz`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_criar_jogo`(in  id_jogador INT)
BEGIN
   
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `sessao` varchar(45) DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `final` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario_idx` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `jogos`
--

INSERT INTO `jogos` (`id`, `id_usuario`, `sessao`, `inicio`, `final`) VALUES
(2, 1, 'dasdasd', '2015-11-26 22:17:05', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos_resposta`
--

CREATE TABLE IF NOT EXISTS `jogos_resposta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jogo` int(11) DEFAULT NULL,
  `id_pergunta` int(11) DEFAULT NULL,
  `id_resposta` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jogo_idx` (`id_jogo`),
  KEY `id_pergunta_idx` (`id_pergunta`),
  KEY `id_resposta_idx` (`id_resposta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `jogos_resposta`
--

INSERT INTO `jogos_resposta` (`id`, `id_jogo`, `id_pergunta`, `id_resposta`, `data`) VALUES
(1, 2, 17, NULL, NULL),
(2, 2, 28, NULL, NULL),
(3, 2, 16, NULL, NULL),
(4, 2, 19, NULL, NULL),
(5, 2, 22, NULL, NULL),
(6, 2, 26, NULL, NULL),
(7, 2, 20, NULL, NULL),
(8, 2, 23, NULL, NULL),
(9, 2, 29, NULL, NULL),
(10, 2, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `pontos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Fazendo dump de dados para tabela `nivel`
--

INSERT INTO `nivel` (`id`, `descricao`, `pontos`) VALUES
(18, 'FÁCIL', 25),
(19, 'MEDIO', 60),
(20, 'DIFÍCIL', 120);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resposta` int(11) NOT NULL,
  `id_nivel` int(11) DEFAULT NULL,
  `descricao` varchar(400) DEFAULT NULL,
  `assunto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_nivel_idx` (`id_nivel`),
  KEY `id_resposta_idx` (`id_resposta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Fazendo dump de dados para tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `id_resposta`, `id_nivel`, `descricao`, `assunto`) VALUES
(16, 46, 18, 'Quantas vezes o Brasil foi Campeão da Copa do Mundo de Futebol ?', 'Conhecimentos Gerais'),
(17, 50, 18, 'Qual é o nome da medida de comprimento que corresponde à milésima parte do milímetro?', 'Conhecimentos Gerais'),
(18, 54, 18, 'Qual é a matéria mais dura encontrada na natureza?', 'Conhecimentos Gerais'),
(19, 58, 18, 'O que significa as iniciais do termo “OVNI”?', 'Conhecimentos Gerais'),
(20, 62, 19, 'Qual é o nome da maior e mais grossa árvore do mundo?', 'Conhecimentos Gerais'),
(21, 66, 19, 'O que significam as iniciais da sigla: “IBOPE”?', 'Conhecimentos Gerais'),
(22, 70, 19, 'Por meio de qual substância prima é fabricado o papel?', 'Conhecimentos Gerais'),
(23, 74, 20, 'Qual é a vitamina que a pele humana absorve em contato com a luz solar?', 'Conhecimentos Gerais'),
(24, 78, 20, 'Qual é o alimento mais completo da natureza?', 'Conhecimentos Gerais'),
(25, 82, 20, 'Por meio de qual animal é transmitida a peste bubônica?', 'Conhecimentos Gerais'),
(26, 86, 19, 'Em que sentido decolam e aterrissam os aviões?', 'Conhecimentos Gerais'),
(27, 90, 20, 'Que nome era dado à carta de libertação de um escravo?', 'Conhecimentos Gerais'),
(28, 94, 18, 'Como se chamam as energias queimadas pelo corpo, quando este desenvolve atividades cansativas?', 'Conhecimentos Gerais'),
(29, 98, 20, 'Por que as folhas dos vegetais são na maioria da cor verde?', 'Conhecimentos Gerais'),
(30, 102, 20, 'Qual conceito vou tirar hoje?????', 'Conhecimentos Gerais');

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pergunta` int(11) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;

--
-- Fazendo dump de dados para tabela `respostas`
--

INSERT INTO `respostas` (`id`, `id_pergunta`, `descricao`) VALUES
(46, 16, '1 Vez'),
(47, 16, '3 vezes'),
(48, 16, '5 vezes'),
(49, 16, '6 vezes'),
(50, 17, 'O micro.'),
(51, 17, 'O máximo.'),
(52, 17, 'O centímetro.'),
(53, 17, 'O Kilometro.'),
(54, 18, 'O diamante negro.'),
(55, 18, 'O aço.'),
(56, 18, 'O ferro.'),
(57, 18, 'O chumbo.'),
(58, 19, ' Objeto Voador Não Identificado.'),
(59, 19, 'Organização de viagens nacionais e internacionais.'),
(60, 19, 'Objeto viajante não identificado.'),
(61, 19, 'Organização de vigia nacional internacional.'),
(62, 20, 'A sequóia gigante.'),
(63, 20, 'O Carvalho gigante.'),
(64, 20, 'A Oliveira.'),
(65, 20, 'Pau Brasil'),
(66, 21, 'Instituto Brasileiro de Opinião Pública e Estatística.'),
(67, 21, 'Instituto Brasileiro de Opinião e Pesquisa e Estatística.'),
(68, 21, 'Instituto Brasileiro de Organização Pública e Estatística.'),
(69, 21, 'Instituto Brasileiro de Oportunidades Públicas e Estratégicas.'),
(70, 22, 'celulose vegetal.'),
(71, 22, 'Petróleo.'),
(72, 22, 'Sacarose vegetal.'),
(73, 22, 'Areia.'),
(74, 23, 'A vitamina “D”.'),
(75, 23, 'A vitamina “C”.'),
(76, 23, 'A vitamina “A”.'),
(77, 23, 'A vitamina “B”.'),
(78, 24, ' O leite.'),
(79, 24, 'A carne.'),
(80, 24, 'A carne de gado.'),
(81, 24, 'O feijão.'),
(82, 25, 'Por meio da pulga do rato.'),
(83, 25, 'Pelo mosquito.'),
(84, 25, 'Pelo macado.'),
(85, 25, 'pela mosca.'),
(86, 26, 'Contra o vento.'),
(87, 26, 'A favor do ventro.'),
(88, 26, 'Contra o Sol, para conseguir enchergar'),
(89, 26, 'A favor do sol.'),
(90, 27, 'Carta de Alforria.'),
(91, 27, 'Carta de liberdade.'),
(92, 27, 'Carte de quitação.'),
(93, 27, 'Carta de extradição.'),
(94, 28, 'Calorias.'),
(95, 28, 'Suor.'),
(96, 28, 'Carboidratos.'),
(97, 28, 'Proteínas.'),
(98, 29, 'Por causa do pigmento chamado Clorofila.'),
(99, 29, 'Por causa do pigmento chamado hidrofila.'),
(100, 29, 'Por efeito a exposição ao sol.'),
(101, 29, 'Por causa da fotosintese.'),
(102, 30, 'C de campeão'),
(103, 30, 'A cho q não'),
(104, 30, 'B é bom '),
(105, 30, 'D nunca');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `mae` varchar(100) DEFAULT NULL,
  `pai` varchar(100) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `cidade` int(11) DEFAULT NULL,
  `comentario` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `usuario`, `email`, `rg`, `cpf`, `telefone`, `mae`, `pai`, `endereco`, `estado`, `cidade`, `comentario`) VALUES
(1, 'Thiago Duarte', '12345', 'master', 'thiago-duarte@outlook.com', 12345, 12345, '5189201771', 'Maria', 'João', 'Avenida Arroio Feijo, 1039', 1, 1, 'Usuário administrador'),
(2, 'João', '12345', 'root', 'joao@outlook.com', 12345, 123456, '12345', 'Maria', 'João', 'Porto Alegre', 1, 1, 'Dados básico'),
(4, 'Lizandro', '12345', 'lizandro', 'thiago-duarte@outlook.com', 123456, 123456, '51 89201771', 'maria', 'joão', 'Porto Alegre', 1, 1, 'teste de alteração dos dados básico');

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `jogos_resposta`
--
ALTER TABLE `jogos_resposta`
  ADD CONSTRAINT `id_jogo` FOREIGN KEY (`id_jogo`) REFERENCES `jogos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_pergunta` FOREIGN KEY (`id_pergunta`) REFERENCES `perguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_resposta` FOREIGN KEY (`id_resposta`) REFERENCES `respostas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `id_nivel` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

insert into jogos_resposta (id_pergunta, id_jogo) 

(SELECT p.id 
		,(select j.id from jogos j where j.id_usuario = 1) AS id_jogo

   FROM perguntas p
 inner join nivel n on n.id = p.id_nivel
				  and n.descricao = 'Facil'
order by rand()
limit 4
)
union 
(SELECT p.id 
		,(select j.id from jogos j where j.id_usuario = 1) AS id_jogo

  FROM perguntas p
inner join nivel n on n.id = p.id_nivel
				  and n.descricao = 'Médio'
order by rand()
limit 3)
union 
(SELECT p.id 
	,(select j.id from jogos j where j.id_usuario = 1) AS id_jogo

 FROM perguntas p
inner join nivel n on n.id = p.id_nivel
				  and n.descricao = 'Dificil'
order by rand()
 limit 3)
