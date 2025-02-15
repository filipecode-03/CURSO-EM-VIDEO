n1 = float(input('Primeira nota: '))
n2 = float(input('Segunda nota: '))
m = (n1 + n2) / 2
if m >= 7:
    print(f'Tirando {n1:.1f} e {n2:.1f}, a média do aluno é {m:.1f}')
    print('O aluno está APROVADO.')
elif 7 > m >= 5:
    print(f'Tirando {n1:.1f} e {n2:.1f}, a média do aluno é {m:.1f}')
    print(f'O aluno está em RECUPERAÇÃO.')
elif m < 5:
    print(f'Tirando {n1:.1f} e {n2:.1f}, a média do aluno é {m:.1f}')
    print('O aluno está REPROVADO.')