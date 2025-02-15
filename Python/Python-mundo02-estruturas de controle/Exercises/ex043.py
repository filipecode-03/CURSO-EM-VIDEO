peso = float(input('Qual é seu peso? (Kg) '))
altura = float(input('Qual é sua altura? (m) '))
imc = peso / (altura * altura)
print(f'O IMC dessa pessoa é de {imc:.1f}')
if imc < 18.5:
    print('Você está ABAIXO DO PESO')
elif 25 >= imc > 18.5:
    print('PARABÉNS, você está na faixa de PESO NORMAL')
elif 30 >= imc > 25:
    print('Você está em SOBREPESO')
elif 40 >= imc > 30:
    print('Você está em OBESIDADE!')
elif imc > 40:
    print('Você está em OBESIDADE MÓRBIDA!')