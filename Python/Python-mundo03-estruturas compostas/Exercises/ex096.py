def estilo(msg):
    print(msg)
    print('-' * 30)
def área(l, c):
    s = l * c
    print(f'A área de um terreno {l:.1f}x{c:.1f} é de {s:.1f}m².')
estilo('    Controle de Terrenos')
área(float(input('LARGURA (m): ')), float(input('COMPRIMENTO (m): ')))