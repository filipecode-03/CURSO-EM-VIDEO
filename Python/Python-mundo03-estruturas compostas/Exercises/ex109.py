import ex109moeda
valor = float(input('Digite o preço: '))
print(f'A metade de {ex109moeda.moeda(valor)} é {ex109moeda.metade(valor, True)}')
print(f'O dobro de {ex109moeda.moeda(valor)} é {ex109moeda.dobro(valor, True)}')
print(f'Aumentando 10%, temos {ex109moeda.aumentar(valor, 10, True)}')
print(f'Reduzindo 13%, temos {ex109moeda.diminuir(valor, 13, True)}')