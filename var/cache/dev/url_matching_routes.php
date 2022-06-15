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
        '/an' => [[['_route' => 'app_a_n', '_controller' => 'App\\Controller\\ANController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_interface', '_controller' => 'App\\Controller\\AdminInterfaceController::index'], null, null, null, false, false, null]],
        '/agents' => [[['_route' => 'app_agents_index', '_controller' => 'App\\Controller\\AgentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agents/new' => [[['_route' => 'app_agents_new', '_controller' => 'App\\Controller\\AgentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category/all' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chrono' => [[['_route' => 'app_chrono_index', '_controller' => 'App\\Controller\\ChronoController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/chrono/new' => [[['_route' => 'app_chrono_new', '_controller' => 'App\\Controller\\ChronoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\DefaultController::chat'], null, null, null, false, false, null]],
        '/tableau' => [[['_route' => 'tableau', '_controller' => 'App\\Controller\\DefaultController::tableau'], null, null, null, false, false, null]],
        '/document/all' => [[['_route' => 'document_index', '_controller' => 'App\\Controller\\DocumentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/document/new' => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\DocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dossier' => [[['_route' => 'app_dossier_index', '_controller' => 'App\\Controller\\DossierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dossier/new' => [[['_route' => 'app_dossier_new', '_controller' => 'App\\Controller\\DossierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/enigmeDeux' => [[['_route' => 'app_enigme_deux_index', '_controller' => 'App\\Controller\\EnigmeDeuxController::index'], null, ['GET' => 0], null, true, false, null]],
        '/enigmeDeux/new' => [[['_route' => 'app_enigme_deux_new', '_controller' => 'App\\Controller\\EnigmeDeuxController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/enigmeTrois' => [[['_route' => 'app_enigme_trois_index', '_controller' => 'App\\Controller\\EnigmeTroisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/enigmeTrois/new' => [[['_route' => 'app_enigme_trois_new', '_controller' => 'App\\Controller\\EnigmeTroisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/enigmeUn' => [[['_route' => 'app_enigme_un_index', '_controller' => 'App\\Controller\\EnigmeUnController::index'], null, ['GET' => 0], null, true, false, null]],
        '/enigmeUn/new' => [[['_route' => 'app_enigme_un_new', '_controller' => 'App\\Controller\\EnigmeUnController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/img/sat' => [[['_route' => 'app_img_sat_index', '_controller' => 'App\\Controller\\ImgSatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/img/sat/new' => [[['_route' => 'app_img_sat_new', '_controller' => 'App\\Controller\\ImgSatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participants' => [[['_route' => 'app_participants_index', '_controller' => 'App\\Controller\\ParticipantsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participants/new' => [[['_route' => 'app_participants_new', '_controller' => 'App\\Controller\\ParticipantsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sessions' => [[['_route' => 'app_sessions_index', '_controller' => 'App\\Controller\\SessionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sessions/new' => [[['_route' => 'app_sessions_new', '_controller' => 'App\\Controller\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/agents/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                    .'|hrono/([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                .')'
                .'|/d(?'
                    .'|efault/([^/]++)(*:340)'
                    .'|o(?'
                        .'|cument/([^/]++)(?'
                            .'|(*:370)'
                            .'|/edit(*:383)'
                            .'|(*:391)'
                        .')'
                        .'|ssier/([^/]++)(?'
                            .'|(*:417)'
                            .'|/edit(*:430)'
                            .'|(*:438)'
                        .')'
                    .')'
                .')'
                .'|/enigme(?'
                    .'|Deux/([^/]++)(?'
                        .'|(*:475)'
                        .'|/edit(*:488)'
                        .'|(*:496)'
                    .')'
                    .'|Trois/([^/]++)(?'
                        .'|(*:522)'
                        .'|/edit(*:535)'
                        .'|(*:543)'
                    .')'
                    .'|Un/(?'
                        .'|(\\d+)/edit(*:568)'
                        .'|(\\d+)(*:581)'
                    .')'
                .')'
                .'|/img/sat/(?'
                    .'|([^/]++)(*:611)'
                    .'|toggleAll(*:628)'
                    .'|([^/]++)(?'
                        .'|/edit(*:652)'
                        .'|(*:660)'
                    .')'
                .')'
                .'|/participants/([^/]++)(?'
                    .'|(*:695)'
                    .'|/edit(*:708)'
                    .'|(*:716)'
                .')'
                .'|/sessions/([^/]++)(?'
                    .'|(*:746)'
                    .'|/edit(*:759)'
                    .'|(*:767)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:793)'
                    .'|/edit(*:806)'
                    .'|(*:814)'
                .')'
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
        188 => [[['_route' => 'app_agents_show', '_controller' => 'App\\Controller\\AgentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_agents_edit', '_controller' => 'App\\Controller\\AgentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_agents_delete', '_controller' => 'App\\Controller\\AgentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'app_chrono_show', '_controller' => 'App\\Controller\\ChronoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_chrono_edit', '_controller' => 'App\\Controller\\ChronoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_chrono_delete', '_controller' => 'App\\Controller\\ChronoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'voir', '_controller' => 'App\\Controller\\DefaultController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'document_show', '_controller' => 'App\\Controller\\DocumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'document_edit', '_controller' => 'App\\Controller\\DocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        391 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\DocumentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_dossier_show', '_controller' => 'App\\Controller\\DossierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_dossier_edit', '_controller' => 'App\\Controller\\DossierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'app_dossier_delete', '_controller' => 'App\\Controller\\DossierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_enigme_deux_show', '_controller' => 'App\\Controller\\EnigmeDeuxController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_enigme_deux_edit', '_controller' => 'App\\Controller\\EnigmeDeuxController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [[['_route' => 'app_enigme_deux_delete', '_controller' => 'App\\Controller\\EnigmeDeuxController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_enigme_trois_show', '_controller' => 'App\\Controller\\EnigmeTroisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => 'app_enigme_trois_edit', '_controller' => 'App\\Controller\\EnigmeTroisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'app_enigme_trois_delete', '_controller' => 'App\\Controller\\EnigmeTroisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        568 => [[['_route' => 'app_enigme_un_edit', '_controller' => 'App\\Controller\\EnigmeUnController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        581 => [[['_route' => 'app_enigme_un_delete', '_controller' => 'App\\Controller\\EnigmeUnController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        611 => [[['_route' => 'app_img_sat_show', '_controller' => 'App\\Controller\\ImgSatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        628 => [[['_route' => 'app_img_sat_toggle_all', '_controller' => 'App\\Controller\\ImgSatController::toggleAll'], [], ['POST' => 0], null, false, false, null]],
        652 => [[['_route' => 'app_img_sat_edit', '_controller' => 'App\\Controller\\ImgSatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [[['_route' => 'app_img_sat_delete', '_controller' => 'App\\Controller\\ImgSatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        695 => [[['_route' => 'app_participants_show', '_controller' => 'App\\Controller\\ParticipantsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        708 => [[['_route' => 'app_participants_edit', '_controller' => 'App\\Controller\\ParticipantsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        716 => [[['_route' => 'app_participants_delete', '_controller' => 'App\\Controller\\ParticipantsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        746 => [[['_route' => 'app_sessions_show', '_controller' => 'App\\Controller\\SessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        759 => [[['_route' => 'app_sessions_edit', '_controller' => 'App\\Controller\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        767 => [[['_route' => 'app_sessions_delete', '_controller' => 'App\\Controller\\SessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        793 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        806 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        814 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
