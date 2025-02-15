def linha():
    print('-' * 30)
def ficha(nome='', gols=0):
    print(f'O jogador {nome} fez {gols} gol(s) no compeonato.')
linha()
n = input('Nome do jogador: ')
g = input('Número de Gols: ')
if g.isnumeric():
    g = int(g)
else:
    g = 0
if n == '':
    ficha(gols=g)
else:
    ficha(n, g)