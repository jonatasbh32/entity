<?php
/**
 * Configuration file changed by LosBase
 * The previous configuration file is stored in application.config.old
 */
return array(
    'modules' => array(
        'DoctrineModule',
        'DoctrineORMModule',
        'Seerc',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ),
    ),
);
