-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para cadastros
CREATE DATABASE IF NOT EXISTS `cadastros` /*!40100 DEFAULT CHARACTER SET utf32 COLLATE utf32_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cadastros`;

-- Copiando estrutura para tabela cadastros.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `cpf` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `data_nascimento` varchar(10) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `cep` varchar(13) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `endereco` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `complemento` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `bairro` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `cidade` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `estado` varchar(2) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `quem_reg` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`usuario_id`) USING BTREE,
  UNIQUE KEY `usuario` (`usuario`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
