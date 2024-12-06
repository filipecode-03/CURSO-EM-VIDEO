def aumentar(num, taxa): 
    aumento = num * (taxa / 100)
    novo_valor = num + aumento
    return novo_valor

def diminuir(num, taxa):
    desconto = num * (taxa / 100)
    novo_valor = num - desconto
    return novo_valor
 
def dobro(num):
    return num * 2

def metade(num):
    return num / 2