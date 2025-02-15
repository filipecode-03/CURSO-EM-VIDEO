
SELECT nacionalidade, COUNT(*) FROM gafanhotos
where nacionalidade != 'Brasil'
GROUP BY nacionalidade
HAVING COUNT(*) > 3;