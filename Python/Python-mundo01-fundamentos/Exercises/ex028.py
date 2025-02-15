from random import randint
from time import sleep
from colorama import Fore, Style
com = randint(0, 5)
print(Fore.YELLOW + '-=-' * 20 + Style.RESET_ALL)
print(Fore.BLUE + 'Vou pensar em um número entre 0 e 5. Tente adivinhar...')
print(Fore.YELLOW + '-=-' * 20 + Style.RESET_ALL)
jog = int(input('Em que número eu pensei? '))
print(Fore.BLUE + 'PROCESSANDO...' + Style.RESET_ALL)
sleep(3)
if jog == com:
    print(Fore.GREEN + 'PARABÉNS! Você conseguiu me vencer!' + Style.RESET_ALL)
else:
    print(Fore.RED + f'GANHEI! eu pensei no número {com} e não no {jog}!' + Style.RESET_ALL)