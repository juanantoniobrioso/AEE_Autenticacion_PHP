# AEE Autenticación por PHP

Este proyecto trata de hacer una página de inicio de sesión funcional,
en el que cuando el nombre de usuario y la contraseña coincide con las que
hay guardadas, te lleva a una página donde te dan una bienvenida personalizada
con tu nombre de usuario y la hora actual.

Si entras directamente a la página de bienvenida sin iniciar sesión, aparece un aviso
en la pantalla de que no has iniciado sesión y un botón para llevarte a la página de
inicio de sesión

Si pones un nombre y una contraseña y estos no coinciden según la lista que hay guardada, en la 
página de bienvenida habrá un aviso de que el nombre o la contraseña son incorrectos, y no
permitirá ver la página hasta que se inicie sesión correctamente, dejando un botón para volver a 
login.php

Si entras correctamente, te llevará a una página donde se te dará la bienvenida con tu nombre
de usuario y la hora actual

## Lista de usuarios y contraseñas

Usuario: Juan
Contraseña: hola00

Usuario: Carlos
Contraseña: Basulto123

Usuario: Louvre
Contraseña: Louvre

## Errores

Me he dado cuenta que al actualizar la página (con F5) me pide volver a enviar el formulario 
(es decir volver a iniciar sesión). Lo normal sería que solo cerrase la sesión con el botón de Cerrar Sesión, pero parece que recargar la página provoca este cierre de sesión. 