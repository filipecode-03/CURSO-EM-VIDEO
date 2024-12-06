sf = float(input('Qual é o salário do funcionário? R$'))
if sf >= 1250.00:
    ss = sf * (1 + 0.10)
    print(f'Quem ganhava R${sf:.2f} passa a ganhar R${ss:.2f} agora.')
else:
    si = sf * (1 + 0.15)
    print(f'Quem ganhava R${sf:.2f} passa a ganhar R${si} agora.')