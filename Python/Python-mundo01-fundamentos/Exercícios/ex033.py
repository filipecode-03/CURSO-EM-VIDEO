pv = int(input('Primeiro valor: '))
sv = int(input('Segundo valor: '))
tv = int(input('Terceiro valor: '))
menor = pv
maior = pv
if sv<pv and sv<tv:
    menor = sv
if tv<pv and tv<sv:
    menor = tv
if sv>pv and sv>tv:
    maior = sv
if tv>pv and tv>sv:
    maior = tv
print(f'O menor valor digitado foi {menor}')
print(f'O maior valor digitado foi {maior}')