valores = []
par = []
impar = []
while True:
    n = int(input('Digite um número: '))
    valores.append(n)
    if n % 2 == 0:
        par.append(n)
    else:
        impar.append(n)
    resp = str(input('Quer continuar? [S/N] ')).strip().upper()
    if resp != 'S':
        break
print('-=' * 30)
print(f'A lista completa é {valores}')
print(f'A lista de pares é {par}')
print(f'A lista de ímpares é {impar}')