use prosjekt;

drop table if exists gruppe_person;
drop table if exists avtaler;
drop table if exists person;
drop table if exists avtale;
drop table if exists sted;
drop table if exists gruppe;




create table if not exists person(
p_personID int primary key auto_increment,
p_tlfnummer int,
p_epost varchar(100),
p_fornavn  varchar(255) not null,
p_etternavn varchar(255) not null,
p_adresse varchar (100),
p_postnr  int
 );
 
create table if not exists gruppe(
g_gruppeID int primary key unique auto_increment,
g_gruppenavn varchar(255)
);

create table if not exists gruppe_person(
gp_gruppe_personID int primary key auto_increment,
gp_gruppeID int,
gp_personID int,
foreign key(gp_gruppeID) references gruppe(g_gruppeID),
foreign key(gp_personID) references person(p_personID)
);


	create table if not exists sted(
stedID int primary key unique auto_increment,
adresse varchar (255),
stedType varchar (30)
);



create table if not exists avtale ( 
a_avtaleID int unique primary key auto_increment, 
a_tidspunkt datetime not null, 
a_avtaleType varchar(50) not null, 
a_kommentar varchar(200),
a_stedID int not null,
foreign key(a_stedID) references sted(stedID)
);

create table if not exists avtaler(
avtalerID int primary key auto_increment,
aa_avtaleID int,
aa_personID int,
aa_gruppeID int,
foreign key(aa_avtaleID) references avtale(a_avtaleID),
foreign key(aa_personID) references person(p_personID),
foreign key(aa_gruppeID) references gruppe(g_gruppeID)
);




insert into person(p_tlfnummer, p_fornavn, p_etternavn, p_postnr, p_adresse, p_epost) 
values(45238838, 'adam', 'nuridov', 4332, 'onnebursheia 8', 'adam_nuridov@msn.com');
insert into gruppe(g_gruppenavn) values ('coolkids gang'); 	




insert into sted (adresse, stedType)
values ('Granittveien 25', 'Privat');

insert into sted (adresse, stedType)
values ('Statoil HQ', 'Offentlig');

insert into sted (adresse, stedType)
values ('Statoil Bensinstasjon, Breidablikkveien 25', 'Offentlig');

insert into sted (adresse, stedType)
values ('Professor 25', 'Privat');

insert into sted (adresse, stedType)
values ('SF Kino Sandnes', 'Offentlig');

insert into sted (adresse, stedType)
values ('Universitetet i Stavanger - Kjølv Egeland', 'Offentlig');
insert into avtale(a_tidspunkt, a_avtaleType, a_kommentar, a_stedID)
values ('2015-08-01 16:00:00', 'Møte', 'Økonomimøte', 2);
