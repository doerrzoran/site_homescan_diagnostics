<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/assets' => [[['_route' => 'app_assets', '_controller' => 'App\\Controller\\AssetsController::index'], null, null, null, false, false, null]],
        '/condominium' => [[['_route' => 'app_condominium', '_controller' => 'App\\Controller\\CondominiumController::index'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null]],
        '/devis' => [[['_route' => 'app_estimate', '_controller' => 'App\\Controller\\EstimateController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/intervention/sector' => [[['_route' => 'app_intervention_sector', '_controller' => 'App\\Controller\\InterventionSectorController::index'], null, null, null, false, false, null]],
        '/missions' => [[['_route' => 'app_missions', '_controller' => 'App\\Controller\\MissionsController::index'], null, null, null, false, false, null]],
        '/post/construction' => [[['_route' => 'app_post_construction', '_controller' => 'App\\Controller\\PostConstructionController::index'], null, null, null, false, false, null]],
        '/pre/construction' => [[['_route' => 'app_pre_construction', '_controller' => 'App\\Controller\\PreConstructionController::index'], null, null, null, false, false, null]],
        '/pre/destruction' => [[['_route' => 'app_pre_destruction', '_controller' => 'App\\Controller\\PreDestructionController::index'], null, null, null, false, false, null]],
        '/pre/rent' => [[['_route' => 'app_pre_rent', '_controller' => 'App\\Controller\\PreRentController::index'], null, null, null, false, false, null]],
        '/pre/sell' => [[['_route' => 'app_pre_sell', '_controller' => 'App\\Controller\\PreSellController::index'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'app_skills', '_controller' => 'App\\Controller\\SkillsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
