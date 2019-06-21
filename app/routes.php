 <?php

/* ------------ CONTROL DE PAGINA ------------ */

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');
    $router->get('formulario', 'PagesController@formulario');
    

/* ------------ CONTROL DE ALUMNOS ------------ */
   
    $router->post('registrarUsuario', 'AlumnosController@guardarUsuario');
    $router->get('listado', 'AlumnosController@listadoAlumnos');

/* ------------ CONTROL DE ERRORES ------------ */

    $router->get('not_found', 'ProjectController@notFound');
    $router->get('internal_error', 'ProjectController@internalError');
