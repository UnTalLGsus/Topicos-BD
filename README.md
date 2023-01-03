# Topicos-BD
Proyecto Escolar - School project
## Indice - Index
- [Introducción - Introduction](https://github.com/UnTalLGsus/Topicos-BD/main/README.md#introducción---introduction)
- [Requerimientos - Requirements](https://github.com/UnTalLGsus/Topicos-BD/main/README.md#requerimientos)
- [¿Cómo se ejecuta? - How is it run?](https://github.com/UnTalLGsus/Topicos-BD/main/README.md#cómo-se-ejecuta)
- [Reportes de pruebas - Test reports](https://github.com/UnTalLGsus/Topicos-BD/main/README.md#cómo-se-ejecuta)
- [Videos explicativos - Explanatory videos](https://github.com/UnTalLGsus/Topicos-BD/main/README.md#cómo-se-ejecuta)

## Introducción - Introduction

### ES

Para este proyecto escolar, se ha creado una página web de una tienda en línea que está conectada a una base de datos federada con MySQL y SQL Server. La página web incluye una sección de catálogo donde los usuarios pueden ver todos los productos disponibles para la venta, una sección de registro de productos donde el personal de la tienda puede agregar nuevos productos a la base de datos y una sección de edición donde el personal de la tienda puede editar o eliminar productos existentes. Además, la página web también incluye una función CRUD (Crear, Leer, Actualizar y Eliminar) que permite al personal de la tienda gestionar la información de los productos en la base de datos de manera eficiente. En resumen, este proyecto escolar ha permitido crear una página web de una tienda en línea conectada a una base de datos federada y con una función CRUD completa, proporcionando así una herramienta útil y eficiente para la gestión de la información de los productos de la tienda.

### EN

For this school project, a online store website has been created that is connected to a federated database with MySQL and SQL Server. The website includes a catalog section where users can view all the products available for sale, a product registration section where store personnel can add new products to the database and an edit section where store personnel can edit or delete existing products. In addition, the website also includes a CRUD (Create, Read, Update, and Delete) function that allows store personnel to efficiently manage product information in the database. In summary, this school project has allowed for the creation of an online store website connected to a federated database and with a complete CRUD function, providing a useful and efficient tool for managing store product information.

# JAJALAM
<p align="center">
<img src="PAGINA WEB/img/logo.png"
	alt="JAJALAM logo"
	width="500"
	style="float: left; margin-right: 10px;" />
</p>

## Requerimientos
### ES

Para crear nuestra base de datos federada entre MySQL y SQL Server, es necesario seguir los siguientes pasos:

- Asegurarse de que ambos servidores estén configurados y en funcionamiento correctamente.
- En el servidor MySQL, crear un usuario y concederle los permisos necesarios para acceder a la base de datos que se desea federar.
- En el servidor SQL Server, crear un usuario y concederle los permisos necesarios para acceder a la base de datos que se desea federar.
- En el servidor MySQL, crear una base de datos federada usando la siguiente sintaxis:
```
CREATE SERVER fed_server
FOREIGN DATA WRAPPER mysql
OPTIONS (HOST 'host_name', DATABASE 'database_name', USER 'user_name', PASSWORD 'password');
```
- En el servidor MySQL, crear una tabla federada usando la siguiente sintaxis:
```
CREATE TABLE federated_table (
  column1 datatype,
  column2 datatype,
  ...
) ENGINE=FEDERATED
CONNECTION='mysql://user_name:password@host_name:port/database_name/table_name';

```
- En el servidor SQL Server, crear una tabla federada usando la siguiente sintaxis:
```
CREATE TABLE federated_table (
  column1 datatype,
  column2 datatype,
  ...
) ENGINE=FEDERATED
CONNECTION='mysql://user_name:password@host_name:port/database_name/table_name';

```
- Una vez creadas las tablas federadas en ambos servidores, se pueden realizar consultas a través de ambas bases de datos como si fueran una sola.
Es importante tener en cuenta que la creación de una base de datos federada requiere un conocimiento avanzado de SQL y la configuración de servidores. Si no está familiarizado con estos temas, es recomendable consultar con un experto o un profesional calificado.

## Requirements
### EN

To create our federated database between MySQL and SQL Server, it is necessary to follow the following steps:

- Ensure that both servers are configured and functioning correctly.
- On the MySQL server, create a user and grant them the necessary permissions to access the database you wish to federate.
- On the SQL Server, create a user and grant them the necessary permissions to access the database you wish to federate.
- On the MySQL server, create a federated database using the following syntax:
```
CREATE SERVER fed_server
FOREIGN DATA WRAPPER mysql
OPTIONS (HOST 'host_name', DATABASE 'database_name', USER 'user_name', PASSWORD 'password');
```
- On the MySQL server, create a federated table using the following syntax:
```
CREATE TABLE federated_table (
  column1 datatype,
  column2 datatype,
  ...
) ENGINE=FEDERATED
CONNECTION='mysql://user_name:password@host_name:port/database_name/table_name';

```
- On the SQL Server, create a federated table using the following syntax:
```
CREATE TABLE federated_table (
  column1 datatype,
  column2 datatype,
  ...
) ENGINE=FEDERATED
CONNECTION='mysql://user_name:password@host_name:port/database_name/table_name';

```
- Once the federated tables have been created on both servers, queries can be made across both databases as if they were a single entity.
It is important to note that creating a federated database requires advanced knowledge of SQL and server configuration. If you are not familiar with these topics, it is advisable to consult with an expert or qualified professional.

## ¿Cómo se ejecuta?

### ES
Para utilizar los archivos de una página web es necesario seguir los siguientes pasos:

- Descargar o clonar el repositorio de la página web. Esto puede hacerse a través de la consola de Git o simplemente descargando el archivo comprimido desde la página del repositorio.
- Descomprimir el archivo en una carpeta en el ordenador.
- Abrir la carpeta donde se descomprimió el archivo. En ella se encontrarán todos los archivos necesarios para la página web, como imágenes, hojas de estilo, archivos de JavaScript y otros.
- Abrir el archivo "index.php", ubicado en la carpeta "[PAGINA WEB](https://github.com/UnTalLGsus/Topicos-BD/tree/main/PAGINA%20WEB).", en un navegador web, como Safari, Chrome, etc.

## How is it run?

### EN

To use the files of a webpage, it is necessary to follow these steps:

- Download or clone the repository of the webpage. This can be done through the Git console or simply downloading the compressed file from the repository page.
- Extract the file into a folder on the computer.
- Open the folder where the file was extracted. In it, you will find all the necessary files for the webpage, such as images, style sheets, JavaScript files, and others.
- Open the "index.php" file, located in the "[WEB PAGE](https://github.com/UnTalLGsus/Topicos-BD/tree/main/PAGINA%20WEB)." folder, in a web browser, such as Safari, Chrome, etc. 

## Reportes de pruebas

### ES

Realizamos pruebas en una página web de productos que hemos creado, que cuenta con una base de datos federada entre MySQL y SQL Server. En esta página hay un sistema CRUD (crear, leer, actualizar, eliminar) para gestionar los productos de la base de datos. Nos propusimos asegurarnos de que la página web funcionara correctamente y de que la base de datos federada estuviera funcionando de manera óptima. Los resultados de las pruebas fueron positivos, por lo que la página web está lista para ser utilizada por el público.

Cada reporte puedes verlos [aquí]().

## Test reports

### EN

We conducted tests on a product website that we created which has a federated database with MySQL and SQL Server. On this website, there is a CRUD (create, read, update, delete) system for managing the products in the database. We wanted to ensure that the website was functioning properly and that the federated database was working as intended. The tests were successful and the website is now ready to be used by the public.

You can see each report [here]().
