CREATE TABLE tbl_lista_produtos (
   id int PRIMARY KEY NOT NULL,
   nome varchar(35) NOT NULL,
   descricao varchar(125) NOT NULL,
   preco double NOT NULL,
   id_categoria int NOT NULL
)
ALTER TABLE tbl_lista_produtos
  ADD FOREIGN KEY (id_categoria) REFERENCES tbl_categoria(id));

INSERT INTO tbl_lista_produtos VALUES (1,'Picanha',
'Carne nobre', 85.99, 1);
INSERT INTO tbl_lista_produtos VALUES (2,'Contra Filé',
'Carne de primeira', 49.99, 1);
INSERT INTO tbl_lista_produtos VALUES (3, 'Coca Cola 2L',
'Refrigerante de Cola', 8.99, 2);
INSERT INTO tbl_lista_produtos VALUES (4, 'Suco de Uva 1L Del Valle',
'Suco da autentica fruta', 6.99, 2);