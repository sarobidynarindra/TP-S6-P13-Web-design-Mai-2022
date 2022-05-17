CREATE DATABASE rechauffementclimatique;
USE rechauffementclimatique;


CREATE TABLE Actu(
    idActu int not null PRIMARY KEY auto_increment,
    nomPays varchar(200) not null,
    titre varchar(250) not null,
    dateActualite Date not null,
    image varchar(150) 
);
INSERT INTO Actu VALUES(null,'Canada','La secheresse a plombe agriculture au Canada','2022-05-15','canada.jpg');
INSERT INTO Actu VALUES(null,'Etats-Unis','Etats-Unis sont touches par des episodes de secheresse,les feux de forets se multiplient','2022-05-15','USA.jpg');
INSERT INTO Actu VALUES(null,'Chine','La Chine se repose historiquement sur des barrages, des digues et des lacs de retenue pour se proteger des crues','2022-05-15','Chine2.jpg');
INSERT INTO Actu VALUES(null,'Madagascar','Madagascar est le premier pays a subir la famine a cause du rechauffement climatique','2022-05-15','Mada2.jpg');
INSERT INTO Actu VALUES(null,'Afrique','Agriculture est gravement touchee par les faibles niveaux de precipitations et les temperatures elevees','2022-05-15','Afrique.jpg');
INSERT INTO Actu VALUES(null,'Chine','La Chine emet plus de gaz a effet de serre que ensemble des pays developpes','2022-05-15','Chine.jpg');

CREATE TABLE DetailsActu(
	idDetailsActu int not null PRIMARY KEY auto_increment,
	idActu int references Actu(idActu),
	description varchar(800) not null
);
INSERT INTO DetailsActu VALUES(null,1,'les grandes cultures cerealieres ont connu une baisse de production,montrent les donnees de Statistique Canada.
Cette situation est principalement due a la secheresse qui a affecte les provinces de l’Ouest cette annee.
Les grandes cultures cerealieres dont la production totale nette a le plus severement decline par rapport a an dernier sont avoine (43%) et le ble (39%), 
Une secheresse majeure a frappe le Canada,etendant depuis la Colombie-Britannique jusqu en Ontario.
Pour ameliorer la resilience des cultures,il faudrait faire des changements importants et amener des pratiques agroecologiques');

INSERT INTO DetailsActu VALUES(null,2,'la Californie est au cœur de actualite pour ses violents feux de foret.En quelques semaines seulement, plus de 8 000 km2 ont ete ravages.
Confrontee regulierement aux incendies,la Californie ne cesse de voir la saison des feux etendre, avec des feux de forets qui se produisent desormais du printemps a automne. En cause notamment, 
la hausse des temperatures et des secheresses sans precedent.Apres les etudes du California is Fourth Climate Change Assessment sur les consequences regionales des changements climatiques,
la surface touchee par les incendies pourrait augmenter de 77 % ici a la fin du siecle.');

INSERT INTO DetailsActu VALUES(null,3,'La Chine se repose historiquement sur un systeme de barrages, de digues et de lacs de retenue pour se proteger des crues, particulierement de ses deux geants: le Fleuve jaune et le Yangtse, le plus long fleuve Asie
.En quoi le changement climatique accentuent alors cette vulnerabilite des barrages.Le rechauffement planetaire rend atmosphere plus humide et accroit donc les precipitations.
Les inondations sont un signal alarme pour la Chine,a savoir que le changement climatique est bel et bien la .Le risque essentiel est lie aux difficultes de prevision des crues
.Les barrages sont concus pour resister a des crues centennales, majeures. Mais le changement climatique change la donne. Il n y aura pas forcement plus eau;
 des periodes de secheresse prolonge, suivies de crues plus intenses');

INSERT INTO DetailsActu VALUES(null,4,'La famine a Madagascar fait des ravages, contraignant des habitants a manger des criquets, des feuilles de cactus et meme de la boue.
Le sud de Madagascar est frappe par une secheresse aux consequences desastreuses pour les sols et les populations.
La famine touche les agriculteurs et tous les locaux, les forcant a devoir fuir leur lieu de vie.
 Eau est devenue une denree introuvable, le betail meurt, les terres sont impraticables au milieu un paysage aride.
 Les agriculteurs ont perdu leurs cultures et ne peuvent ni subvenir a leurs besoins, ni nourrir les communautes');

INSERT INTO DetailsActu VALUES(null,5,'Afrique continue etre un des pays les plus durement touches par les consequences du changement climatique, bien qu elle emette les plus faibles niveaux de gaz a effet de serre a origine de ses impacts.
 La derniere prediction en date est la disparition des derniers glaciers Afrique.De faibles precipitations ont ete enregistres dans certaines
  parties de Afrique australe, en plus du retard dans apparition de la mousson africaine, un systeme de vent majeur essentiel 
   economie de la region base sur agriculture. En Zambie,les niveaux de precipitations pendant la saison humide ont ete inferieurs a la moyenne pendant au moins deux annees consecutives
 .Economie de nombreux Etats africains repose suragriculture.');

INSERT INTO DetailsActu VALUES(null,6,'le plus grand pays Asie representait 27 % des emissions mondiales de gaz a effet de serre, responsables du rechauffement climatique.
 la Chine arrive en tete un tel classement avec des emissions de CO2 representant 9 899 millions de tonnes,soit plus de 30 % des emissions mondiales.
 Environnement pollue de la Chine est pour essentiel un resultat du developpement rapide du pays et donc une grande augmentation de la consommation energie primaire,
 qui est principalement fournie par les centrales electriques au charbon');

CREATE TABLE Admin(
	idAdmin int not null PRIMARY KEY auto_increment,
	email varchar(200) not null,
	motdepasse varchar(250) not null
);
INSERT INTO Admin VALUES(1,'admin@gmail.com',sha1(123));