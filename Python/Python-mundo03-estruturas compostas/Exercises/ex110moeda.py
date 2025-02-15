def aumentar(num=0, taxa=0, formato=False): 
    aumento = num * (taxa / 100)
    novo_valor = num + aumento
    return novo_valor if not formato else moeda(novo_valor)

def diminuir(num=0, taxa=0, formato=False):
    desconto = num * (taxa / 100)
    novo_valor = num - desconto
    return novo_valor if not formato else moeda(novo_valor)
 
def dobro(num=0, formato=False):
    return (num * 2) if not formato else moeda(num * 2)

def metade(num=0, formato=False):
    return (num / 2) if not formato else moeda(num / 2)

def moeda(num=0, moeda='R$'):
    return f'{moeda}{num:.2f}'.replace('.', ',')

def resumo(num=0, taxa=10, taxar=5):
    print('-' * 30)
    print('RESUMO DO VALOR'.center(30))
    print('-' * 30)
    print(f'Preço analisado: {moeda(num)}')
    print(f'Dobro do preço: {dobro(num, True)}') 
    print(f'Metade do preço: {metade(num, True)}')  
    print(f'{taxa}% de aumento: {aumentar(num, taxa, True)}')
    print(f'{taxar}% de redução: {diminuir(num, taxar, True)}')
    print('-' * 30)