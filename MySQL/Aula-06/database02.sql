DESC gafanhotos;

ALTER Table pessoas 
drop COLUMN profissao;

alter TABLE pessoas
ADD COLUMN profissao VARCHAR(10) after nome; 

ALTER TABLE pessoas
add COLUMN codigo int first;

alter Table pessoas
MODIFY COLUMN profissao VARCHAR(20) not null DEFAULT '';

alter table pessoas 
CHANGE COLUMN profissao prof VARCHAR(20);

ALTER Table pessoas
RENAME to gafanhotos;