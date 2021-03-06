<?php

return [
    'name' => 'Core',

    /*
    |--------------------------------------------------------------------------
    | Location where your themes are located
    |--------------------------------------------------------------------------
    */
    'themes_path' => base_path().'/Themes',
    /*
     |--------------------------------------------------------------------------
     | Array of directories to ignore when selecting the template for a page
     |--------------------------------------------------------------------------
     */
    'template-ignored-directories' => [
        'layouts',
        'partials',
        'includes',
    ],
    /*
    |--------------------------------------------------------------------------
    | Which theme to use for the front end interface
    |--------------------------------------------------------------------------
    */
    'template' => 'Bootstrap',
    /*
    |--------------------------------------------------------------------------
    | Which administration theme to use for the back end interface
    |--------------------------------------------------------------------------
    */
    'admin-theme' => 'Theadmin',
    /*
    |--------------------------------------------------------------------------
    | Enable module view overrides at theme locations
    |--------------------------------------------------------------------------
    */
    'enable-theme-overrides' => false,
    /*
    |--------------------------------------------------------------------------
    | The prefix that'll be used for the administration
    |--------------------------------------------------------------------------
    */
    'admin-prefix' => 'admin',

    'installed' => env('INSTALLED', false),
];
