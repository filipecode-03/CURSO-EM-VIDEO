print('Gerador de PA')
print('-=' * 10)
p1 = int(input('Primeiro termo: '))
ra = int(input('Razão de PA: '))
cont = 1
while cont <= 10:
    print(f'{p1} -> ', end='')
    p1 = p1 + ra
    cont = cont + 1
print('FIM') 