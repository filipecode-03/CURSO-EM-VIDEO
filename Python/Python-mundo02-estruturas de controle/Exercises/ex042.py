p1 = int(input('Primeiro segmento: '))
p2 = int(input('Segundo segmento: '))
p3 = int(input('Terceiro segmento: '))
eq = p1 == p2 == p3
es =  p1 != p2 != p3 != p1
if eq:
    print('Os segmentos acima PODEM FORMAR um triângulo EQUILÁTERO!')
elif es:
    print('Os segmentos acima PODEM FORMAR um triângulo ESCALENO!')
else:
    print('Os segmentos acima PODEM FORMAR um triângulo ISÓSCELES')