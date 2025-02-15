from colorama import Fore, Style
def leiaDinheiro(msg):
    valido = False
    while not valido:
        entrada = str(input(msg)).replace(',', '.').strip()
        if entrada.isalpha() or entrada == '':
            print(Fore.RED + f'ERRO: \"{entrada}\" é um preço inválido!' + Style.RESET_ALL)
        else:
            valido = True
            return float(entrada)