create database testEvaluation;
use testEvaluation;

create table superuser(
    id int not null auto_increment ,
    nom varchar(255),
    prenom varchar(255),
    login varchar(255),
    mdp varchar(255),
    email varchar(255),
    primary key(id)
);

insert into superuser (nom,prenom,login,mdp,email) values  ('Ran','Sedra','sedra@gmail.com','0000','sedra@gmail.com');
insert into superuser (nom,prenom,login,mdp,email) values  ('Ran','Sedra','sedra@gmail.com',SHA1('0000'),'sedra@gmail.com');

create table simpleuser(
    id int not null auto_increment ,
    nom varchar(255),
    prenom varchar(255),
    login varchar(255),
    mdp varchar(255),
    email varchar(255),
    etat int,
    primary key(id)
);

insert into simpleuser (nom,prenom,login,mdp,email,etat) values  ('Rak','Rak','rak@gmail.com','0000','rak@gmail.com',0);
insert into simpleuser (nom,prenom,login,mdp,email,etat) values  ('Rakotonirina','Rova','rova@gmail.com',SHA1('0000'),'rak@gmail.com',0);

create table categorie (
    id int not null auto_increment,
    nom varchar(255),
    apropos varchar(255),
    primary key (id)
);

insert into categorie (nom,apropos) values ('causes','Nombreux sont les causes du rechauffement climatique.');
insert into categorie (nom,apropos) values ('effets','Notre planete subice la totalite de la consequence du rechauffement climatique.');
insert into categorie (nom,apropos) values ('actions','Luttons contre le rechauffement climatique pour l avenir de nos enfants.');

create table commentaire (
    id int not null auto_increment,
    personne varchar(255),
    photo varchar(255),
    commentaire varchar(255),
    primary key (id)
);

insert into commentaire (personne,photo,commentaire) 
values
('Jean Luis','User.png','Le climat se détraque à l’échelle de notre planète. Le phénomène est dû aux gaz à effet de serre rejetés en excès dans l’atmosphère par les activités humaines.'),
('Bob Carter','User.png','Au travers des siècles, l’humanité a constamment dû relever des défis à court et à long terme.'),
('Marie Ange','User.png','Il faut utiliser les voitures élèctrique.'),
('Jack Saprow','User.png','Tout le monde doivent proteger le fond marin.'),
('Capitaine Boby','User.png','Luttons ensemble contre la deforestation.'); 

create table contenue(
    id int not null auto_increment,
    idCategorie int,
    titre varchar(255),
    description varchar(500),
    photo varchar(255) default "terre.jpg",
    url varchar(255),
    primary key (id),
    foreign key (idCategorie) references categorie(id)
);

create table contenue (
    id int not null auto_increment,
    idCategorie int,
    titre varchar(255),
    description varchar(500),
    photo varchar(255) default "terre.jpg",
    primary key (id),
    foreign key (idCategorie) references categorie(id)
);
insert into contenue (idCategorie,titre,description,photo) 
values
(1,'Production d energie','Une grande partie des émissions mondiales de gaz à effet de serre provient de l’utilisation de combustibles fossiles tels que le charbon, le pétrole et le gaz naturel pour produire de l’électricité et de la chaleur. La production d’électricité dépend encore majoritairement des combustibles fossiles. Seul un quart de notre électricité provient de sources éoliennes, solaires et d’autres sources renouvelables.','production-electricite.jpg'),
(1,'Production industrielle','La production industrielle rejette des émissions de gaz, essentiellement du fait de son utilisation des combustibles fossiles pour produire l’énergie nécessaire à la fabrication de matériaux tels que le ciment, le fer, l’acier, l’électronique, le plastique et le textile, ainsi que d’autres biens. L’exploitation minière et d’autres processus industriels produisent également des émissions.','producIndu.jpg'),
(1,'Deforstation','La déforestation au profit d’exploitations agricoles, de pâturages ou autre, rejette également des émissions de gaz à effet de serre, puisque les arbres, lorsqu’ils sont abattus, libèrent le carbone qu’ils ont stocké. La destruction des forêts, qui absorbent le dioxyde de carbone, limite également la capacité de la nature à empêcher les émissions de gaz d’entrer dans l’atmosphère.','deforestation.jpg'),
(2,'Hausse des températures','Dans la quasi-totalité des régions terrestres, les journées très chaudes et les vagues de chaleur se multiplient. L année 2020 a été l’une des plus chaudes jamais enregistrées. La hausse des températures provoque une augmentation des maladies liées à la chaleur et peut rendre le travail et les déplacements plus difficiles. En outre, les incendies de forêt démarrent plus facilement et se propagent plus vite lorsque les températures sont plus élevées.','rechauffement-climatique-7.jpg'),
(2,'Accroissement de la gravité des tempêtes','Les changements de température occasionnent à leur tour des changements dans les précipitations. Cela se traduit par des tempêtes plus violentes et plus fréquentes, susceptibles de provoquer des inondations et des glissements de terrain, de détruire des maisons et des communautés, et de coûter des milliards de dollars.','tempete.jpg'),
(2,'Accroissement des sécheresses','De plus en plus de régions sont confrontées à une pénurie d’eau. Les sécheresses peuvent provoquer des tempêtes de sable et de poussière destructrices, capables de déplacer des milliards de tonnes de sable à travers les continents. Avec la désertification, les terres cultivables voient également leur surface se réduire. Aujourd’hui, de nombreuses personnes sont exposées au risque de manquer d’eau.','shutterstock_640413589-800x450.jpg'),
(3,'Modifions nos habitudes alimentaires','Pour limiter l’impact de notre alimentation sur le climat, privilégions autant que possible les fruits et légumes de saison. En effet, ils génèrent en moyenne 7 fois mois de GES que les produits cultivés sous des serres chauffées. De nombreux calendriers de fruits et légumes de saison sont disponibles pour nous guider dans nos achats.','terre.jpg'),
(3,'Luttons contre la déforestation','Certains labels garantissent une gestion durable des forêts. En achetant des produits (papier, meubles, etc.) portant le label Forest Stewardship Council (FSC) ou Programme Européen des Forêts Certifiées (PEFC), nous pouvons contribuer à la préservation des forêts et limiter ainsi les émissions anthropiques de GES.','838_photo2.jpg'),
(3,'Préservons les océans','Pour lutter contre le changement climatique, nous devons préserver les océans. Pour cela, chacun de nous peut agir au quotidien. Par exemple, nous pouvons acheter des produits ménagers respectueux de l’environnement afin d’éviter de déverser des produits chimiques polluants dans les océans.','terre.jpg');
