Geopagos Examen PHP - Framework
===============================

A continuación se presenta la solución a la prueba técnica 'Examen PHP - Framework'.

Descripción
-----------

Se intento implementar algunos conceptos de Clean Architecture de Robert Martin
tales como separacion del dominio de la infraestructura, creacion y uso de Entity
Value Objects y repositorios para la resolucion de este ejercicio.

Solo hy dos URLs funcionales: users/ y users/1, donde se listan algunos usuarios
y la informacion del usuario con ID 1, respectivamente. Los datos son obtenidos 
de la implementacion de un DummyRepository para efectos del ejercicio.

El codigo del nucleo se encuentra en la carpeta *lumen/src/Domain*

Uso
---

Ejecutar:

```
$ docker-compose up -d
```

Y luego aceder por la URL http://localhost/