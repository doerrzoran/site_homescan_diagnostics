<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/asbestos' => [[['_route' => 'app_asbestos', '_controller' => 'App\\Controller\\AsbestosController::index'], null, null, null, false, false, null]],
        '/assets' => [[['_route' => 'app_assets', '_controller' => 'App\\Controller\\AssetsController::index'], null, null, null, false, false, null]],
        '/carrez' => [[['_route' => 'app_carrez', '_controller' => 'App\\Controller\\CarrezController::index'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null]],
        '/d/p/e' => [[['_route' => 'app_d_p_e', '_controller' => 'App\\Controller\\DPEController::index'], null, null, null, false, false, null]],
        '/d/t/a' => [[['_route' => 'app_d_t_a', '_controller' => 'App\\Controller\\DTAController::index'], null, null, null, false, false, null]],
        '/e/r/p' => [[['_route' => 'app_e_r_p', '_controller' => 'App\\Controller\\ERPController::index'], null, null, null, false, false, null]],
        '/electricity' => [[['_route' => 'app_electricity', '_controller' => 'App\\Controller\\ElectricityController::index'], null, null, null, false, false, null]],
        '/energy/estimate' => [[['_route' => 'app_energy_estimate', '_controller' => 'App\\Controller\\EnergyEstimateController::index'], null, null, null, false, false, null]],
        '/estimate' => [[['_route' => 'app_estimate', '_controller' => 'App\\Controller\\EstimateController::index'], null, null, null, false, false, null]],
        '/gaz' => [[['_route' => 'app_gaz', '_controller' => 'App\\Controller\\GazController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home/update' => [[['_route' => 'update_homepage', '_controller' => 'App\\Controller\\HomeUpdateController::updateHomePage'], null, ['POST' => 0], null, false, false, null]],
        '/intervention/sector' => [[['_route' => 'app_intervention_sector', '_controller' => 'App\\Controller\\InterventionSectorController::index'], null, null, null, false, false, null]],
        '/lead' => [[['_route' => 'app_lead', '_controller' => 'App\\Controller\\LeadController::index'], null, null, null, false, false, null]],
        '/missions' => [[['_route' => 'app_missions', '_controller' => 'App\\Controller\\MissionsController::index'], null, null, null, false, false, null]],
        '/post/construction' => [[['_route' => 'app_post_construction', '_controller' => 'App\\Controller\\PostConstructionController::index'], null, null, null, false, false, null]],
        '/pre/construction/asbesos' => [[['_route' => 'app_pre_construction_asbesos', '_controller' => 'App\\Controller\\PreConstructionAsbesosController::index'], null, null, null, false, false, null]],
        '/pre/construction/lead' => [[['_route' => 'app_pre_construction', '_controller' => 'App\\Controller\\PreConstructionController::index'], null, null, null, false, false, null]],
        '/pre/construction/termites' => [[['_route' => 'app_pre_construction_termites', '_controller' => 'App\\Controller\\PreConstructionTermitesController::index'], null, null, null, false, false, null]],
        '/pre/des/asbestos' => [[['_route' => 'app_pre_des_asbestos', '_controller' => 'App\\Controller\\PreDesAsbestosController::index'], null, null, null, false, false, null]],
        '/pre/des/termites' => [[['_route' => 'app_pre_des_termites', '_controller' => 'App\\Controller\\PreDesTermitesController::index'], null, null, null, false, false, null]],
        '/pre/destruction' => [[['_route' => 'app_pre_destruction', '_controller' => 'App\\Controller\\PreDestructionController::index'], null, null, null, false, false, null]],
        '/pre/rent' => [[['_route' => 'app_pre_rent', '_controller' => 'App\\Controller\\PreRentController::index'], null, null, null, false, false, null]],
        '/pre/sell' => [[['_route' => 'app_pre_sell', '_controller' => 'App\\Controller\\PreSellController::index'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'app_skills', '_controller' => 'App\\Controller\\SkillsController::index'], null, null, null, false, false, null]],
        '/society' => [[['_route' => 'app_society', '_controller' => 'App\\Controller\\SocietyController::index'], null, null, null, false, false, null]],
        '/termites' => [[['_route' => 'app_termites', '_controller' => 'App\\Controller\\TermitesController::index'], null, null, null, false, false, null]],
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
