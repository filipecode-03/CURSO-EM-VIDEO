sidade = 0
nome_maior_idade = ''
maior_idade = 0
totalf = 0
for c in range(1, 5):
    print(f'----- {c}ª PESSOA -----')
    nome = str(input('Nome: '))
    idade = int(input('Idade: '))
    sexo = str(input('Sexo [M/F]: ')).upper
    sidade = sidade + idade
    media = sidade / c
    if sexo == 'M':
      if idade > maior_idade:
         maior_idade = idade
         nome_maior_idade = nome
    if sexo == 'F' and idade < 20:
        totalf = totalf + 1
print(f'A média de idade do grupo é de {media:.1f} anos')
print(f'O homem mais velho tem {maior_idade} anos e se chama {nome_maior_idade}')
print(f'Ao todo são {totalf} mulheres com menos de 20 anos')