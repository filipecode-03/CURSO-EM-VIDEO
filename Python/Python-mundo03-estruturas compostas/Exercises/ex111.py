from utilidadesCeV import moeda
valor = float(input('Digite o preço: R$'))
moeda.resumo(valor, 35, 22)

# digamos que está pasta do utilidadesCeV estivesse de outra maneira no seu vscode
# Ex: 📂ex111
#       📂utilidadesCeV
#         📂dado
#         📂moeda
#     🗄️teste.py
# o import você deveria usar desta maneira = from ex111.utilidadesCeV import moeda, dado