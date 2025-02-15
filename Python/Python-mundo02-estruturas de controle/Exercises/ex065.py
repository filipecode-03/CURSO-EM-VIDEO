op = ''
cont = 0
soma = 0
maior = 0
menor = 0
media = 0
while op != 'N':
    num = int(input('Digite um número: '))
    soma += num
    cont += 1
    if cont == 1:
        maior = menor = num
    else:
        if num > maior:
            maior = num
        if num < menor:
            menor = num
    op = str(input('Quer continuar? [S/N] ')).upper()
media = soma / cont
print(f'Você digitou {cont} números e a média foi {media:.2f}')
print(f'O maior valor foi {maior} e o menor foi {menor}.')