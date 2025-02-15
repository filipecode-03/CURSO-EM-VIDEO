
CREATE Table if not exists cursos (
    nome VARCHAR(30) NOT NULL UNIQUE,
    descricao text,
    carga int UNSIGNED,
    totaulas int UNSIGNED,
    ano YEAR DEFAULT '2016'
) DEFAULT charset = utf8;

alter Table cursos
ADD COLUMN idcursos int first;

alter Table cursos
ADD PRIMARY key (idcursos);

