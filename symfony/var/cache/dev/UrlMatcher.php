<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/band' => [[['_route' => 'band_list', '_controller' => 'App\\Controller\\BandController::bandsAll'], null, null, null, true, false, null]],
        '/new' => [[['_route' => 'band_new', '_controller' => 'App\\Controller\\BandController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\ConcertController::index'], null, null, null, false, false, null]],
        '/member/new' => [[['_route' => 'member_new', '_controller' => 'App\\Controller\\MemberController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/band/([^/]++)(*:183)'
                .'|/([^/]++)(?'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
                .'|/concert/([^/]++)(*:242)'
                .'|/new(*:254)'
                .'|/([^/]++)(?'
                    .'|/edit(*:279)'
                    .'|(*:287)'
                .')'
                .'|/member(?'
                    .'|(*:306)'
                    .'|/([^/]++)(?'
                        .'|(*:326)'
                        .'|/edit(*:339)'
                        .'|(*:347)'
                    .')'
                .')'
                .'|/register(*:366)'
                .'|/log(?'
                    .'|in(*:383)'
                    .'|out(*:394)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'band_show', '_controller' => 'App\\Controller\\BandController::list'], ['id'], null, null, false, true, null]],
        208 => [[['_route' => 'band_edit', '_controller' => 'App\\Controller\\BandController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'band_delete', '_controller' => 'App\\Controller\\BandController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        242 => [[['_route' => 'show_list', '_controller' => 'App\\Controller\\ConcertController::list'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'concert_new', '_controller' => 'App\\Controller\\ConcertController::createConcert'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'concert_edit', '_controller' => 'App\\Controller\\ConcertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'concert_delete', '_controller' => 'App\\Controller\\ConcertController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        306 => [[['_route' => 'member_index', '_controller' => 'App\\Controller\\MemberController::index'], [], ['GET' => 0], null, true, false, null]],
        326 => [[['_route' => 'member_show', '_controller' => 'App\\Controller\\MemberController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'member_edit', '_controller' => 'App\\Controller\\MemberController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'member_delete', '_controller' => 'App\\Controller\\MemberController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        383 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        394 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
