from random import randint
from time import sleep
opcoes = ('Pedra', 'Papel', 'Tesoura')
com = randint(0, 2)
print('Suas opções: ')
print('[ 0 ] PEDRA')
print('[ 1 ] PAPEL')
print('[ 2 ] TESOURA')
mj = int(input('Qual é a sua jogada? '))
sleep(1)
print('JO')
sleep(1)
print('KEN')
sleep(1)
print('PO!!!')
print('-=-' * 11)
print(f'Computador jogou {opcoes[com]}')
print(f'Jogador jogou {opcoes[mj]}')
print('-=-' * 11)
if com == 0: # PEDRA
    if mj == 0:
        print('EMPATE')
    elif mj == 1:
        print('JOGADOR VENCE')
    elif mj == 2:
        print('COMPUTADOR VENCE')
elif com == 1: # PAPEL
    if mj == 0:
        print('COMPUTADOR VENCE')
    elif mj == 1:
        print('EMPATE')
    elif mj == 2:
        print('JOGADOR VENCE')
elif com == 2: # TESOURA
    if mj == 0: 
        print('JOGADOR VENCE')
    elif mj == 1:
        print('COMPUTADOR VENCE')
    elif mj == 2: 
        print('EMPATE')