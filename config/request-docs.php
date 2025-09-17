<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel Request Docs Settings
    |--------------------------------------------------------------------------
    */

    'doc_name' => 'Jornada Maternidade - API Documentation',

    'doc_description' => 'Documentação completa da API do sistema Jornada Maternidade',

    'middlewares' => [
        // 'auth', // Descomente se quiser proteger a documentação
    ],

    'hide_get_routes' => false,

    'only_route_uri_starts_with' => null,

    'sort_by' => 'default', // default, path_name

    'include_only_routes_with_names' => [
        // Se você quiser documentar apenas rotas específicas, adicione aqui
    ],

    'open_outside_link' => true,

    'rules_to_hide' => [
        'telescope*',
        'horizon*',
        'ignition*',
        '_debugbar*',
        'sanctum*',
        'livewire*',
    ],

    'logo_url' => '',

    'enable' => env('REQUEST_DOCS_ENABLE', true),
];