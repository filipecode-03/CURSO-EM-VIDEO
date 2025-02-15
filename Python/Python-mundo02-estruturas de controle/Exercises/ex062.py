print('Gerador de PA')
print('-=' * 10)
p1 = int(input('Primeiro termo: '))
ra = int(input('Razão de PA: '))
cont = 1
total = 0
mais = 10
while mais != 0:
    total = total + mais
    while cont <= total:
        print(f'{p1} -> ', end='')
        p1 = p1 + ra
        cont = cont + 1
    print('pausa')
    mais = int(input('Quantos termos você quer mostrar a mais? ')) 
print(f'Progressão finalizada com {total} termos mostrados')