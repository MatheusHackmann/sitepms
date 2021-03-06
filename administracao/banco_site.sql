create database site_pms
default character set utf8
default collate utf8_general_ci;

-- drop database site_pms;

use site_pms;

create table noticias(
id int auto_increment primary key, 
titulo varchar(300),
subtitulo varchar(500),
`data` date,
conteudo text -- text

) default charset utf8;
select * from noticias order by id desc;
alter table noticias modify conteudo varchar(4);

alter table noticias modify conteudo text;

desc noticias;

drop table noticias;

create table imagem_noticia( -- imagem_noticia
id int,
nome varchar(100),
pasta varchar(100),
FOREIGN KEY (id) references noticias(id) on delete cascade

)default charset utf8;

drop table imagem_noticia;

rename table imagem to imagem_noticia;

insert into noticias(titulo, subtitulo,  `data`, conteudo) values ('Beybe beybe do biruleibe leeibe beybe?', 'Ah vai te tomanucu',curdate(), 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo, iure neque. Laborum tenetur tempora pariatur iste iure, ipsa quis quam consequuntur voluptas sint quasi sit nisi eveniet id, odio recusandae quaerat voluptatum velit necessitatibus repellat veniam! Quos rerum sapiente magni excepturi, cupiditate est blanditiis eum earum illum nisi sit aliquam ea iste possimus. Optio, explicabo, enim. Rerum dignissimos enim optio distinctio aliquam, quas! Eos, nobis laboriosam. Ab ducimus nobis soluta libero dicta illum saepe laborum eum, esse laudantium, consequatur eos itaque architecto aperiam corporis deserunt, voluptatibus asperiores distinctio dolores assumenda aliquam illo culpa. Aliquid pariatur odio asperiores molestiae perferendis temporibus cumque esse laudantium expedita, consequatur voluptatibus mollitia in ');

-- insert into imagem(id, nome, pasta) values('', '', '');

truncate table noticias; 

select * from noticias order by id desc; 

select * from noticias join imagem_noticia
on noticias.id = imagem_noticia.id
;



create table eventos(

id int auto_increment primary key,
nome varchar(300),
conteudo varchar(5000),
`data` date,
hora time,
endereco varchar(100), -- RUA NUMERO - BAIRRO 96
local_referencia varchar(200),
latitude long,
longitude long

) default charset utf8;

drop table eventos;


create table imagem_evento( -- imagem_noticia
id int,
nome varchar(100),
pasta varchar(100),
FOREIGN KEY (id) references eventos(id) ON delete cascade -- on delete cascade, quando deletar de ma tabela deleta da outra com relação

)default charset utf8;

drop table imagem_evento;

select * from noticias;

select * from eventos;
select * from imagem_evento;																							

select * from eventos as e join imagem_evento as im	
on e.id = im.id;

DELETE FROM `site_pms`.`eventos` 																																																																																																																																																																																																																																																																																								
WHERE `id`='5';
select * from imagem_noticia where id= 47;

DELETE noticias,imagem_noticia FROM noticias INNER JOIN imagem_noticia WHERE noticias.id=8 AND imagem_noticia.id=8;

