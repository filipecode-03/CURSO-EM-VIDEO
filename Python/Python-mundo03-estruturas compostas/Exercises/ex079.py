valores = []
while True:
    valor = (int(input('Digite um valor: ')))
    if valor not in valores:
        valores.append(valor)
        print('Valor adicionado com sucesso...')
    else:
        print('Valor duplicado! Não vou adicionar...')
    resp = str(input('Quer continuar? [S/N] ')).upper().strip()
    if resp != 'S':
        break
print("-=" * 50)
valores.sort()
print(f'Você digitou os valores {valores}')