num = int(input('Digite um número inteiro: '))
print('Escolha uma das bases para conversão:')
print('[ 1 ] converter para BINÁRIO')
print('[ 2 ]converter para OCTAL')
print('[ 3 ] converter para HEXADECIMAL')
resp = int(input('Sua opção: '))
if resp == 1:
    print(f'{num} convertido para BINÁRIO é igual a {bin(num)[2:]}')
elif resp == 2:
    print(f'{num} convertido para OCTAL é igual a {oct(num)[2:]}')
elif resp == 3:
    print(f'{num} convertido para HEXADECIMAL é igual a {hex(num)[2:]}')
else:
    print('Opção invalida. Tente novamente')