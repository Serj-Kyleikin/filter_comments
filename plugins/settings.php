<?php

 // Подключение плагинов

return [

//****************// Плагины реализующие функционал целой страницы //****************//

    'pages' => [

        // Плагин "Регистрации/Авторизации "(Вариант без регистрации)

        'users' => [
            'status' => 1,
            'routes' => [
                'level' => '0',         // Номер сущности в URL строке
                'entities' => [
                    'authorization',     // Адрес плагина в URL
                    'registration'
                ]
            ],
            'options' => [
                                        // Любые дополнительные опции
            ]
        ]
    ]
];