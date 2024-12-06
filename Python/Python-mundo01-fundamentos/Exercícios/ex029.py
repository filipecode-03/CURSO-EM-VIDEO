from colorama import Fore, Style
vel = int(input('Qual é a velocidade atual do carro? '))
mul = (vel-80) * 7.00
if vel <= 80:
    print(Fore.GREEN + 'Tenha um bom dia! Dirija com segurança!' + Style.RESET_ALL)
else:
    print(Fore.RED + f'MULTADO! Você excedeu o limite permitido que é de 80km/h\nVocê deve pagar uma multa de \033[33mR${mul}!' + Style.RESET_ALL)
    print(Fore.GREEN + 'Tenha um bom dia! Dirija com segurança!' + Style.RESET_ALL)