create database bdAppointment;
use bdAppointment;

create table tbLogin(
idLogin int primary key auto_increment
,dtCadastro date
,Usuario varchar (40)
,Senha varchar (40)
);

select * from tbLogin;

insert into tbLogin values(
     null
   ,'2019-04-03'
   ,'LuxArcadia'
   ,'naoseiasenha'
);
insert into tbLogin values(
     null
   ,'2019-04-03' 
   ,'Emerino'
   ,'naoteinteressa'
);
insert into tbLogin values(
     null
   ,'2019-04-03'
   ,'Lugin'
   ,'naotenhoideia'
);
insert into tbLogin values(
     null
   ,'2019-04-03'
   ,'Canudinho123'
   ,'canudinhocomvermelho'
);
insert into tbLogin values(
     null
   ,'2019-04-03'
   ,'BlackHeart'
   ,'whiteHeart'
);