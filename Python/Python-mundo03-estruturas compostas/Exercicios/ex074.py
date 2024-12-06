from random import randint
comp = (randint(1, 10), randint(1, 10), randint(1, 10), randint(1, 10), randint(1, 10))
print(f'Os valores sorteados foram: ', end='')
for n in comp:
    print(f'{n} ', end='')
print(f'\no maior valor sorteado foi: {max(comp)}')
print(f'O menor valor sorteado foi: {min(comp)}')