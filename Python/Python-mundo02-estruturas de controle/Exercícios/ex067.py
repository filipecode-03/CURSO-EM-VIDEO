s = 0
cont = 0
while True:
    tabu = int(input('Quer ver a tabuada de qual valor? '))
    print('-' * 30)
    if tabu < -1:
        break
    for cont in range(1, 11):
        s = tabu * cont
        print(f'{tabu} x {cont} = {s}')
    print('-' * 30)
print('PROGRAMA TABUADA ENCERRADO. Volte sempre!')