def aplicar_movimientos(matriz):
    # Extraer la secuencia en una lista
    secuencia = [
        matriz[0][0],  # 1
        matriz[0][1],  # 2
        matriz[0][2],  # 3
        matriz[1][2],  # 6
        matriz[2][2],  # 9
        matriz[2][1],  # 8
        matriz[2][0],  # 7
        matriz[1][0]   # 4
    ]

    # Crear una lista para almacenar los nuevos valores después de los movimientos
    nuevos_valores = [0] * len(secuencia)

    # Aplicar los movimientos especificados
    nuevos_valores[0] = secuencia[7]  # 4 (se mueve a 1)
    nuevos_valores[1] = secuencia[0]  # 1 (se mueve a 2)
    nuevos_valores[2] = secuencia[1]  # 2 (se mueve a 3)
    nuevos_valores[3] = secuencia[2]  # 3 (se mueve a 6)
    nuevos_valores[4] = secuencia[3]  # 6 (se mueve a 9)
    nuevos_valores[5] = secuencia[4]  # 9 (se mueve a 8)
    nuevos_valores[6] = secuencia[5]  # 8 (se mueve a 7)
    nuevos_valores[7] = secuencia[6]  # 7 (se mueve a 4)

    # Asignar los nuevos valores a la matriz
    matriz[0][0] = nuevos_valores[0]
    matriz[0][1] = nuevos_valores[1]
    matriz[0][2] = nuevos_valores[2]
    matriz[1][2] = nuevos_valores[3]
    matriz[2][2] = nuevos_valores[4]
    matriz[2][1] = nuevos_valores[5]
    matriz[2][0] = nuevos_valores[6]
    matriz[1][0] = nuevos_valores[7]

def imprimir_matriz(matriz):
    for fila in matriz:
        print(fila)

# Definir la matriz inicial
matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]

# Imprimir la matriz inicial
print("Matriz inicial:")
imprimir_matriz(matriz)

# Bucle para permitir al usuario decidir realizar otro recorrido o finalizar
while True:
    aplicar_movimientos(matriz)
    print("\nMatriz después del recorrido:")
    imprimir_matriz(matriz)

    # Preguntar al usuario si desea realizar otro recorrido
    respuesta = input("\n¿Desea realizar otro recorrido? (s/n): ").strip().lower()
    if respuesta != 's':
        print("Finalizando...")
        break
