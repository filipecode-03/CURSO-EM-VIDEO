def somar(a=0, b=0, c=0):
    s = a + b + c
    return s
print(somar(3, 2, 5))
# ================ #
def somar2(a=0, b=0, c=0):
    s = a + b + c
    return s
resp = somar2(4, 2, 1)
print(resp)
#=================#
def somar3(a=0, b=0, c=0):
    s = a + b + c
    return s
r1 = somar3(3, 2, 5)
r2 = somar3(1, 7)
r3 = somar3(4)
print(f'Meus cálculos deram {r1}, {r2} e {r3}.')