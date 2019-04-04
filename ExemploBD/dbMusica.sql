create database dbMusica;

use dbMusica;

create table tbLogin(
	idLogin int primary key auto_increment
    ,dtCadastro date
    ,Usuario varchar (40)
    ,Senha varchar (30)
);

insert into tbLogin values (null, '2019-05-24', 'Manu Gomes', 'abc123');
insert into tbLogin values (null, '2019-11-06', 'Bruna Miranda', 'fgf54584');
insert into tbLogin values (null, '2019-05-24', 'Pedro Henrique', 'fgh456');
insert into tbLogin values (null, '2019-05-24', 'Gabriel Souza', 'zxc789');
insert into tbLogin values (null, '2019-05-24', 'Wesley Silva', 'abnm159');

show tables;