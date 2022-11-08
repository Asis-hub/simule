import pandas as pd
import numpy as np

#Datos por sexo
#INE
#https://ine.mx/transparencia/datos-abiertos/#/archivo/datos-por-rangos-de-edad-entidad-de-origen-y-sexo-del-padron-electoral-y-lista-nominal-2022

df = pd.read_excel(r'/home/asis/porSexoListaNominal.xlsx', sheet_name='pdln_edms_sexo_11032022')
#df = pd.read_excel(r'/home/asis/porSexoListaNominalFinalOctubre.xlsx', sheet_name='pdln_edms_sexo_20221028')

suma_listahombres = df[df["NOMBRE\nMUNICIPIO"] == "XALAPA"]["LISTA\nHOMBRES"].sum()
suma_listamujeres = df[df["NOMBRE\nMUNICIPIO"] == "XALAPA"]["LISTA\nMUJERES"].sum()
suma_listanominal = df[df["NOMBRE\nMUNICIPIO"] == "XALAPA"]["LISTA\nNOMINAL"].sum()

#print("Lista nominal hombres: " + suma_listahombres)
#print("Lista nominal mujeres: " + suma_listamujeres)
#print("Lista nominal total: " + suma_listanominal)

print("Lista nominal hombres: " + str(suma_listahombres))
print("Lista nominal mujeres: " + str(suma_listamujeres))
print("Lista nominal total: " + str(suma_listanominal))