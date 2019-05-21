<?php
    #db
    define ('DB_HOST', '127.0.0.1');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', '');
    define ('DB_NAME', 'revista');
    #insert into revista.users (email, rol, user, password) values ('frarianacastro@gmail.com','1','Frariana Castro','7110eda4d09e062aa5e4a390b0a572ac0d2c0220')
    #ruta de la app
    define ('RUTA_APP', dirname(dirname(__FILE__)));
    define ('RUTA_URL', 'http://192.168.0.12/revista'); #
    // define ('RUTA_URL', 'http://localhost/revista');
    #nombre sitio
    define ('NOMBRE_SITIO','Gato Pardo Estudio');
    #controller principal
    define ('CONTROLLER_ACTUAL', 'v');
    #https://www.brandnewweb.nl/
    #https://typestack.nl/
    #https://cryptapi.io/