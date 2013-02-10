<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'phpbnl13_status_api' => array(
        'page_size' => 3,
    ),
    'db' => array(
        'driver'   => 'Pdo_Sqlite',
        'database' => realpath(getcwd()) . '/data/status.db',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'view_manager' => array(
        'display_exceptions' => false, // set to true in a local file in order to debug
    ),
);
