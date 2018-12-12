<?php
    #db
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', '');
    define ('DB_NAME', 'revista');
    #insert into revista.users (email, rol, user, password) values ('frarianacastro@gmail.com','3','Frariana Castro','7110eda4d09e062aa5e4a390b0a572ac0d2c0220')
    #ruta de la app
    define ('RUTA_APP', dirname(dirname(__FILE__)));
    #ruta url ejemplo http://localhost/revista/
    // define ('RUTA_URL', 'http://192.168.1.82:90/revista');
    define ('RUTA_URL', 'http://localhost/revista');
    #nombre sitio
    define ('NOMBRE_SITIO','REVISTA');
    #controller principal
    define ('CONTROLLER_ACTUAL', 'v');
    #https://www.brandnewweb.nl/
    #https://typestack.nl/
    #https://cryptapi.io/