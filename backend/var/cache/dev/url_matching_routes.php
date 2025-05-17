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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/cards' => [[['_route' => 'api_cards_list', '_controller' => 'App\\Controller\\Api\\CardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/draw-event' => [[['_route' => 'draw_event', '_controller' => 'App\\Controller\\GameController::drawEvent'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'api_home', '_controller' => 'App\\Controller\\Api\\RootController::home'], null, ['GET' => 0], null, false, false, null]],
        '/api/sectors' => [[['_route' => 'api_sectors_list', '_controller' => 'App\\Controller\\Api\\SectorController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/start-game' => [
            [['_route' => 'start-game', '_controller' => 'App\\Controller\\Api\\CardController::startGame'], null, ['POST' => 0, 'GET' => 1], null, false, false, null],
            [['_route' => 'api_start_game', '_controller' => 'App\\Controller\\Api\\CardController::startGame'], null, ['POST' => 0], null, false, false, null],
        ],
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
                .'|/api/(?'
                    .'|atta(?'
                        .'|ck/([^/]++)/([^/]++)(?'
                            .'|(*:207)'
                            .'|(*:215)'
                        .')'
                        .'|que/([^/]++)(*:236)'
                    .')'
                    .'|sectors/([^/]++)(*:261)'
                    .'|test/attaque/([^/]++)(*:290)'
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
        207 => [[['_route' => 'game_attack', '_controller' => 'App\\Controller\\Api\\CardController::attack'], ['sectorId', 'diceRoll'], ['POST' => 0], null, false, true, null]],
        215 => [[['_route' => 'attack_sector', '_controller' => 'App\\Controller\\GameController::attackSector'], ['sector', 'diceScore'], ['POST' => 0], null, false, true, null]],
        236 => [[['_route' => 'get_attaque', '_controller' => 'App\\Controller\\AttaqueController::getAttaque'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'api_sector_show', '_controller' => 'App\\Controller\\Api\\SectorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        290 => [
            [['_route' => 'test_attaque', '_controller' => 'App\\Controller\\TestController::testAttaque'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
