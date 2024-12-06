
SELECT min(peso) from gafanhotos
where nacionalidade != 'Brasil'
and sexo = 'f'
and nascimento BETWEEN '1990-01-01' and '2000-12-31';