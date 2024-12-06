select COUNT(*) from cursos;

SELECT count(*) from cursos
where carga > 40;

SELECT max(*) from cursos;

SELECT max(totaulas) from cursos
where ano = '2016';

SELECT min(totaulas) from cursos
where ano = '2016';

SELECT sum(totaulas) from cursos
WHERE ano = '2016';

SELECT avg(totaulas) from cursos
WHERE ano = '2016';