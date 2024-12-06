
SELECT * from gafanhotos g
join gafanhoto_assiste_curso a
on g.id = a.idgafanhoto;

SELECT g.nome, c.nome from gafanhotos g
join gafanhoto_assiste_curso a
on g.id = a.idgafanhoto
join cursos c
on c.idcurso = a.idcurso
ORDER BY g.nome;