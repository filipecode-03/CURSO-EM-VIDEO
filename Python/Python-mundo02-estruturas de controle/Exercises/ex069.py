cont18 = 0
contmen = 0
contmulh = 0
while True:
    print('-' * 15)
    print('     CADASTRE UMA PESSOA     ')
    print('-' * 15)
    idade = int(input('Idade: '))
    if idade >= 18:
        cont18 += 1
    sexo = str(input('Sexo: [M/F] ')).upper()
    if sexo == 'M':
        contmen += 1
    elif sexo == 'F':
        if idade < 20:
            contmulh += 1
    print('-' * 15)
    op = str(input('Quer continuar? [S/N] ')).upper()
    if op == 'N':
        break
print(f'Total de pessoas com mais de 18 anos: {cont18}')
print(f'Ao todo temos {contmen} homens cadastrados')
print(f'E temos {contmulh} mulheres com menos de 20 anos')