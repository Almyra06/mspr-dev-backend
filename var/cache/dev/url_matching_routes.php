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
        '/concert' => [[['_route' => 'concert_index', '_controller' => 'App\\Controller\\ConcertController::index'], null, ['GET' => 0], null, true, false, null]],
        '/concert/new' => [[['_route' => 'concert_new', '_controller' => 'App\\Controller\\ConcertController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'live_events_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'live_events_accueil_admin', '_controller' => 'App\\Controller\\AccueilController::adminIndex'], null, null, null, true, false, null]],
        '/admin/add/concert' => [[['_route' => 'live_events_accueil_admin_new_concert', '_controller' => 'App\\Controller\\AccueilController::newConcert'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/delete/concert' => [[['_route' => 'live_events_accueil_admin_delete_concert', '_controller' => 'App\\Controller\\AccueilController::delete'], null, ['DELETE' => 0], null, true, false, null]],
        '/boutique' => [[['_route' => 'live_events_Boutique', '_controller' => 'App\\Controller\\BoutiqueController::index'], null, null, null, false, false, null]],
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
                .'|/concert/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/admin/(\\d+)/edit/concert(*:244)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'concert_show', '_controller' => 'App\\Controller\\ConcertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'concert_edit', '_controller' => 'App\\Controller\\ConcertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'concert_delete', '_controller' => 'App\\Controller\\ConcertController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        244 => [
            [['_route' => 'live_events_accueil_admin_edit_concert', '_controller' => 'App\\Controller\\AccueilController::editConcert'], ['id'], ['GET' => 0, 'POST' => 1], null, true, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
