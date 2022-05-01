use parionstennis;

INSERT INTO `joueur` (`idJoueur`, `nomJoueur`, `prenomJoueur`, `paysJoueur`, `avatarJoueur`,`classementJoueur`) VALUES 
(NULL, 'Djokovic', 'Novak', 'Serbie', 'https://images2.imgbox.com/3b/10/eZIZvFjP_o.png','1'),
(NULL, 'Medvedev', 'Daniil', 'Russie','https://images2.imgbox.com/f5/96/EPS5xDei_o.png','2'),
(NULL, 'Nadal', 'Rafael', 'Espagne','https://images2.imgbox.com/28/59/PELc3kjV_o.png','4'),
(NULL, 'Zverev', 'Alexander','Allemagne', 'https://images2.imgbox.com/50/7e/0JOqzXNS_o.png', '3'),
(NULL, 'Tsitsipas', 'Stefanos', 'Grèce', 'https://images2.imgbox.com/51/b1/vLPBLjUA_o.png', '5'),
(NULL, 'Berrettini', 'Matteo', 'Italie','https://images2.imgbox.com/6d/55/jQm6OwgL_o.png', '6'),
(NULL, 'Ruud', 'Casper', 'Norvège','https://images2.imgbox.com/34/56/zvXdUM6x_o.png', '7' ),
(NULL, 'Rublev', 'Andrey','Russie', 'https://images2.imgbox.com/f9/cb/tKm9pkqv_o.png', '8'),
(NULL, 'Alcaraz', 'Carlos', 'Espagne', 'https://images2.imgbox.com/67/3d/c6gHxJNc_o.png',  '9'),
(NULL, 'Auger-Aliassime', 'Félix', 'Canada', 'https://images2.imgbox.com/10/e7/UehlTLw3_o.png', '10'),
(NULL, 'Norrie', 'Cameron', 'USA', 'https://images2.imgbox.com/8f/af/BETY1tsj_o.png', '11');

INSERT INTO `matchs` (`idMatchs`, `dateMatchs`, `lieuMatchs`,`paysMatchs`, `avatarLieuMatchs`) VALUES 
(NULL, '2022-04-29 20:00:00.000000', 'Roland Garros','Paris','https://images2.imgbox.com/f0/21/kHcO2MAs_o.jpg' ),
(NULL, '2022-05-05 20:15:00.000000', 'Wimbledon', 'Londres','https://images2.imgbox.com/3e/c3/SuKPAPv5_o.jpg'),
(NULL, '2022-05-12 21:00:00.000000', 'US Open','New York' ,'https://images2.imgbox.com/e4/b2/ykd9q6zE_o.jpg'),
(NULL, '2022-06-10 18:30:00.000000', 'Open Australie', 'Australie', 'https://images2.imgbox.com/0b/87/OlJ8ZQRh_o.jpg'),
(NULL, '2022-06-29 21:30:00.000000', 'Roland Garros', 'Paris','https://images2.imgbox.com/f0/21/kHcO2MAs_o.jpg');

INSERT INTO jouer (idJoueur1, idMatchs, idJoueur2) VALUES 
('7', '1', '3'),
('2', '2', '5'),
('1', '3', '4'),
('6', '4', '10'),
('11', '5', '9');