from random import randint
computador = randint(0, 10)
conterro = 0
acert = False
print('Sou seu computador...')
print('Acabei de pensar em um número entre 0 e 10.')
print('Será que você consegue adivinhar qual foi?')
while not acert:
    jogador = int(input('Qual é seu palpite? '))
    conterro = conterro + 1
    if jogador == computador:
        acert = True
    else:
        if jogador < computador:
            print('Mais... Tente mais uma vez.')
        elif jogador > computador:
            print('Menos... Tentr mais uma vez.')
print(f'Acertou com {conterro} tentativas. Parábens!')