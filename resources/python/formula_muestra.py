# -*- coding: UTF-8 -*-
# FORMULA PARA MUESTRAS

z = float(input("Ingresa el valor de confiabilidad Z \n"))  #ESTE VALOR TAMBIEN PUEDE VARIAR
p = float(input("Ingresa la proporcion necesaria p \n")) #ESTOS PUEDEN VARIAR ENTRE CERO Y UNO 
q = float(input("Ingresa la proporcion restante q \n")) #ESTOS PUEDEN VARIAR ENTRE CERO Y UNO 
n = float(input("Ingresa el tamaño de poblacion N \n")) #ESTE VALOR SALE DE ARCHIVO 1 TOTAL DE XALAPA 
e = float(input("Ingresa el Error E \n")) #ESTE VALOR PUEDE VARIAR ENTRE 0 Y 1

numerador = (z**2) * (p * q) * n #NUMERADOR
denominador = ((e**2)*(n-1)) + ((z**2)*(p*q)) #DENOMINADOR


print(numerador/denominador)

