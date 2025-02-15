def aumentar(num = 0, taxa = 0): 
    aumento = num * (taxa / 100)
    novo_valor = num + aumento
    return novo_valor

def diminuir(num = 0, taxa = 0):
    desconto = num * (taxa / 100)
    novo_valor = num - desconto
    return novo_valor
 
def dobro(num = 0):
    return num * 2

def metade(num = 0):
    return num / 2

def moeda(num = 0, moeda = 'R$'):
    return f'{moeda}{num:>8.2f}'.replace('.', ',')