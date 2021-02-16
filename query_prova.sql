create DATABASE prova;
use prova;

create table cliente (
id int unsigned auto_increment primary key,
cnpj varchar(18) not null,
razaosocial varchar(80) not null,
endereco varchar(80) not null,
telefone varchar(20) default null,
email varchar(80) default null,
datacadastro datetime
);

create table produtos_cliente (
id int unsigned auto_increment primary key,
produto varchar(18),
cliente_id int not null references cliente(clienteID)
);

alter table produtos_cliente ADD constraint fk_cliente_id foreign key(id) references cliente(id);

select * from cliente;
select * from produtos_cliente;
SELECT Auto_increment FROM cliente WHERE id='id';
SELECT * FROM  cliente WHERE id = id;

INSERT INTO cliente (cnpj, razaosocial, endereco, telefone, email, datacadastro) VALUES ('99999', 'Bar do Juca',
 'Rua 0', '1544554', 'nao tem ', '2020-10-19 14:34:00');



INSERT INTO tb_usuarios (idusuario, dessenha) VALUES ('root', '123456');