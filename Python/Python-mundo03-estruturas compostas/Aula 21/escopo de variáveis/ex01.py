def teste():
    x = 8
    print(f'Na função teste, n vale {n}')
    print(f'Na função teste, x vale {x}')
n = 2
print(f'No programa principal, n vale {n}')
teste()
print('No programa principal, x vale {x}') # o x não vai funcionar por que ele é uma variável local, ou seja uma variável que pertence ao def
