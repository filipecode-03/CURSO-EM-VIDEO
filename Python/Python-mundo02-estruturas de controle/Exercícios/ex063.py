print('-' * 10)
print('Sequência de Fibonacci')
print('-' * 10)
term = int(input('Quantos termos você quer mostrar? '))
a, b = 0, 1
cont = 1
print('~' * 30)
while cont <= term:
    print(f'{a} -> ', end='')
    a, b = b, a + b
    cont = cont + 1
print('FIM')
print('~' * 30)