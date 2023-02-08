create table membre(
    id int auto_increment primary key, 
    nom varchar(50),
    prenom varchar(50),
    email varchar(255),
    dtn Date,
    admin int DEFAULT '0',
    password varchar(13)
);

create table objet(
    id int auto_increment primary key,
    nom varchar(50),
    description TEXT,
    prix double,
    idmembre int,
    etat int,
    foreign  key (idmembre) references membre(id)
);

create table objetphoto(
    id int auto_increment primary key,
    photo varchar(255),
    idobjet int,
    foreign key (idobjet) references objet(id)
);

create table categorie(
    id int auto_increment primary key,
    nom varchar(50)
);

create table objetcategorie(
    idcategorie int not null,
    idobjet int not null,
    foreign key (idobjet) references objet(id),
    foreign key (idcategorie) references categorie(id)
);

create table echange(
    idechange int auto_increment primary key,
    idobjet1 int not null,
    idobjet2 int not null,
    idmembre1 int not null,
    idmembre2 int not null,
    etat int ,
    dateheure timestamp,
    foreign key (idobjet1) references objet(id),
    foreign key (idobjet2) references objet(id),
    foreign key (idmembre1) references membre(id),
    foreign key (idmembre2) references membre(id)
);

insert into membre values(1,'Akera','mick','akera@gmail.com','2003-01-28',1,'12345678');
insert into membre values(2,'Mahefaniaina','Elyse','elyse@gmail.com','2003-07-12',0,'12345678');
insert into membre values(3,'Mirah','finaritra','mirah@gmail.com','2005-10-04',0,'12345678');


insert into objet values(1,'redmi note 10','16Go de RAM, Carte graphique: Adreno 612,Batterie: 5000mAh','6000000',1,1);
insert into objet values(2,'redmi note 10pro','64Go de RAM, Carte graphique: Adreno 618,Batterie: 5020mAh','6500000',2,1);
insert into objet values(3,'redmi note 11','128Go de RAM, Carte graphique: Adreno 632,Batterie: 5080mAh','7000000',3,1);
insert into objet values(4,'bellerine','De couleur bleu, pointure 36','20000',1,1);
insert into objet values(5,'ballerine','De couleur noir, pointure 37','22000',2,1);
insert into objet values(6,'ballerine','De couleur rouge, pointure 36','20000',3,1);
insert into objet values(7,'Manteaux','De couleur noir, taille M','70000',1,1);
insert into objet values(8,'Manteaux','De couleur gris, taille M','100000',2,1);
insert into objet values(9,'Veste','De couleur noir, taille S','60000',3,1);
insert into objet values(10,'Air jordan one','De couleur bleu et noir, pointure 42','70000',1,1);
insert into objet values(11,'Air jordan one','De couleur rouge et noir, pointure 45','72000',2,1);
insert into objet values(12,'Air jordan one','De couleur violet et noir, pointure 37','78000',3,1);
insert into objet values(13,'Yezzy slide','Marque Adidas,De couleur gris, pointure 36','44000',1,1);
insert into objet values(14,'Yezzy slide','Marque Adidas,De couleur marron, pointure 37','42000',2,1);
insert into objet values(15,'Yezzy slide','Marque Adidas,De couleur noir, pointure 36','43000',3,1);
insert into objet values(16,'Sweat','De couleur noir, taille M','50000',1,1);
insert into objet values(17,'Sweat','De couleur bleu nuit, taille M','49000',2,1);
insert into objet values(18,'Sweat','De couleur violet, taille L','50000',3,1);


insert into objetphoto values(1,'1.png',1);
insert into objetphoto values(2,'12.png',1);
insert into objetphoto values(3,'13.jpg',1);
insert into objetphoto values(4,'21.jpg',2);
insert into objetphoto values(5,'22.jpg',2);
insert into objetphoto values(6,'23.jpg',2);
insert into objetphoto values(7,'31.jpeg',3);
insert into objetphoto values(8,'32.jpg',3);
insert into objetphoto values(9,'33.jpg',3);
insert into objetphoto values(10,'41.jpg',4);
insert into objetphoto values(11,'42.jpg',4);
insert into objetphoto values(12,'41.jpg',4);
insert into objetphoto values(13,'51.jpg',5);
insert into objetphoto values(14,'52.jpg',5);
insert into objetphoto values(15,'53.jpg',5);
insert into objetphoto values(16,'61.jpg',6);
insert into objetphoto values(17,'62.jpg',6);
insert into objetphoto values(18,'63.jpg',6);
insert into objetphoto values(19,'71.jpg',7);
insert into objetphoto values(20,'72.jpg',7);
insert into objetphoto values(21,'73.jpg',7);
insert into objetphoto values(22,'81.jpg',8);
insert into objetphoto values(23,'82.jpg',8);
insert into objetphoto values(24,'83.jpg',8);
insert into objetphoto values(25,'91.jpg',9);
insert into objetphoto values(26,'92.jpg',9);
insert into objetphoto values(27,'93.jpg',9);
insert into objetphoto values(28,'101.jpg',10);
insert into objetphoto values(29,'102.jpg',10);
insert into objetphoto values(30,'103.jpg',10);
insert into objetphoto values(31,'111.jpg',11);
insert into objetphoto values(32,'112.jpg',11);
insert into objetphoto values(33,'112.jpg',11);
insert into objetphoto values(34,'121.jpg',12);
insert into objetphoto values(35,'122.jpg',12);
insert into objetphoto values(36,'123.jpg',12);
insert into objetphoto values(37,'131.jpg',13);
insert into objetphoto values(38,'132.jpg',13);
insert into objetphoto values(39,'133.jpg',13);
insert into objetphoto values(40,'141.png',14);
insert into objetphoto values(41,'142.jpg',14);
insert into objetphoto values(42,'143.jpg',14);
insert into objetphoto values(43,'151.jpg',15);
insert into objetphoto values(44,'151.png',15);
insert into objetphoto values(45,'153.jpeg',15);
insert into objetphoto values(46,'161.jpg',16);
insert into objetphoto values(47,'162.jpg',16);
insert into objetphoto values(48,'163.jpg',16);
insert into objetphoto values(49,'171.jpg',17);
insert into objetphoto values(50,'172.jpg',17);
insert into objetphoto values(51,'173.jpeg',17);
insert into objetphoto values(52,'181.png',18);
insert into objetphoto values(53,'182.jpg',18);
insert into objetphoto values(54,'183.png',18);


insert into categorie values(1,'telephone');
insert into categorie values(2,'vetements');
insert into categorie values(3,'chaussures');


insert into objetcategorie values(1,1);
insert into objetcategorie values(1,2);
insert into objetcategorie values(1,3);
insert into objetcategorie values(2,7);
insert into objetcategorie values(2,8);
insert into objetcategorie values(2,9);
insert into objetcategorie values(2,16);
insert into objetcategorie values(2,17);
insert into objetcategorie values(2,18);
insert into objetcategorie values(3,4);
insert into objetcategorie values(3,5);
insert into objetcategorie values(3,6);
insert into objetcategorie values(3,10);
insert into objetcategorie values(3,11);
insert into objetcategorie values(3,12);
insert into objetcategorie values(3,13);
insert into objetcategorie values(3,14);
insert into objetcategorie values(3,15);
