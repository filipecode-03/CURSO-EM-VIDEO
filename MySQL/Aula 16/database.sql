

CREATE Table gafanhoto_assiste_curso (
    id int not null AUTO_INCREMENT,
    data date,
    idgafanhoto int,
    idcurso int,
    PRIMARY key (id),
    Foreign Key (idgafanhoto) REFERENCES gafanhotos(id),
    Foreign Key (idcurso) REFERENCES cursos(idcurso)
) DEFAULT CHARSET = utf8;

INSERT into gafanhoto_assiste_curso VALUES
(DEFAULT, '2014-03-01', '1', '2');

SELECT * from gafanhoto_assiste_curso;