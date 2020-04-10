# Sistema de Tickets de la Ari

- [Instalación](#instalacin)

## Instalación

### 1 Preparar virtual hosts

https://graspingtech.com/apache-virtual-hosts-ubuntu/

Usar ticket.local como server name y en el archivo hosts

### 2 Instalar dependencias

````shell script
php ./composer.phar install
````

### 3 Generar namespaces

````shell script
php ./composer.phar dump-autoload -o
````

Con esto deberías de poder entrar a tu sistema usando: ticket.local

## Estructura

El proyecto cuenta con un router donde se definen las rutas de entada. Y componentes. Cada componente puede tener un controller de acceso, un template, un servicio, dependiendo de las necesidades de cada uno. 