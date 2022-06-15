<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_a_n' => [[], ['_controller' => 'App\\Controller\\ANController::index'], [], [['text', '/an']], [], [], []],
    'app_admin_interface' => [[], ['_controller' => 'App\\Controller\\AdminInterfaceController::index'], [], [['text', '/admin']], [], [], []],
    'app_agents_index' => [[], ['_controller' => 'App\\Controller\\AgentsController::index'], [], [['text', '/agents/']], [], [], []],
    'app_agents_new' => [[], ['_controller' => 'App\\Controller\\AgentsController::new'], [], [['text', '/agents/new']], [], [], []],
    'app_agents_show' => [['id'], ['_controller' => 'App\\Controller\\AgentsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agents']], [], [], []],
    'app_agents_edit' => [['id'], ['_controller' => 'App\\Controller\\AgentsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/agents']], [], [], []],
    'app_agents_delete' => [['id'], ['_controller' => 'App\\Controller\\AgentsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agents']], [], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/all']], [], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_chrono_index' => [[], ['_controller' => 'App\\Controller\\ChronoController::index'], [], [['text', '/chrono/']], [], [], []],
    'app_chrono_new' => [[], ['_controller' => 'App\\Controller\\ChronoController::new'], [], [['text', '/chrono/new']], [], [], []],
    'app_chrono_show' => [['id'], ['_controller' => 'App\\Controller\\ChronoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chrono']], [], [], []],
    'app_chrono_edit' => [['id'], ['_controller' => 'App\\Controller\\ChronoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/chrono']], [], [], []],
    'app_chrono_delete' => [['id'], ['_controller' => 'App\\Controller\\ChronoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/chrono']], [], [], []],
    'app_default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/home']], [], [], []],
    'voir' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/default']], [], [], []],
    'chat' => [[], ['_controller' => 'App\\Controller\\DefaultController::chat'], [], [['text', '/chat']], [], [], []],
    'tableau' => [[], ['_controller' => 'App\\Controller\\DefaultController::tableau'], [], [['text', '/tableau']], [], [], []],
    'document_index' => [[], ['_controller' => 'App\\Controller\\DocumentController::index'], [], [['text', '/document/all']], [], [], []],
    'document_new' => [[], ['_controller' => 'App\\Controller\\DocumentController::new'], [], [['text', '/document/new']], [], [], []],
    'document_show' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/document']], [], [], []],
    'document_edit' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/document']], [], [], []],
    'document_delete' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/document']], [], [], []],
    'app_dossier_index' => [[], ['_controller' => 'App\\Controller\\DossierController::index'], [], [['text', '/dossier/']], [], [], []],
    'app_dossier_new' => [[], ['_controller' => 'App\\Controller\\DossierController::new'], [], [['text', '/dossier/new']], [], [], []],
    'app_dossier_show' => [['id'], ['_controller' => 'App\\Controller\\DossierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dossier']], [], [], []],
    'app_dossier_edit' => [['id'], ['_controller' => 'App\\Controller\\DossierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dossier']], [], [], []],
    'app_dossier_delete' => [['id'], ['_controller' => 'App\\Controller\\DossierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dossier']], [], [], []],
    'app_enigme_deux_index' => [[], ['_controller' => 'App\\Controller\\EnigmeDeuxController::index'], [], [['text', '/enigmeDeux/']], [], [], []],
    'app_enigme_deux_new' => [[], ['_controller' => 'App\\Controller\\EnigmeDeuxController::new'], [], [['text', '/enigmeDeux/new']], [], [], []],
    'app_enigme_deux_show' => [['id'], ['_controller' => 'App\\Controller\\EnigmeDeuxController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enigmeDeux']], [], [], []],
    'app_enigme_deux_edit' => [['id'], ['_controller' => 'App\\Controller\\EnigmeDeuxController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/enigmeDeux']], [], [], []],
    'app_enigme_deux_delete' => [['id'], ['_controller' => 'App\\Controller\\EnigmeDeuxController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enigmeDeux']], [], [], []],
    'app_enigme_trois_index' => [[], ['_controller' => 'App\\Controller\\EnigmeTroisController::index'], [], [['text', '/enigmeTrois/']], [], [], []],
    'app_enigme_trois_new' => [[], ['_controller' => 'App\\Controller\\EnigmeTroisController::new'], [], [['text', '/enigmeTrois/new']], [], [], []],
    'app_enigme_trois_show' => [['id'], ['_controller' => 'App\\Controller\\EnigmeTroisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enigmeTrois']], [], [], []],
    'app_enigme_trois_edit' => [['id'], ['_controller' => 'App\\Controller\\EnigmeTroisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/enigmeTrois']], [], [], []],
    'app_enigme_trois_delete' => [['id'], ['_controller' => 'App\\Controller\\EnigmeTroisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enigmeTrois']], [], [], []],
    'app_enigme_un_index' => [[], ['_controller' => 'App\\Controller\\EnigmeUnController::index'], [], [['text', '/enigmeUn/']], [], [], []],
    'app_enigme_un_new' => [[], ['_controller' => 'App\\Controller\\EnigmeUnController::new'], [], [['text', '/enigmeUn/new']], [], [], []],
    'app_enigme_un_edit' => [['id'], ['_controller' => 'App\\Controller\\EnigmeUnController::edit'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/enigmeUn']], [], [], []],
    'app_enigme_un_delete' => [['id'], ['_controller' => 'App\\Controller\\EnigmeUnController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/enigmeUn']], [], [], []],
    'app_img_sat_index' => [[], ['_controller' => 'App\\Controller\\ImgSatController::index'], [], [['text', '/img/sat/']], [], [], []],
    'app_img_sat_new' => [[], ['_controller' => 'App\\Controller\\ImgSatController::new'], [], [['text', '/img/sat/new']], [], [], []],
    'app_img_sat_show' => [['id'], ['_controller' => 'App\\Controller\\ImgSatController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/img/sat']], [], [], []],
    'app_img_sat_toggle_all' => [[], ['_controller' => 'App\\Controller\\ImgSatController::toggleAll'], [], [['text', '/img/sat/toggleAll']], [], [], []],
    'app_img_sat_edit' => [['id'], ['_controller' => 'App\\Controller\\ImgSatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/img/sat']], [], [], []],
    'app_img_sat_delete' => [['id'], ['_controller' => 'App\\Controller\\ImgSatController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/img/sat']], [], [], []],
    'app_participants_index' => [[], ['_controller' => 'App\\Controller\\ParticipantsController::index'], [], [['text', '/participants/']], [], [], []],
    'app_participants_new' => [[], ['_controller' => 'App\\Controller\\ParticipantsController::new'], [], [['text', '/participants/new']], [], [], []],
    'app_participants_show' => [['id'], ['_controller' => 'App\\Controller\\ParticipantsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participants']], [], [], []],
    'app_participants_edit' => [['id'], ['_controller' => 'App\\Controller\\ParticipantsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/participants']], [], [], []],
    'app_participants_delete' => [['id'], ['_controller' => 'App\\Controller\\ParticipantsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participants']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_sessions_index' => [[], ['_controller' => 'App\\Controller\\SessionController::index'], [], [['text', '/sessions/']], [], [], []],
    'app_sessions_new' => [[], ['_controller' => 'App\\Controller\\SessionController::new'], [], [['text', '/sessions/new']], [], [], []],
    'app_sessions_show' => [['id'], ['_controller' => 'App\\Controller\\SessionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sessions']], [], [], []],
    'app_sessions_edit' => [['id'], ['_controller' => 'App\\Controller\\SessionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/sessions']], [], [], []],
    'app_sessions_delete' => [['id'], ['_controller' => 'App\\Controller\\SessionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sessions']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
