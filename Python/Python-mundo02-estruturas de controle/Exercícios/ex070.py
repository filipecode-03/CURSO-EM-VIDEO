s = 0
cont = 0
contmil = 0
menor = 0
menor_produto = ''
print('-' * 20)
print('     LOJA SUPER BARATÃO      ')
print('-' * 20)
while True:
    produto = str(input('Nome do Produto: '))
    preço = float(input('Preço: R$'))
    cont += 1
    s += preço
    if preço > 1000:
        contmil += 1
    if cont == 1 or preço < menor:
        menor = preço 
        menor_produto = produto
    op = str(input('Quer continuar? [S/N] ')).upper()
    if op == 'N':
        break
print('-------- FIM DO PROGRAMA --------')
print(f'O total de compra foi R${s:.2f}')
print(f'Temos {contmil} produtos custando mais de R$1000.00')
print(f'O produto mais barato foi {menor_produto} que custa R${menor:.2f}')