dicionario = {}
dicionario['nome'] = str(input('Nome: '))
dicionario['média'] = float(input(f'Média de {dicionario['nome']}: '))
print('-=' * 30)
print(f'{"":>3}- nome é igual a {dicionario['nome']}')
print(f'{"":>3}- média é igual a {dicionario['média']}')
print(f'{"":>3}- situação é igual a ', end='')
if 7 > dicionario['média'] > 5:
    print('Recuperação')
elif 5 > dicionario['média']:
    print('Reprovado')
elif dicionario['média'] >= 7:
    print('Aprovado')