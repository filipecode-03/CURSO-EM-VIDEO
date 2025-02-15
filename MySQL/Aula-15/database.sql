

SELECT * from gafanhotos

alter TABLE gafanhotos
add column cursopreferido int;

ALTER Table gafanhotos
add FOREIGN key (cursopreferido)
REFERENCES cursos(idcurso);

update gafanhotos 
set cursopreferido = '6'
where id = '1';