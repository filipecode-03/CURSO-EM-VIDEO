cont = ('zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez', 'onze', 'doze', 'treze', 'catorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove', 'vinte')
while True:
    num = int(input('Digite um número entre 0 e 20: '))
    if 0 <= num <= 20:
        print(f'Você digitou o número {cont[num]}')        
    else:
        print('Tente novamente. ', end='')
    resp = str(input('Deseja ver outro número? [S/N] ')).strip().upper()
    if resp != "S":
        break
    else:
        print('Certo, ', end='')
print('Muito obg, até a proxima!')