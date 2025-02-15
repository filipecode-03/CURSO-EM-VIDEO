print('=' * 11)
print('     10 TERMOS DE UMA PA    ')
print('=' * 11)
pt = int(input('Primeiro termo: '))
r = int(input('Razão: '))
for c in range(pt, 19, r):
    print(f'{c}', end=' -> ')
print('ACABOU')