SELECT carga from cursos
GROUP BY carga;

SELECT carga, count(nome) from cursos
GROUP BY carga
HAVING COUNT(nome) > 3