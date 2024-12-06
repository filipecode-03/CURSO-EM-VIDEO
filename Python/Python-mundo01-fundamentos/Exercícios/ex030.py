from colorama import Fore, Style
num = int(input(Fore.BLUE + 'Me diga um número qualquer: ' + Style.RESET_ALL))
re = num % 2
if re == 0:
    print(f'O número {num} é \033[34mPAR')
else:
    print(f'O número {num} é \033[34mIMP')