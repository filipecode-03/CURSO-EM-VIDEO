cont = 0
soma = 0
num = ''
while num != '999':
    num = input('Digite um número [999 para parar]: ')
    if num != '999':
        soma += int(num)
        cont = cont + 1
print(f'Você digitou {cont} números e a soma entre eles foi {soma}')