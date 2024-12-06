
SELECT altura, COUNT(*) from gafanhotos
where peso > 100
GROUP BY altura
HAVING altura > (SELECT avg(altura) from gafanhotos)