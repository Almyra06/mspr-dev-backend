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
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null],
            [['_route' => 'live_events_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null],
        ],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/message/ajout' => [[['_route' => 'admin_message_ajout', '_controller' => 'App\\Controller\\Admin\\AdminController::ajoutMessage'], null, null, null, false, false, null]],
        '/admin/programme/ajout' => [[['_route' => 'admin_programme_ajout', '_controller' => 'App\\Controller\\Admin\\AdminController::ajoutProgramme'], null, null, null, false, false, null]],
        '/admin/concert/ajout' => [[['_route' => 'admin_concert_ajout', '_controller' => 'App\\Controller\\Admin\\AdminController::ajoutConcert'], null, null, null, false, false, null]],
        '/admin/groupe/ajout' => [[['_route' => 'admin_groupe_ajout', '_controller' => 'App\\Controller\\Admin\\AdminController::ajoutGroupe'], null, null, null, false, false, null]],
        '/admin/faq' => [[['_route' => 'admin_faq', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::index'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\FaqController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/register/confirmation' => [[['_route' => 'app_confirmation_email', '_controller' => 'App\\Controller\\RegistrationController::confirmation'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|message/(?'
                        .'|modifier/([^/]++)(*:207)'
                        .'|supprimer/([^/]++)(*:233)'
                    .')'
                    .'|programme/(?'
                        .'|modifier/([^/]++)(*:272)'
                        .'|supprimer/([^/]++)(*:298)'
                    .')'
                    .'|concert/(?'
                        .'|modifier/([^/]++)(*:335)'
                        .'|supprimer/([^/]++)(*:361)'
                    .')'
                    .'|groupe/(?'
                        .'|modifier/([^/]++)(*:397)'
                        .'|supprimer/([^/]++)(*:423)'
                    .')'
                    .'|faq/(?'
                        .'|repondre/([^/]++)(*:456)'
                        .'|supprimer/([^/]++)(*:482)'
                    .')'
                .')'
                .'|/faq/(?'
                    .'|repondre/([^/]++)(*:517)'
                    .'|supprimer/([^/]++)(*:543)'
                .')'
                .'|/message/([^/]++)(*:569)'
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
        207 => [[['_route' => 'admin_message_modification', '_controller' => 'App\\Controller\\Admin\\AdminController::modifierMessage'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'admin_message_suppression', '_controller' => 'App\\Controller\\Admin\\AdminController::supprimerMessage'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'admin_programme_modification', '_controller' => 'App\\Controller\\Admin\\AdminController::modifierProgramme'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'admin_programme_suppression', '_controller' => 'App\\Controller\\Admin\\AdminController::supprimerProgramme'], ['id'], null, null, false, true, null]],
        335 => [[['_route' => 'admin_concert_modification', '_controller' => 'App\\Controller\\Admin\\AdminController::modifierConcert'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'admin_concert_suppression', '_controller' => 'App\\Controller\\Admin\\AdminController::supprimerConcert'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'admin_groupe_modification', '_controller' => 'App\\Controller\\Admin\\AdminController::modifierGroupe'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => 'admin_groupe_suppression', '_controller' => 'App\\Controller\\Admin\\AdminController::supprimerGroupe'], ['id'], null, null, false, true, null]],
        456 => [[['_route' => 'admin_faq_repondre', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::faqRepondre'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => 'admin_faq_suppression', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::supprimerMessage'], ['id'], null, null, false, true, null]],
        517 => [[['_route' => 'faq_repondre', '_controller' => 'App\\Controller\\FaqController::faqRepondre'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'faq_suppression', '_controller' => 'App\\Controller\\FaqController::supprimerMessage'], ['id'], null, null, false, true, null]],
        569 => [
            [['_route' => 'message_urgent', '_controller' => 'App\\Controller\\MessageUrgentController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
