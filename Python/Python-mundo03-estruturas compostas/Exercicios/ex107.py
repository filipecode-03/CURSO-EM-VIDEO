import ex107moeda
valor = float(input('Digite o preço: '))
print(f'A metade de R${valor:.1f} é R${ex107moeda.metade(valor)}')
print(f'O dobro de R${valor:.1f} é R${ex107moeda.dobro(valor)}')
print(f'Aumentando 10%, temos R${ex107moeda.aumentar(valor, 10)}')