def contador(* num):
    print(num)
contador(2, 1, 7)
contador(8, 0)
contador(4, 4, 7, 6, 2)

def contador2(* num):
    for valor in num:
        print(f'{valor}', end=' ')
    print('FIM!')
contador2(1, 2, 3, 4)
contador2(4, 2, 3, 4)

def contador3(* num):
    tam = len(num)
    print(f'Recebi os valores {num} e são ao todo {tam} números')
contador3(100, 200, 300)