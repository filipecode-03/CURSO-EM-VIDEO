
SELECT sexo, COUNT(*) from gafanhotos
WHERE nascimento > '2005-01-01'
GROUP BY sexo;