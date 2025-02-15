print('=' * 30)
print('     BANCO CEV       ')
print('=' * 30)
valor = int(input('Que valor vocÊ quer sacar? R$'))
total = valor
cedulas = 50
totced = 0
while True:
    if total >= cedulas:
        total -= cedulas
        totced += 1
    else:
        if totced > 0:
            print(f'total de {totced} células de R${cedulas}')
        if cedulas == 50:
            cedulas = 20
        elif cedulas == 20:
            cedulas = 10
        elif cedulas == 10:
            cedulas = 1
        totced = 0
        if total == 0:
            break
print('=' * 30)
print(f'Volte smepre ao BANCO CEV! Tenha um bom dia!')