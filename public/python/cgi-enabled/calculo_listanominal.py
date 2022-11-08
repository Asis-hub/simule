import pandas as pd
import numpy as np

#Datos por sexo
#INE
#https://ine.mx/transparencia/datos-abiertos/#/archivo/datos-por-rangos-de-edad-entidad-de-origen-y-sexo-del-padron-electoral-y-lista-nominal-2022

#df = pd.read_excel(r'/home/asis/porSexoListaNominal.xlsx', sheet_name='pdln_edms_sexo_11032022')
df = pd.read_excel(r'/home/asis/porSexoListaNominalFinalOctubre.xlsx', sheet_name='pdln_edms_sexo_20221028')

suma_listanominal = df[df["NOMBRE\nMUNICIPIO"] == "XALAPA"]["LISTA\nNOMINAL"].sum()
print(suma_listanominal)