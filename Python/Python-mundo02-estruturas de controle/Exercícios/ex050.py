s = 0
for c in range(1, 7):
    nump = int(input(f'Digite o {c} valor: '))
    if nump % 2 == 0:
        s = s + nump
print(f'A soma de todos os valores pares é {s}')