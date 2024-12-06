casa = float(input("Valor da casa: R$"))
sal = float(input('Salário do comprador: R$'))
anosf = int(input('Quantos anos de financiamento? '))
prest = casa / (anosf * 12)
mini = sal * 30 / 100
print(f'Para pagar uma casa de R${casa:.2f} em {anosf} anos a prestação será de R${prest:.2f}')
if prest <= mini:
    print('Empréstimo pode ser CONCEDIDO!')
else:
    print('Empréstimo NEGADO!') 