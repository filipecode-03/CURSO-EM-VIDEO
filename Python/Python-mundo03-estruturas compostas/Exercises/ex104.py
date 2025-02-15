from colorama import Fore, Style
def leiaInt(msg):
    ok = False
    valor = 0
    while True:
        n = str(input(msg))
        if n.isnumeric():
            valor = int(n)
            ok = True
        else:
            print(Fore.RED + 'ERRO! Digite um número inteiro válido.' + Style.RESET_ALL)
        if ok:
            break
    return valor
n = leiaInt('Digite um número: ')
print(f'Você acabou de digitar o número {n}')