SELECT nome, ano from cursos
where ano BETWEEN 2014 and 2016
ORDER BY ano DESC, nome asc;

SELECT idcurso, ano from cursos
where ano in (2014, 2015, 2018)
ORDER BY nome;

SELECT * from cursos
WHERE carga > 35 and totaulas < 30
ORDER BY nome;