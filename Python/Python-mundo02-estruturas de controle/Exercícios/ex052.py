from colorama import Fore, Style
num = int(input('Digite um número: '))
tot = 0
for c in range(1, num + 1):
    if num % c == 0:
        print(Fore.YELLOW + f'{c}' + Style.RESET_ALL, end=' ')
        tot = tot + 1
    else:
        print(Fore.RED + f'{c}' + Style.RESET_ALL, end=' ')
print(f'\nO número {num} foi divisível {tot} vezes')
if tot == 2:
    print(f'O número {num} é PRIMO')
else: 
    print(f'O número {num} NÃO É PRIMO')