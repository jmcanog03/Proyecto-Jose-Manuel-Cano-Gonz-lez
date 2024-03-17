# PROYECTO FINAL IAW JOSÉ MANUEL CANO GONZÁLEZ

*Este repositorio ha sido creado con el proposito de subir mi proyecto final de IAW de 2º de ASIR.*

## Introducción ##

*En este proyecto de IAW he realizado una aplicación web sobre una tienda de camisetas utilizando el modelo MVC (modelo,vista,controlador) y que tiene diferentes categorías como camisetas de temporada 23/24, camisetas retro y chandal para desarollar este proyecto he utilziado bootraps, HTML, CSS y PHP. En la parte de programación de PHP he creado para el apartado modelo la carpeta models donde están los DAOS (Objetos de Acceso a Datos) que son scripts PHP que atacan a las tablas de las base de datos como hacer una función donde se haga una consulta en SQL que saque los usuarios de la base de datos o los prodcutos de la base de datos. Luego esas funciones las utilizara el controlador para hacer lo que necesitemos y por ultimo se lo pasa a la vista para que la reciba el usuario ya sea normal o administrador. El objetivo de este proyecto es poder realizar una aplicación web funcional utilizando lo aprendido en clase con PHP.*

## USUARIOS PARA LA LANDING-PAGE.PHP ##

* Usuario Normal 
    * josema josema normal

* Usuario Administrador
    * cristian cristian administrador


## FUNCIONALIDADES DE LA APLICACIÓN ##

* Listado de productos

    * Vistas usadas: productview.php, paginaadmin.php
    * Controlador usado: productoController.php
    * Modelo Usado: productoDAO.php

* Ver la Descripción de un producto

    * Vistas usadas: detalleproduct.php, paginaprincipal.php
    * Controlador Usado: productoController.php
    * Modelo usado: productoDAO.php

* Inicio de sesión (admin y usuario)

    * Vistas usadas: landing-page.php
    * Controlador: userController.php
    * Modelo usado: UserDAO.php

* Dar de alta un nuevo producto

    * Vistas usadas: paginaadmin.php, productview.php
    * Controlador: productoController.php
    * Modelo usado: productoDAO.php

* Añadir producto al carrito.

    * Vistas usadas: paginaprincipal.php
    * Controlador: productoController.php
    * Modelo usado: prodcutoDAO.php


* Mostrar el carrito.

    * Vistas usadas: carritoview.php
    * Controlador: productoController.php
    * Modelo usado: productoDAO.php


## VISTAS GENERALES ##

*Las vistas que se han usado generalizadas son index.php y view.php. El script PHP index.php se encargara de llamar al action y al controlador tambien se encargara de que a traves de ella instanciando un nuevo producto se muestre todo el listado de los productos de la aplicación web. En la vista view.php lo que contendra será una clase llamada View y que contiene la fución show que es estática y que se utiliza para mostrar una vista en una aplicación web. Esta funcio show se utilazara en los controladores para para cargar y mostrar una vista específica como respuesta a una solicitud del usuario.*



# PROYECTO REALIZADO POR JOSÉ MANUEL CANO GONZÁLEZ