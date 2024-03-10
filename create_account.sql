DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
    `nom` varchar(50) NOT NULL,
    `prenom` varchar(50) NOT NULL,
    `login` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,

    PRIMARY KEY (`login`)
)
;

INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES
('test','test','test','test')


DROP TABLE IF EXISTS `mypokedex`;
CREATE TABLE IF NOT EXISTS `mypokedex` (
    `login` varchar(50) NOT NULL,
    `idPokemon` int NOT NULL,
  KEY `fk_mypokedex_login` (`login`),
  KEY `fk_mypokedex_idPokemon` (`idPokemon`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `mypokedex` (`login`, `idPokemon`) VALUES
('test', 1)