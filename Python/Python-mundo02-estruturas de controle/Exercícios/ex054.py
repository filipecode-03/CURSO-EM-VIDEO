from datetime import date
anoatual = date.today().year
totmenor = 0
totmaior = 0
for c in range(1, 8):
    nasc = int(input(f'Em que ano a {c}ª pessoa nasceu? '))
    idade = anoatual - nasc
    if idade > 18:
        totmaior = totmaior + 1
    else:
        totmenor = totmenor + 1
print(f'Ao todo tivemos {totmaior} pessoas maiores de idade') 
print(f'E também tivemos {totmenor} pessoas menores de idade')