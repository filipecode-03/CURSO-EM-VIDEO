print('=========== LOJAS GUANABARA ===========')
pc = float(input('Preço das compras: R$'))
print('FORMAS DE PAGAMENTO')
print('[ 1 ] à vista dinheiro/cheque')
print('[ 2 ] à vista cartão')
print('[ 3 ] 2x no cartão')
print('[ 4 ] 3x ou mais no cartão')
op = int(input('Qual é a opção? '))
if op == 1:
    pf = pc - (pc * (10 / 100))
    print(f'Sua compra de R${pc:.2} vai custar {pf:.2f}')
elif op == 2:
    pf = pc - (pc * (5 / 100))
    print(f'Sua compra de R${pc:.2} vai custar {pf:.2f}')
elif op == 3:
    print(f'Sua compra será de R${pc:.2f}')
elif op == 4:
    qparcelas = int(input('Quantas parcelas? '))
    pf = pc + (pc * (20 / 100))
    qmes = pf / qparcelas
    print(f'Sua compra será parcelada em {qparcelas}x de R${qmes:.2f} COM JUROS')
    print(f'Sua compra de R${pc:.2f} vai custar R${pf:.2f} no final.')