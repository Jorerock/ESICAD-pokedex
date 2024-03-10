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

