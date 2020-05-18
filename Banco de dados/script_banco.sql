-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela teste.veiculos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
INSERT INTO `veiculos` (`id`, `dataDeCadastro`, `placa`, `modelo`, `marca`) VALUES
	(1, '2020-05-10', 'HLC1728', 'Uno', 'FIAT'),
	(2, '2020-05-12', 'def2341', 'Gol', 'Volkswagem'),
	(3, '2020-05-13', 'fed5432', 'Corsa', 'GM'),
	(4, '2020-03-14', 'GTR3659', 'Corsa', 'GM'),
	(5, '2010-10-20', 'kre33245', 'Voyage', 'Volkswagem'),
	(6, '2020-05-17', 'Tre5467', 'Toro', 'FIAT'),
	(7, '2020-03-10', 'hty5466', 'Celta', 'GM'),
	(8, '2020-05-17', 'TGE8695', 'Virtus', 'Volkswagem'),
	(9, '2020-09-19', 'TGR9865', 'Strada', 'FIAT');
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
