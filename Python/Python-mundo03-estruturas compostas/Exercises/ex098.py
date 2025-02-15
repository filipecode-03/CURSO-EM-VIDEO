from time import sleep
def linha():
    print('-=' * 30)
def cont(i, f, p):
    if p < 0:
        p *= -1
    if p == 0:
        p = 1
    linha()
    print(f'Contagem de {i} até {f} de {p} em {p}')
    sleep(2.5)
    if i < f:
        cont = i
        while cont <= f:
            print(f'{cont} ', end='', flush=True)
            sleep(0.5)
            cont += p
        print('FIM!')
    else:
        cont = i
        while cont >= f:
            print(f'{cont} ', end='', flush=True)
            sleep(0.5)
            cont -= p
        print('FIM!')    
cont(1, 10, 1)
cont(10, 0, 2)
linha()
print('Agora é sua vez de personalizar a contagem!')
ini = int(input('Inicio: ')) 
fim = int(input('Fim: '))
pas = int(input('Passo: '))
cont(ini, fim, pas)