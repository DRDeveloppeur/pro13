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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\AdminController::categorie'], null, null, null, false, false, null]],
        '/admin/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\AdminController::categoryNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produits' => [[['_route' => 'admin_produits', '_controller' => 'App\\Controller\\AdminController::produit'], null, null, null, false, false, null]],
        '/admin/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\AdminController::produitNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/articles' => [[['_route' => 'admin_articles', '_controller' => 'App\\Controller\\AdminController::articles'], null, null, null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\AdminController::articleNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/contacts' => [[['_route' => 'admin_contacts', '_controller' => 'App\\Controller\\AdminController::contacts'], null, null, null, false, false, null]],
        '/admin/contact/new' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\AdminController::contactNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nous' => [[['_route' => 'nous', '_controller' => 'App\\Controller\\NousController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|c(?'
                            .'|ategorie/([^/]++)(?'
                                .'|/edit(*:211)'
                                .'|(*:219)'
                            .')'
                            .'|ontact/([^/]++)(?'
                                .'|/edit(*:251)'
                                .'|(*:259)'
                            .')'
                        .')'
                        .'|produit/([^/]++)(?'
                            .'|/edit(*:293)'
                            .'|(*:301)'
                        .')'
                        .'|article/([^/]++)(?'
                            .'|/edit(*:334)'
                            .'|(*:342)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(*:367)'
                .')'
                .'|/categorie/([^/]++)(*:395)'
                .'|/produit/([^/]++)(*:420)'
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
        211 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\AdminController::categoryEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\AdminController::categoryDelete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\AdminController::contactEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\AdminController::contactDelete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\AdminController::produitEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\AdminController::produitDelete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        334 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\AdminController::articleEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\AdminController::articleDelete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        367 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [
            [['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
