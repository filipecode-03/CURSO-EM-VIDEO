def aumentar(num = 0, taxa = 0, formato=False): 
    aumento = num * (taxa / 100)
    novo_valor = num + aumento
    return novo_valor if formato == False else moeda(novo_valor)

def diminuir(num = 0, taxa = 0, formato=False):
    desconto = num * (taxa / 100)
    novo_valor = num - desconto
    return novo_valor if formato == False else moeda(novo_valor)
 
def dobro(num = 0, formato=False):
    return num * 2 if formato == False else moeda(num)

def metade(num = 0, formato=False):
    return num / 2 if formato == False else moeda(num)

def moeda(num = 0, moeda = 'R$'):
    return f'{moeda}{num:>8.2f}'.replace('.', ',')