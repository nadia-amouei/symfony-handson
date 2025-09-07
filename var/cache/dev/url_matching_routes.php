<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/micro-post/add' => [[['_route' => 'app_micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/micro-post' => [[['_route' => 'app_micro_post', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, false, false, null]],
        '/micro-post/top-liked' => [[['_route' => 'app_micro_post_topliked', '_controller' => 'App\\Controller\\MicroPostController::topLiked'], null, null, null, false, false, null]],
        '/micro-post/follows' => [[['_route' => 'app_micro_post_follows', '_controller' => 'App\\Controller\\MicroPostController::follows'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/settings/profile' => [[['_route' => 'app_settings_profile', '_controller' => 'App\\Controller\\SettingsProfileController::profile'], null, null, null, false, false, null]],
        '/settings/profile-image' => [[['_route' => 'app_settings_profile_image', '_controller' => 'App\\Controller\\SettingsProfileController::profileImage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/follow/([^/]++)(*:218)'
                .'|/unfollow/([^/]++)(*:244)'
                .'|/(\\d+)?(*:259)'
                .'|/m(?'
                    .'|essages/(\\d+)(*:285)'
                    .'|icro\\-post/(?'
                        .'|(\\d+)(*:312)'
                        .'|([^/]++)/(?'
                            .'|edit(*:336)'
                            .'|comment(*:351)'
                        .')'
                    .')'
                .')'
                .'|/like/([^/]++)(*:376)'
                .'|/unlike/([^/]++)(*:400)'
                .'|/profile/([^/]++)(?'
                    .'|(*:428)'
                    .'|/follow(?'
                        .'|s(*:447)'
                        .'|ers(*:458)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        218 => [[['_route' => 'app_follow', '_controller' => 'App\\Controller\\FollowerController::follow'], ['id'], null, null, false, true, null]],
        244 => [[['_route' => 'app_unfollow', '_controller' => 'App\\Controller\\FollowerController::unfollow'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'app_index', 'limit' => '3', '_controller' => 'App\\Controller\\HelloController::index'], ['limit'], null, null, false, true, null]],
        285 => [[['_route' => 'app_show_one', '_controller' => 'App\\Controller\\HelloController::showOne'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'app_micro_post_show', '_controller' => 'App\\Controller\\MicroPostController::showOne'], ['post'], null, null, false, true, null]],
        336 => [[['_route' => 'app_micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['post'], null, null, false, false, null]],
        351 => [[['_route' => 'app_micro_post_comment', '_controller' => 'App\\Controller\\MicroPostController::addComment'], ['post'], null, null, false, false, null]],
        376 => [[['_route' => 'app_like', '_controller' => 'App\\Controller\\LikeController::like'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'app_unlike', '_controller' => 'App\\Controller\\LikeController::unlike'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::show'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'app_profile_follows', '_controller' => 'App\\Controller\\ProfileController::follows'], ['id'], null, null, false, false, null]],
        458 => [
            [['_route' => 'app_profile_followers', '_controller' => 'App\\Controller\\ProfileController::followers'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
