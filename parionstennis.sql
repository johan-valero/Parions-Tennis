drop database parionstennis ;
create database parionstennis;
use parionstennis;

create table users (
idUsers int primary key auto_increment,
nom varchar(50) not null,
prenom varchar(30) not null,
mdp varchar(100) not null,
loginUser varchar(100) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table joueur(
idJoueur int primary key auto_increment,
nomJoueur varchar(50) not null ,
prenomJoueur varchar(50) not null,
paysJoueur varchar(50) not null,
avatarJoueur varchar(255) default null,
classementJoueur int not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table matchs(
idMatchs int primary key auto_increment, 
dateMatchs datetime not null,
lieuMatchs varchar(50) not null,
paysMatchs varchar(50) not null,
avatarLieuMatchs varchar(255) default null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table parier(
idMatchs int,
idJoueur int,
idUsers int,
primary key (idMatchs, idJoueur, idUsers),
FOREIGN KEY (idMatchs) REFERENCES matchs(idMatchs),
FOREIGN KEY (idJoueur) REFERENCES joueur(idJoueur),
FOREIGN KEY (idUsers) REFERENCES users(idUsers),
mise int not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table jouer(
idJoueur1 int,
idMatchs int,
idJoueur2 int, 
primary key (idJoueur1, idMatchs, idJoueur2),
FOREIGN KEY (idJoueur1) REFERENCES joueur(idJoueur),
FOREIGN KEY (idJoueur2) REFERENCES joueur(idJoueur),
FOREIGN KEY (idMatchs) REFERENCES matchs(idMatchs)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
