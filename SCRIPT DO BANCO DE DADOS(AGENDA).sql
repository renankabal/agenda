/*
BANCO: agenda
USUÁRIO: banco
SENHA: 123456
*/

--##########################################################
--CRIAÇÃO DA TABELA DE ESTADOS
CREATE TABLE estados (
	codestado serial primary key,
	estado varchar (255),
	uf varchar (2)
);
--##########################################################
--CRIAÇÃO DA TABELA DE BANDEIRAS
CREATE TABLE bandeiras (
        codbandeira SERIAL PRIMARY KEY,
        codestado INTEGER REFERENCES estados (codestado), 
        arquivo BYTEA
);
--##########################################################
--CRIAÇÃO DA TABELA DE CIDADES
CREATE TABLE cidades(
	codcidade serial primary key,
	cidade varchar(255),
	codestado integer references estados (codestado)
);
--##########################################################
--CRIAÇÃO DA TABELA DE GRUPOS
CREATE TABLE grupos(
	codgrupo serial primary key,
	grupo varchar (255)
);
--##########################################################
--CRIAÇÃO DA TABELA DE DISPOSITIVO
CREATE TABLE dispositivos (
	coddispositivo serial primary key,
	dispositivo varchar (255)
);
--##########################################################
--CRIAÇÃO DA TABELA DE PESSOAS
CREATE TABLE pessoas(
	codpessoa serial primary key,
	codgrupo integer references grupos (codgrupo),
	coddispositivo integer references dispositivos (coddispositivo),
	pessoa varchar (255),
	endereco varchar (255),
	numero_endereco varchar (255),
	codcidade integer references cidades (codcidade),
	telefone varchar (255),
	email varchar (255),
	datacadastro timestamp
);

--############################################################################################
-- INSERÇÃO DOS ESTADOS
INSERT INTO estados (estado) VALUES ('ACRE');
INSERT INTO estados (estado) VALUES ('ALAGOAS');
INSERT INTO estados (estado) VALUES ('AMAPÁ');
INSERT INTO estados (estado) VALUES ('AMAZONAS');
INSERT INTO estados (estado) VALUES ('TOCANTINS');
INSERT INTO estados (estado) VALUES ('SERGIPE');
INSERT INTO estados (estado) VALUES ('SÃO PAULO');
INSERT INTO estados (estado) VALUES ('SANTA CATARINA');
INSERT INTO estados (estado) VALUES ('RORAIMA');
INSERT INTO estados (estado) VALUES ('RONDONIA');
INSERT INTO estados (estado) VALUES ('RIO GRANDE DO SUL');
INSERT INTO estados (estado) VALUES ('RIO GRANDE DO NORTE');
INSERT INTO estados (estado) VALUES ('RIO DE JANEIRO');
INSERT INTO estados (estado) VALUES ('BAHIA');
INSERT INTO estados (estado) VALUES ('CEARÁ');
INSERT INTO estados (estado) VALUES ('ESPÍRITO SANTO');
INSERT INTO estados (estado) VALUES ('GOIÁS');
INSERT INTO estados (estado) VALUES ('MARANHÃO');
INSERT INTO estados (estado) VALUES ('MATO GROSSO');
INSERT INTO estados (estado) VALUES ('MATO GROSSO DO SUL');
INSERT INTO estados (estado) VALUES ('MINAS GERAIS');
INSERT INTO estados (estado) VALUES ('PARÁ');
INSERT INTO estados (estado) VALUES ('PARAÍBA');
INSERT INTO estados (estado) VALUES ('PARANÁ');
INSERT INTO estados (estado) VALUES ('PERNAMBUCO');
INSERT INTO estados (estado) VALUES ('PIAUÍ');
INSERT INTO estados (estado) VALUES ('DISTRITO FEDERAL');
--############################################################################################
-- INSERÇÃO DAS BANDEIRAS DOS ESTADOS
INSERT INTO tabela (imagem) VALUES (pg_escape_bytea(imagem.jpg)
INSERT INTO bandeiras (arquivo) VALUES (pg_escape_bytea('D:\www\agenda\imagens\bandeiras.jpg'));
--############################################################################################
-- INSERÇÃO DAS CIDADES
INSERT INTO cidades (codestado, cidade) VALUES (3,'OIAPOQUE');
INSERT INTO cidades (codestado, cidade) VALUES (3,'MACAPÁ');
INSERT INTO cidades (codestado, cidade) VALUES (3,'SERRA DO NAVIO');
INSERT INTO cidades (codestado, cidade) VALUES (3,'MAZAGÃO');
INSERT INTO cidades (codestado, cidade) VALUES (3,'SANTANA');
INSERT INTO cidades (codestado, cidade) VALUES (3,'LARANJAL DO JARI');
INSERT INTO cidades (codestado, cidade) VALUES (3,'CALÇOENE');
--############################################################################################
-- INSERÇÃO DOS GRUPOS
INSERT INTO grupos (grupo) VALUES ('FAMÍLIA');
INSERT INTO grupos (grupo) VALUES ('ESCOLA');
INSERT INTO grupos (grupo) VALUES ('AMIGOS');
INSERT INTO grupos (grupo) VALUES ('TRABALHO');
--############################################################################################
-- INSERÇÃO DOS DISPOSITIVOS
INSERT INTO dispositivos (dispositivo) VALUES ('CASA');
INSERT INTO dispositivos (dispositivo) VALUES ('CELULAR');
INSERT INTO dispositivos (dispositivo) VALUES ('FAX');
INSERT INTO dispositivos (dispositivo) VALUES ('COMERCIAL');
INSERT INTO dispositivos (dispositivo) VALUES ('PAGER');
INSERT INTO dispositivos (dispositivo) VALUES ('OUTROS');
--############################################################################################
-- INSERÇÃO DAS PESSOAS