num = [2, 5, 9, 1]
num[2] = 3
print(num)

num2 = num[:] 
num2.append(7)
print(num2)

num3 = num[:]
num3.sort(reverse=True)
print(num3)

num4 = num[:]
num4.insert(2, 2)
print(num4)

num5 = num[:]
num5.pop(2)
print(num5)

num6 = num[:]
if 5 in num6:
    num6.remove(5)
    print(num6)
else:
    print('Não achei o número 5')
print(f'Essa lista tem {len(num)} elementos')