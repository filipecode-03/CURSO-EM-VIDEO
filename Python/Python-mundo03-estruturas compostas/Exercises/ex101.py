from datetime import datetime
anoatual = datetime.now().year
def voto(idade):
    anos = anoatual - idade
    return anos
nasc = int(input('Em que ano você nasceu? '))
print(f'Com {voto(nasc)} anos: ', end='')
if 60 <= voto(nasc):
    print('VOTO OPCIONAL.')
elif 20 <= voto(nasc) < 60:
    print('VOTO OBRIGATÓRIO.')
elif 16 <= voto(nasc) < 20:
    print('VOTO OPCIONAL.')
elif 16 > voto(nasc):
    print('VOTO NEGADO.')