from random import randint
from time import sleep
números = []
def sorteia(lista):
    print(f'Sorteando 5 valores da lista: ', end='')
    for cont in range(0, 5):
        n = randint(1, 10)
        lista.append(n)
        print(f'{n} ', end='', flush=True)
        sleep(0.3)
    print('PRONTO!')
def somaPar(numpar):
    s = 0
    for cont in numpar:
        if cont % 2 == 0:
            s += cont
    print(f'Somando os valores pares de {numpar}, temos {s}') 
sorteia(números)
somaPar(números)