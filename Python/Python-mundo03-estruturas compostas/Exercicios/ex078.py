valores = []
maior = 0
menor = 0
for cont in range(0, 5):
    valores.append(int(input(f'Digite um valor para a Posição {cont}: ')))
    if cont == 0:
        maior = menor = valores[cont]
    else:
        if valores[cont] > maior:
            maior = valores[cont]
        if valores[cont] < menor:
            menor = valores[cont]
print('=-' * 25)
print(f'Você digitou os valores {valores}')
print(f'O maior valor digitado foi {maior} nas posições ', end='')
for p, v in enumerate(valores):
    if v == maior:
        print(f'{p}... ', end='')
print(f'\nO menor valor digitado foi {menor} nas posições ', end='')
for p, v in enumerate(valores):
    if v == menor:
        print(f'{p}... ', end='')