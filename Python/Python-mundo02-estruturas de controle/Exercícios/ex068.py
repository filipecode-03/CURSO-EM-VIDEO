from random import randint

cont = 0
print('=-=' * 15)
print('VAMOS JOGAR PAR OU ÍMPAR')
print('=-=' * 15)

while True:
    jog = int(input('Diga um valor: '))
    op = str(input('Par ou Ímpar? [P/I] ')).upper()
    
    numcomp = randint(1, 10)
    s = jog + numcomp
    
    print('-' * 15)
    if op == 'P':  
        if s % 2 == 0:
            print(f'Você jogou {jog} e o computador {numcomp}. Total de {s} deu PAR')
            print('-' * 30)
            print('Você VENCEU!')
            print('Vamos jogar novamente...')
            print('=-=' * 30)
            cont += 1
        else:
            print(f'Você jogou {jog} e o computador {numcomp}. Total de {s} deu ÍMPAR')
            print('-' * 30)
            print('Você PERDEU!')
            break
    elif op == 'I': 
        if s % 2 != 0:
            print(f'Você jogou {jog} e o computador {numcomp}. Total de {s} deu ÍMPAR')
            print('-' * 30)
            print('Você VENCEU!')
            print('Vamos jogar novamente...')
            print('=-=' * 30)
            cont += 1
        else:
            print(f'Você jogou {jog} e o computador {numcomp}. Total de {s} deu PAR')
            print('-' * 30)
            print('Você PERDEU!')
            break
print('=-=' * 15)
print(f'GAME OVER! Você venceu {cont} vezes.')