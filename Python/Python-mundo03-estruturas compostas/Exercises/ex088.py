from random import randint
print('-' * 30)
print('     JOGA NA MEGA SENA       ')
print('-' * 30)
num = int(input('Quantos jogos você quer que eu sorteie? '))
print('-=' * 3, f'   SORTEANDO {num} JOGOS  ', '-=' * 3)
for cont in range(1, num+1):
    numsort = []
    for ns in range(6):
        numsort.append(randint(1, 60))
    print(f'Jogo {cont}: {numsort}')
print('-=' * 5, '< BOA SORTE! >', '-=' * 5)