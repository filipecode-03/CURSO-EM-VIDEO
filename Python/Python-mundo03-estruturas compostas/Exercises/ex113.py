from colorama import Fore, Style
def leiaInt(msg): 
    while True:
        try:
            n = int(input(msg))
        except (ValueError, TypeError):
            print(Fore.RED + 'ERRO: por favor, digite um número inteiro válido.' + Style.RESET_ALL)
        except (KeyboardInterrupt):
            print(Fore.RED + 'Usuário preferiu não digitar esse número.' + Style.RESET_ALL)
            return 0
        else:
            return n

def leiaFloat(msg):
    while True:
        try:
            n = float(input(msg))
        except (ValueError, TypeError):
            print(Fore.RED + 'ERRO: por favor, digite um número real válido.' + Style.RESET_ALL)
        except (KeyboardInterrupt):
            print(Fore.RED + 'Usuário preferiu não digitar esse número.' + Style.RESET_ALL)
            return 0
        else:
            return n

n1 = leiaInt('Digite um número Inteiro: ')
n2 = leiaFloat('Digite um Real: ')
print(f'O valor inteiro digitado foi {n1} e o real foi {n2}')