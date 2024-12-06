da = int(input('Qauntos dias alugados? '))
kmRodados = int(input('Quantos Km rodados? '))
vt = (da * 60) + (kmRodados * 0.15)
print(f'O total a pagar é de R${vt:.2f}')