from datetime import date
atual = date.today().year
nasc = int(input('Ano de Nascimento: '))
idade = atual - nasc
if idade <= 9:
    print(f'O atleta tem {idade} anos.')
    print('Classificação: MIRIM')
elif 14 >= idade > 9:
    print(f'O atleta tem {idade} anos.')
    print('Classificação: INFANTIL') 
elif 19 >= idade > 14:
    print(f'O atleta tem {idade} anos.')
    print('Classificação: JUNIOR')
elif 25 >= idade > 19:
    print(f'O atleta tem {idade} anos.')
    print('Classificação: SÊNIOR')
elif idade > 25:
    print(f'O atleta tem {idade} anos.')
    print('Classificação: MASTER')