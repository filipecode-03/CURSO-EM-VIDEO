import ex108moeda
valor = float(input('Digite o preço: '))
print(f'A metade de {ex108moeda.moeda(valor)} é {ex108moeda.moeda(ex108moeda.metade(valor))}')
print(f'O dobro de {ex108moeda.moeda(valor)} é {ex108moeda.moeda(ex108moeda.dobro(valor))}')
print(f'Aumentando 10%, temos {ex108moeda.moeda(ex108moeda.aumentar(valor, 10))}')