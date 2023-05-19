<?php 

return [
    'title' => 'Instalador de Laravel',
    'next' => 'Próximo paso',
    'back' => 'Anterior',
    'finish' => 'Instalar en pc',
    'forms' => [
        'errorTitle' => 'Los siguientes errores ocurrieron:',
    ],
    'welcome' => [
        'templateTitle' => 'Bienvenido',
        'title' => 'Instalador de Laravel',
        'message' => 'Asistente de instalación y configuración sencilla.',
        'next' => 'Consultar requisitos',
    ],
    'requirements' => [
        'templateTitle' => 'Paso 1 | Requisitos del servidor',
        'title' => 'Requisitos del servidor',
        'next' => 'Verificar permisos',
    ],
    'permissions' => [
        'templateTitle' => 'Paso 2 | Permisos',
        'title' => 'Permisos',
        'next' => 'Configurar el entorno',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno',
            'title' => 'Configuración del entorno',
            'desc' => 'Seleccione cómo desea configurar el archivo <code> .env </code> de las aplicaciones.',
            'wizard-button' => 'Configuración del asistente de formulario',
            'classic-button' => 'Editor de texto clásico',
        ],
        'wizard' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno | Asistente guiado',
            'title' => 'Asistente <code> .env </code> guiado',
            'tabs' => [
                'environment' => 'Ambiente',
                'database' => 'Base de datos',
                'application' => 'Solicitud',
            ],
            'form' => [
                'name_required' => 'Se requiere un nombre de entorno.',
                'app_name_label' => 'Nombre de la aplicación',
                'app_name_placeholder' => 'Nombre de la aplicación',
                'app_environment_label' => 'Entorno de la aplicación',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Desarrollo',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Producción',
                'app_environment_label_other' => 'Otro',
                'app_environment_placeholder_other' => 'Entra en tu entorno ...',
                'app_debug_label' => 'Depuración de aplicaciones',
                'app_debug_label_true' => 'Cierto',
                'app_debug_label_false' => 'Falso',
                'app_log_level_label' => 'Nivel de registro de la aplicación',
                'app_log_level_label_debug' => 'depurar',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'darse cuenta',
                'app_log_level_label_warning' => 'advertencia',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'crítico',
                'app_log_level_label_alert' => 'alerta',
                'app_log_level_label_emergency' => 'emergencia',
                'app_url_label' => 'URL de la aplicación',
                'app_url_placeholder' => 'URL de la aplicación',
                'db_connection_failed' => 'No se pudo conectar a la base de datos.',
                'db_connection_label' => 'Conexión de base de datos',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host de base de datos',
                'db_host_placeholder' => 'Host de base de datos',
                'db_port_label' => 'Puerto de base de datos',
                'db_port_placeholder' => 'Puerto de base de datos',
                'db_name_label' => 'Nombre de la base de datos',
                'db_name_placeholder' => 'Nombre de la base de datos',
                'db_username_label' => 'Nombre de usuario de la base de datos',
                'db_username_placeholder' => 'Nombre de usuario de la base de datos',
                'db_password_label' => 'Contraseña de la base de datos',
                'db_password_placeholder' => 'Contraseña de la base de datos',
                'app_tabs' => [
                    'more_info' => 'Más información',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Controlador de transmisión',
                    'broadcasting_placeholder' => 'Controlador de transmisión',
                    'cache_label' => 'Controlador de caché',
                    'cache_placeholder' => 'Controlador de caché',
                    'session_label' => 'Controlador de sesión',
                    'session_placeholder' => 'Controlador de sesión',
                    'queue_label' => 'Conductor de cola',
                    'queue_placeholder' => 'Conductor de cola',
                    'redis_label' => 'Controlador de Redis',
                    'redis_host' => 'Host de Redis',
                    'redis_password' => 'Contraseña de Redis',
                    'redis_port' => 'Puerto de Redis',
                    'mail_label' => 'Correo',
                    'mail_driver_label' => 'Conductor de correo',
                    'mail_driver_placeholder' => 'Conductor de correo',
                    'mail_host_label' => 'Host de correo',
                    'mail_host_placeholder' => 'Host de correo',
                    'mail_port_label' => 'Puerto de correo',
                    'mail_port_placeholder' => 'Puerto de correo',
                    'mail_username_label' => 'Nombre de usuario de correo',
                    'mail_username_placeholder' => 'Nombre de usuario de correo',
                    'mail_password_label' => 'Contraseña de correo',
                    'mail_password_placeholder' => 'Contraseña de correo',
                    'mail_encryption_label' => 'Cifrado de correo',
                    'mail_encryption_placeholder' => 'Cifrado de correo',
                    'pusher_label' => 'Arribista',
                    'pusher_app_id_label' => 'ID de la aplicación Pusher',
                    'pusher_app_id_palceholder' => 'ID de la aplicación Pusher',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Secreto de la aplicación Pusher',
                    'pusher_app_secret_palceholder' => 'Secreto de la aplicación Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Configuración de la base de datos',
                    'setup_application' => 'Aplicación de configuración',
                    'install' => 'Instalar en pc',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno | Editor clásico',
            'title' => 'Editor de entorno clásico',
            'save' => 'Guardar .env',
            'back' => 'Usar asistente de formulario',
            'install' => 'Guardar e instalar',
        ],
        'success' => 'La configuración del archivo .env se ha guardado.',
        'errors' => 'No se puede guardar el archivo .env, créelo manualmente.',
    ],
    'install' => 'Instalar en pc',
    'installed' => [
        'success_log_message' => 'El instalador de Laravel INSTALADO con éxito en',
    ],
    'final' => [
        'title' => 'Instalación terminada',
        'templateTitle' => 'Instalación terminada',
        'finished' => 'La aplicación se ha instalado correctamente.',
        'migration' => '',
        'exit' => 'Haga clic aquí para salir',
        'console' => 'Salida de la consola de aplicaciones:',
        'log' => 'Entrada de registro de instalación:',
        'env' => 'Archivo .env final:',
    ],
    'updater' => [
        'title' => 'Actualizador de Laravel',
        'welcome' => [
            'title' => 'Bienvenido al actualizador',
            'message' => 'Bienvenido al asistente de actualización.',
        ],
        'overview' => [
            'title' => 'Visión general',
            'install_updates' => 'Instalar actualizaciones',
            'message' => 'Hay 1 actualización.|Hay :number de actualizaciones.',
        ],
        'final' => [
            'title' => 'Terminado',
            'finished' => 'La base de datos de la aplicación se ha actualizado correctamente.',
            'exit' => 'Haga clic aquí para salir',
        ],
        'log' => [
            'success_message' => 'El instalador de Laravel ACTUALIZADO con éxito en',
        ],
    ],
];