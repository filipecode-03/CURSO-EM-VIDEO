SELECT nome, carga, ano from cursos 

SELECT * from cursos
where ano = '2016'
ORDER BY nome;

SELECT ano, descricao from cursos
WHERE ano <= '2015'
ORDER BY nome;

SELECT ano, descricao from cursos
WHERE ano <= '2015'
ORDER BY nome, ano;

SELECT ano, descricao from cursos
WHERE ano < '2015'
ORDER BY nome, ano;

SELECT ano, descricao from cursos
WHERE ano > '2015'
ORDER BY nome, ano;

SELECT ano, descricao from cursos
WHERE ano >= '2015'
ORDER BY nome, ano;

SELECT ano, descricao from cursos
WHERE ano != '2015'
ORDER BY nome, ano;