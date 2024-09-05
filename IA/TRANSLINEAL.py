import cv2
import numpy as np
imagen = cv2.imread('imagen.jpg')
matriz_transformacion = np.float32([[1, 0, 0], [0, 1, 50]])
imagen_transformada = cv2.warpAffine(imagen, matriz_transformacion, (imagen.shape[1], imagen.shape[0]))
cv2.imshow('Imagen Original', imagen)
cv2.imshow('Imagen Transformada', imagen_transformada)
cv2.waitKey(0)
cv2.destroyAllWindows()

