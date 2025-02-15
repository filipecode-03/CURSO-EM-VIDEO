lanche = ['🍔', '🥤', '🍕', '🍮']
lanche[3] = '🍦'
lanche.append('🍪')
lanche.insert(0, '🌭') # o cachorro quente é o novo 0 adicionado! o hamburguer não foi apagado
del lanche[3]
lanche.pop(3)
lanche.remove('🍕')
print(lanche) 