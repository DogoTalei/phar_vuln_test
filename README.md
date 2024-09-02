# phar_vuln_test
El script phar_vuln_test.php genera un archivo PHAR llamado phar_vuln_test.phar, que incluye un archivo PHP con un formulario para ejecutar comandos del sistema. Muestra la salida del comando ingresado. Utiliza este PHAR para probar vulnerabilidades en entornos controlados y seguros.


Para ejecutar el script phar_vuln_test.php, necesitarás cumplir con ciertos requisitos y seguir algunos pasos. Aquí te detallo lo que necesitas:

Requisitos
Entorno PHP Compatible:

PHP Instalado: Asegúrate de tener PHP instalado en tu sistema. Puedes verificarlo con el comando php -v. El script necesita PHP para crear el archivo PHAR.
Extensión Phar: La extensión phar debe estar habilitada en tu configuración de PHP. Esta extensión suele estar habilitada por defecto en las instalaciones estándar de PHP.
Permisos de Escritura:

Directorio de Ejecución: Debes tener permisos de escritura en el directorio donde planeas ejecutar el script para que pueda crear el archivo PHAR.
Entorno de Pruebas:

Servidor Web (Opcional): Si deseas probar el archivo PHAR en un entorno web, necesitarás un servidor web con soporte para PHP (como Apache o Nginx). Esto no es necesario para ejecutar el script en la línea de comandos, pero sí para probar el PHAR en un navegador.
Pasos para Ejecutar el Script
Guardar el Script PHP:

Guarda el código del script en un archivo llamado phar_vuln_test.php.
Ejecutar el Script:

Abre una terminal y navega al directorio donde guardaste phar_vuln_test.php.
Ejecuta el script con el siguiente comando:

php phar_vuln_test.php

