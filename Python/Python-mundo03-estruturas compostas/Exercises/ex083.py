contabert = 0
contfeche = 0
ex = str(input('Digite a expressão: '))
for char in ex:
    if char == '(':
        contabert += 1 
    elif char == ')':
        contfeche += 1 
if contabert == contfeche:
    print('Sua expressão está válida!')
else:
    print('Sua expressão está errada!')