<?php 

return [
    'title' => 'Pemasang Laravel',
    'next' => 'Langkah seterusnya',
    'back' => 'Sebelumnya',
    'finish' => 'Pasang',
    'forms' => [
        'errorTitle' => 'Ralat berikut berlaku:',
    ],
    'welcome' => [
        'templateTitle' => 'Selamat datang',
        'title' => 'Pemasang Laravel',
        'message' => 'Wizard Pemasangan dan Persediaan yang Mudah.',
        'next' => 'Periksa Keperluan',
    ],
    'requirements' => [
        'templateTitle' => 'Langkah 1 | Keperluan Pelayan',
        'title' => 'Keperluan Pelayan',
        'next' => 'Semak Kebenaran',
    ],
    'permissions' => [
        'templateTitle' => 'Langkah 2 | Kebenaran',
        'title' => 'Kebenaran',
        'next' => 'Konfigurasikan Persekitaran',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Langkah 3 | Tetapan Persekitaran',
            'title' => 'Tetapan Persekitaran',
            'desc' => 'Pilih cara anda ingin mengkonfigurasi fail <code> .env </code> aplikasi.',
            'wizard-button' => 'Penyediaan Wizard Borang',
            'classic-button' => 'Penyunting Teks Klasik',
        ],
        'wizard' => [
            'templateTitle' => 'Langkah 3 | Tetapan Persekitaran | Ahli Sihir Berpandu',
            'title' => 'Wizard <code> .env </code> Berpandu',
            'tabs' => [
                'environment' => 'Persekitaran',
                'database' => 'Pangkalan data',
                'application' => 'Permohonan',
            ],
            'form' => [
                'name_required' => 'Nama persekitaran diperlukan.',
                'app_name_label' => 'Nama Aplikasi',
                'app_name_placeholder' => 'Nama Aplikasi',
                'app_environment_label' => 'Persekitaran Aplikasi',
                'app_environment_label_local' => 'Tempatan',
                'app_environment_label_developement' => 'Pembangunan',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Pengeluaran',
                'app_environment_label_other' => 'Yang lain',
                'app_environment_placeholder_other' => 'Masukkan persekitaran anda ...',
                'app_debug_label' => 'Debug Apl',
                'app_debug_label_true' => 'Betul',
                'app_debug_label_false' => 'Salah',
                'app_log_level_label' => 'Tahap Log Aplikasi',
                'app_log_level_label_debug' => 'nyahpepijat',
                'app_log_level_label_info' => 'maklumat',
                'app_log_level_label_notice' => 'notis',
                'app_log_level_label_warning' => 'amaran',
                'app_log_level_label_error' => 'kesilapan',
                'app_log_level_label_critical' => 'kritikal',
                'app_log_level_label_alert' => 'amaran',
                'app_log_level_label_emergency' => 'kecemasan',
                'app_url_label' => 'Url Apl',
                'app_url_placeholder' => 'Url Apl',
                'db_connection_failed' => 'Tidak dapat menyambung ke pangkalan data.',
                'db_connection_label' => 'Sambungan Pangkalan Data',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host Pangkalan Data',
                'db_host_placeholder' => 'Host Pangkalan Data',
                'db_port_label' => 'Pelabuhan Pangkalan Data',
                'db_port_placeholder' => 'Pelabuhan Pangkalan Data',
                'db_name_label' => 'Nama Pangkalan Data',
                'db_name_placeholder' => 'Nama Pangkalan Data',
                'db_username_label' => 'Nama Pengguna Pangkalan Data',
                'db_username_placeholder' => 'Nama Pengguna Pangkalan Data',
                'db_password_label' => 'Kata Laluan Pangkalan Data',
                'db_password_placeholder' => 'Kata Laluan Pangkalan Data',
                'app_tabs' => [
                    'more_info' => 'Maklumat Lanjut',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Pemacu Siaran',
                    'broadcasting_placeholder' => 'Pemacu Siaran',
                    'cache_label' => 'Pemacu Cache',
                    'cache_placeholder' => 'Pemacu Cache',
                    'session_label' => 'Pemandu Sesi',
                    'session_placeholder' => 'Pemandu Sesi',
                    'queue_label' => 'Pemandu Beratur',
                    'queue_placeholder' => 'Pemandu Beratur',
                    'redis_label' => 'Pemandu Redis',
                    'redis_host' => 'Tuan Rumah Redis',
                    'redis_password' => 'Redis Kata Laluan',
                    'redis_port' => 'Pelabuhan Redis',
                    'mail_label' => 'Mel',
                    'mail_driver_label' => 'Pemandu Mel',
                    'mail_driver_placeholder' => 'Pemandu Mel',
                    'mail_host_label' => 'Hos Mel',
                    'mail_host_placeholder' => 'Hos Mel',
                    'mail_port_label' => 'Pelabuhan Mel',
                    'mail_port_placeholder' => 'Pelabuhan Mel',
                    'mail_username_label' => 'Nama Pengguna Mel',
                    'mail_username_placeholder' => 'Nama Pengguna Mel',
                    'mail_password_label' => 'Kata Laluan Mel',
                    'mail_password_placeholder' => 'Kata Laluan Mel',
                    'mail_encryption_label' => 'Penyulitan Mel',
                    'mail_encryption_placeholder' => 'Penyulitan Mel',
                    'pusher_label' => 'Penolak',
                    'pusher_app_id_label' => 'Id Aplikasi Pusher',
                    'pusher_app_id_palceholder' => 'Id Aplikasi Pusher',
                    'pusher_app_key_label' => 'Kekunci Apl Pusher',
                    'pusher_app_key_palceholder' => 'Kekunci Apl Pusher',
                    'pusher_app_secret_label' => 'Rahsia Aplikasi Pusher',
                    'pusher_app_secret_palceholder' => 'Rahsia Aplikasi Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Sediakan Pangkalan Data',
                    'setup_application' => 'Permohonan Persediaan',
                    'install' => 'Pasang',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Langkah 3 | Tetapan Persekitaran | Penyunting Klasik',
            'title' => 'Penyunting Persekitaran Klasik',
            'save' => 'Jimat .env',
            'back' => 'Gunakan Wizard Borang',
            'install' => 'Simpan dan Pasang',
        ],
        'success' => 'Tetapan fail .env anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan fail .env, Sila buat secara manual.',
    ],
    'install' => 'Pasang',
    'installed' => [
        'success_log_message' => 'Pemasang Laravel berjaya DIPASANG pada',
    ],
    'final' => [
        'title' => 'Pemasangan Selesai',
        'templateTitle' => 'Pemasangan Selesai',
        'finished' => 'Aplikasi berjaya dipasang.',
        'migration' => '',
        'exit' => 'Klik di sini untuk keluar',
        'console' => 'Output Konsol Aplikasi:',
        'log' => 'Kemasukan Log Pemasangan:',
        'env' => 'Fail .env Akhir:',
    ],
    'updater' => [
        'title' => 'Laravel Updater',
        'welcome' => [
            'title' => 'Selamat Datang Ke Updater',
            'message' => 'Selamat datang ke wizard kemas kini.',
        ],
        'overview' => [
            'title' => 'Gambaran keseluruhan',
            'install_updates' => 'Pasang Kemas Kini',
            'message' => 'Terdapat 1 kemas kini.|Terdapat kemas kini :number',
        ],
        'final' => [
            'title' => 'Selesai',
            'finished' => 'Pangkalan data aplikasi berjaya dikemas kini.',
            'exit' => 'Klik di sini untuk keluar',
        ],
        'log' => [
            'success_message' => 'Pemasang Laravel berjaya DIKEMASKINI pada',
        ],
    ],
];