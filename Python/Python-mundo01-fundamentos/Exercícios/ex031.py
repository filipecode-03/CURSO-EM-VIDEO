dv = float(input('Qual é a distância da sua viagem? '))
if dv <= 200:
    print(f'Você está prestes a começar uma viagem de {dv:.1f}Km.')
    pp = dv * 0.50
    print(f'E o preço da sua passagem será de R${pp:.2f}')
else:
    print(f'Você está prestes a começar uma viagem de {dv:.1f}Km.')
    pp = dv * 0.45
    print(f'E o preço da sua passagem será de R${pp:.2f}')
