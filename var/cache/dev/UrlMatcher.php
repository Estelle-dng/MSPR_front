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
        '/ChoixEmplacement' => [[['_route' => 'Choix', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::Choixemplacement'], null, null, null, false, false, null]],
        '/admin/listeCategory' => [[['_route' => 'listeCategory', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listeCategory/create' => [[['_route' => 'admin.category.create', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/listediscount' => [[['_route' => 'listeDiscount', '_controller' => 'App\\Controller\\Admin\\AdminDiscountController::listediscount'], null, null, null, false, false, null]],
        '/admin/listediscount/create' => [[['_route' => 'admin.listediscount.create', '_controller' => 'App\\Controller\\Admin\\AdminDiscountController::create'], null, null, null, false, false, null]],
        '/admin/listefaq' => [[['_route' => 'listeFAQ', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::listefaq'], null, null, null, false, false, null]],
        '/admin/listefaq/create' => [[['_route' => 'admin.listefaq.create', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::create'], null, null, null, false, false, null]],
        '/FAQ' => [[['_route' => 'FAQ', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::Faq'], null, null, null, false, false, null]],
        '/Admin/TableauDeBord' => [[['_route' => 'Dashboard', '_controller' => 'App\\Controller\\Admin\\AdminHomeController::Dashboard'], null, null, null, false, false, null]],
        '/Admin/ListeRéservation' => [[['_route' => 'Listeresa', '_controller' => 'App\\Controller\\Admin\\AdminHomeController::ListeResa'], null, null, null, false, false, null]],
        '/admin/listemedia' => [[['_route' => 'listeMedia', '_controller' => 'App\\Controller\\Admin\\AdminMediaController::listemedia'], null, null, null, false, false, null]],
        '/admin/listemedia/create' => [[['_route' => 'admin.listemedia.create', '_controller' => 'App\\Controller\\Admin\\AdminMediaController::create'], null, null, null, false, false, null]],
        '/admin/listeOption' => [[['_route' => 'listeOption', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listeOption/create' => [[['_route' => 'admin.option.create', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Accueil' => [[['_route' => 'Accueil', '_controller' => 'App\\Controller\\Admin\\AdminSeasonController::Accueil'], null, null, null, false, false, null]],
        '/admin/listeseason' => [[['_route' => 'listeSeason', '_controller' => 'App\\Controller\\Admin\\AdminSeasonController::listeseason'], null, null, null, false, false, null]],
        '/admin/listeseason/create' => [[['_route' => 'admin.listeseason.create', '_controller' => 'App\\Controller\\Admin\\AdminSeasonController::create'], null, null, null, false, false, null]],
        '/Photos' => [[['_route' => 'Photos', '_controller' => 'App\\Controller\\Admin\\AdminSliderController::Photos'], null, null, null, false, false, null]],
        '/admin/listeslider' => [[['_route' => 'listeSlider', '_controller' => 'App\\Controller\\Admin\\AdminSliderController::listeslider'], null, null, null, false, false, null]],
        '/admin/listeslider/create' => [[['_route' => 'admin.listeslider.create', '_controller' => 'App\\Controller\\Admin\\AdminSliderController::create'], null, null, null, false, false, null]],
        '/TarifsMobilHome' => [[['_route' => 'TarifsMobilHome', '_controller' => 'App\\Controller\\Admin\\AdminTarifController::Tarifsmobilhome'], null, null, null, false, false, null]],
        '/admin/listetarif' => [[['_route' => 'listeTarif', '_controller' => 'App\\Controller\\Admin\\AdminTarifController::listetarif'], null, null, null, false, false, null]],
        '/admin/listetarif/create' => [[['_route' => 'admin.listetarif.create', '_controller' => 'App\\Controller\\Admin\\AdminTarifController::create'], null, null, null, false, false, null]],
        '/Proximité' => [[['_route' => 'Proximité', '_controller' => 'App\\Controller\\HomeController::Proximite'], null, null, null, false, false, null]],
        '/Contact' => [[['_route' => 'Contact', '_controller' => 'App\\Controller\\HomeController::Contact'], null, null, null, false, false, null]],
        '/TarifsTente' => [[['_route' => 'TarifsTente', '_controller' => 'App\\Controller\\HomeController::Tariftente'], null, null, null, false, false, null]],
        '/Inscription' => [[['_route' => 'Inscription', '_controller' => 'App\\Controller\\HomeController::Inscription'], null, null, null, false, false, null]],
        '/mesreservations' => [[['_route' => 'mesreservations', '_controller' => 'App\\Controller\\HomeController::mesreservations'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/liste(?'
                    .'|Category/(?'
                        .'|Article/([^/]++)(*:212)'
                        .'|([^/]++)(?'
                            .'|/edit(*:236)'
                            .'|(*:244)'
                        .')'
                    .')'
                    .'|discount/([^/]++)(?'
                        .'|(*:274)'
                    .')'
                    .'|faq/([^/]++)(?'
                        .'|(*:298)'
                    .')'
                    .'|media/([^/]++)(?'
                        .'|(*:324)'
                    .')'
                    .'|Option/([^/]++)(?'
                        .'|/edit(*:356)'
                        .'|(*:364)'
                    .')'
                    .'|s(?'
                        .'|eason/([^/]++)(?'
                            .'|(*:394)'
                        .')'
                        .'|lider/([^/]++)(?'
                            .'|(*:420)'
                        .')'
                    .')'
                    .'|tarif/([^/]++)(?'
                        .'|(*:447)'
                    .')'
                .')'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:486)'
                    .'|setting/reset/([^/]++)(*:516)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        212 => [[['_route' => 'Article', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::Article'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'admin.category.edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'admin.category.delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        274 => [
            [['_route' => 'admin.discount.edit', '_controller' => 'App\\Controller\\Admin\\AdminDiscountController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.discount.delete', '_controller' => 'App\\Controller\\Admin\\AdminDiscountController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        298 => [
            [['_route' => 'admin.faq.edit', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.faq.delete', '_controller' => 'App\\Controller\\Admin\\AdminFaqController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        324 => [
            [['_route' => 'admin.media.delete', '_controller' => 'App\\Controller\\Admin\\AdminMediaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'admin.media.edit', '_controller' => 'App\\Controller\\Admin\\AdminMediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
        ],
        356 => [[['_route' => 'admin.option.edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'admin.option.delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        394 => [
            [['_route' => 'admin.season.edit', '_controller' => 'App\\Controller\\Admin\\AdminSeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.season.delete', '_controller' => 'App\\Controller\\Admin\\AdminSeasonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        420 => [
            [['_route' => 'admin.slider.edit', '_controller' => 'App\\Controller\\Admin\\AdminSliderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.slider.delete', '_controller' => 'App\\Controller\\Admin\\AdminSliderController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        447 => [
            [['_route' => 'admin.tarif.edit', '_controller' => 'App\\Controller\\Admin\\AdminTarifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.tarif.delete', '_controller' => 'App\\Controller\\Admin\\AdminTarifController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        486 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        516 => [
            [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
