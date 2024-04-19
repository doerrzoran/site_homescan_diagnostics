<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_admin_authentification' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/authentification']], [], [], []],
    'app_asbestos' => [[], ['_controller' => 'App\\Controller\\AsbestosController::index'], [], [['text', '/asbestos']], [], [], []],
    'app_asbestos_update' => [[], ['_controller' => 'App\\Controller\\AsbestosUpdateController::index'], [], [['text', '/asbestos/update']], [], [], []],
    'app_assets' => [[], ['_controller' => 'App\\Controller\\AssetsController::index'], [], [['text', '/assets']], [], [], []],
    'app_c_r_e_p_update' => [[], ['_controller' => 'App\\Controller\\CREPUpdateController::index'], [], [['text', '/c/r/e/p/update']], [], [], []],
    'app_carrez' => [[], ['_controller' => 'App\\Controller\\CarrezController::index'], [], [['text', '/carrez']], [], [], []],
    'app_carrez_update' => [[], ['_controller' => 'App\\Controller\\CarrezUpdateController::index'], [], [['text', '/carrez/update']], [], [], []],
    'app_contacts' => [[], ['_controller' => 'App\\Controller\\ContactsController::index'], [], [['text', '/contacts']], [], [], []],
    'app_contacts_update' => [[], ['_controller' => 'App\\Controller\\ContactsUpdateController::index'], [], [['text', '/contacts/update']], [], [], []],
    'app_d_a_a_d_update' => [[], ['_controller' => 'App\\Controller\\DAADUpdateController::index'], [], [['text', '/d/a/a/d/update']], [], [], []],
    'app_d_p_a_d_update' => [[], ['_controller' => 'App\\Controller\\DPADUpdateController::index'], [], [['text', '/d/p/a/d/update']], [], [], []],
    'app_d_p_a_t_update' => [[], ['_controller' => 'App\\Controller\\DPATUpdateController::index'], [], [['text', '/d/p/a/t/update']], [], [], []],
    'app_d_p_e' => [[], ['_controller' => 'App\\Controller\\DPEController::index'], [], [['text', '/d/p/e']], [], [], []],
    'app_d_p_e_update' => [[], ['_controller' => 'App\\Controller\\DPEUpdateController::index'], [], [['text', '/d/p/e/update']], [], [], []],
    'app_d_t_a' => [[], ['_controller' => 'App\\Controller\\DTAController::index'], [], [['text', '/d/t/a']], [], [], []],
    'app_d_t_a_d_update' => [[], ['_controller' => 'App\\Controller\\DTADUpdateController::index'], [], [['text', '/d/t/a/d/update']], [], [], []],
    'app_d_t_a_t_update' => [[], ['_controller' => 'App\\Controller\\DTATUpdateController::index'], [], [['text', '/d/t/a/t/update']], [], [], []],
    'app_d_t_a_update' => [[], ['_controller' => 'App\\Controller\\DTAUpdateController::index'], [], [['text', '/d/t/a/update']], [], [], []],
    'app_e_r_p' => [[], ['_controller' => 'App\\Controller\\ERPController::index'], [], [['text', '/e/r/p']], [], [], []],
    'app_e_r_p_update' => [[], ['_controller' => 'App\\Controller\\ERPUpdateController::index'], [], [['text', '/e/r/p/update']], [], [], []],
    'app_electricity' => [[], ['_controller' => 'App\\Controller\\ElectricityController::index'], [], [['text', '/electricity']], [], [], []],
    'app_electricity_update' => [[], ['_controller' => 'App\\Controller\\ElectricityUpdateController::index'], [], [['text', '/electricity/update']], [], [], []],
    'app_energy_estimate' => [[], ['_controller' => 'App\\Controller\\EnergyEstimateController::index'], [], [['text', '/energy/estimate']], [], [], []],
    'app_energy_update' => [[], ['_controller' => 'App\\Controller\\EnergyUpdateController::index'], [], [['text', '/energy/update']], [], [], []],
    'app_estimate' => [[], ['_controller' => 'App\\Controller\\EstimateController::index'], [], [['text', '/estimate']], [], [], []],
    'app_gaz' => [[], ['_controller' => 'App\\Controller\\GazController::index'], [], [['text', '/gaz']], [], [], []],
    'app_gaz_update' => [[], ['_controller' => 'App\\Controller\\GazUpdateController::index'], [], [['text', '/gaz/update']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'update_homepage' => [[], ['_controller' => 'App\\Controller\\HomeUpdateController::updateHomePage'], [], [['text', '/home/update']], [], [], []],
    'app_intervention_sector' => [[], ['_controller' => 'App\\Controller\\InterventionSectorController::index'], [], [['text', '/intervention/sector']], [], [], []],
    'app_intervention_update' => [[], ['_controller' => 'App\\Controller\\InterventionUpdateController::index'], [], [['text', '/intervention/update']], [], [], []],
    'app_lead' => [[], ['_controller' => 'App\\Controller\\LeadController::index'], [], [['text', '/lead']], [], [], []],
    'app_missions' => [[], ['_controller' => 'App\\Controller\\MissionsController::index'], [], [['text', '/missions']], [], [], []],
    'app_missions_update' => [[], ['_controller' => 'App\\Controller\\MissionsUpdateController::index'], [], [['text', '/missions/update']], [], [], []],
    'app_post_construction' => [[], ['_controller' => 'App\\Controller\\PostConstructionController::index'], [], [['text', '/post/construction']], [], [], []],
    'app_pre_construction_asbesos' => [[], ['_controller' => 'App\\Controller\\PreConstructionAsbesosController::index'], [], [['text', '/pre/construction/asbesos']], [], [], []],
    'app_pre_construction' => [[], ['_controller' => 'App\\Controller\\PreConstructionController::index'], [], [['text', '/pre/construction/lead']], [], [], []],
    'app_pre_construction_termites' => [[], ['_controller' => 'App\\Controller\\PreConstructionTermitesController::index'], [], [['text', '/pre/construction/termites']], [], [], []],
    'app_pre_des_asbestos' => [[], ['_controller' => 'App\\Controller\\PreDesAsbestosController::index'], [], [['text', '/pre/des/asbestos']], [], [], []],
    'app_pre_des_termites' => [[], ['_controller' => 'App\\Controller\\PreDesTermitesController::index'], [], [['text', '/pre/des/termites']], [], [], []],
    'app_pre_destruction' => [[], ['_controller' => 'App\\Controller\\PreDestructionController::index'], [], [['text', '/pre/destruction']], [], [], []],
    'app_pre_rent' => [[], ['_controller' => 'App\\Controller\\PreRentController::index'], [], [['text', '/pre/rent']], [], [], []],
    'app_pre_sell' => [[], ['_controller' => 'App\\Controller\\PreSellController::index'], [], [['text', '/pre/sell']], [], [], []],
    'app_r_a_a_t_update' => [[], ['_controller' => 'App\\Controller\\RAATUpdateController::index'], [], [['text', '/r/a/a/t/update']], [], [], []],
    'app_skills' => [[], ['_controller' => 'App\\Controller\\SkillsController::index'], [], [['text', '/skills']], [], [], []],
    'app_society' => [[], ['_controller' => 'App\\Controller\\SocietyController::index'], [], [['text', '/society']], [], [], []],
    'app_society_update' => [[], ['_controller' => 'App\\Controller\\SocietyUpdateController::index'], [], [['text', '/society/update']], [], [], []],
    'app_termites' => [[], ['_controller' => 'App\\Controller\\TermitesController::index'], [], [['text', '/termites']], [], [], []],
    'app_termites_update' => [[], ['_controller' => 'App\\Controller\\TermitesUpdateController::index'], [], [['text', '/termites/update']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/authentification']], [], [], []],
    'App\Controller\AsbestosController::index' => [[], ['_controller' => 'App\\Controller\\AsbestosController::index'], [], [['text', '/asbestos']], [], [], []],
    'App\Controller\AsbestosUpdateController::index' => [[], ['_controller' => 'App\\Controller\\AsbestosUpdateController::index'], [], [['text', '/asbestos/update']], [], [], []],
    'App\Controller\AssetsController::index' => [[], ['_controller' => 'App\\Controller\\AssetsController::index'], [], [['text', '/assets']], [], [], []],
    'App\Controller\CREPUpdateController::index' => [[], ['_controller' => 'App\\Controller\\CREPUpdateController::index'], [], [['text', '/c/r/e/p/update']], [], [], []],
    'App\Controller\CarrezController::index' => [[], ['_controller' => 'App\\Controller\\CarrezController::index'], [], [['text', '/carrez']], [], [], []],
    'App\Controller\CarrezUpdateController::index' => [[], ['_controller' => 'App\\Controller\\CarrezUpdateController::index'], [], [['text', '/carrez/update']], [], [], []],
    'App\Controller\ContactsController::index' => [[], ['_controller' => 'App\\Controller\\ContactsController::index'], [], [['text', '/contacts']], [], [], []],
    'App\Controller\ContactsUpdateController::index' => [[], ['_controller' => 'App\\Controller\\ContactsUpdateController::index'], [], [['text', '/contacts/update']], [], [], []],
    'App\Controller\DAADUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DAADUpdateController::index'], [], [['text', '/d/a/a/d/update']], [], [], []],
    'App\Controller\DPADUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DPADUpdateController::index'], [], [['text', '/d/p/a/d/update']], [], [], []],
    'App\Controller\DPATUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DPATUpdateController::index'], [], [['text', '/d/p/a/t/update']], [], [], []],
    'App\Controller\DPEController::index' => [[], ['_controller' => 'App\\Controller\\DPEController::index'], [], [['text', '/d/p/e']], [], [], []],
    'App\Controller\DPEUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DPEUpdateController::index'], [], [['text', '/d/p/e/update']], [], [], []],
    'App\Controller\DTAController::index' => [[], ['_controller' => 'App\\Controller\\DTAController::index'], [], [['text', '/d/t/a']], [], [], []],
    'App\Controller\DTADUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DTADUpdateController::index'], [], [['text', '/d/t/a/d/update']], [], [], []],
    'App\Controller\DTATUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DTATUpdateController::index'], [], [['text', '/d/t/a/t/update']], [], [], []],
    'App\Controller\DTAUpdateController::index' => [[], ['_controller' => 'App\\Controller\\DTAUpdateController::index'], [], [['text', '/d/t/a/update']], [], [], []],
    'App\Controller\ERPController::index' => [[], ['_controller' => 'App\\Controller\\ERPController::index'], [], [['text', '/e/r/p']], [], [], []],
    'App\Controller\ERPUpdateController::index' => [[], ['_controller' => 'App\\Controller\\ERPUpdateController::index'], [], [['text', '/e/r/p/update']], [], [], []],
    'App\Controller\ElectricityController::index' => [[], ['_controller' => 'App\\Controller\\ElectricityController::index'], [], [['text', '/electricity']], [], [], []],
    'App\Controller\ElectricityUpdateController::index' => [[], ['_controller' => 'App\\Controller\\ElectricityUpdateController::index'], [], [['text', '/electricity/update']], [], [], []],
    'App\Controller\EnergyEstimateController::index' => [[], ['_controller' => 'App\\Controller\\EnergyEstimateController::index'], [], [['text', '/energy/estimate']], [], [], []],
    'App\Controller\EnergyUpdateController::index' => [[], ['_controller' => 'App\\Controller\\EnergyUpdateController::index'], [], [['text', '/energy/update']], [], [], []],
    'App\Controller\EstimateController::index' => [[], ['_controller' => 'App\\Controller\\EstimateController::index'], [], [['text', '/estimate']], [], [], []],
    'App\Controller\GazController::index' => [[], ['_controller' => 'App\\Controller\\GazController::index'], [], [['text', '/gaz']], [], [], []],
    'App\Controller\GazUpdateController::index' => [[], ['_controller' => 'App\\Controller\\GazUpdateController::index'], [], [['text', '/gaz/update']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\HomeUpdateController::updateHomePage' => [[], ['_controller' => 'App\\Controller\\HomeUpdateController::updateHomePage'], [], [['text', '/home/update']], [], [], []],
    'App\Controller\InterventionSectorController::index' => [[], ['_controller' => 'App\\Controller\\InterventionSectorController::index'], [], [['text', '/intervention/sector']], [], [], []],
    'App\Controller\InterventionUpdateController::index' => [[], ['_controller' => 'App\\Controller\\InterventionUpdateController::index'], [], [['text', '/intervention/update']], [], [], []],
    'App\Controller\LeadController::index' => [[], ['_controller' => 'App\\Controller\\LeadController::index'], [], [['text', '/lead']], [], [], []],
    'App\Controller\MissionsController::index' => [[], ['_controller' => 'App\\Controller\\MissionsController::index'], [], [['text', '/missions']], [], [], []],
    'App\Controller\MissionsUpdateController::index' => [[], ['_controller' => 'App\\Controller\\MissionsUpdateController::index'], [], [['text', '/missions/update']], [], [], []],
    'App\Controller\PostConstructionController::index' => [[], ['_controller' => 'App\\Controller\\PostConstructionController::index'], [], [['text', '/post/construction']], [], [], []],
    'App\Controller\PreConstructionAsbesosController::index' => [[], ['_controller' => 'App\\Controller\\PreConstructionAsbesosController::index'], [], [['text', '/pre/construction/asbesos']], [], [], []],
    'App\Controller\PreConstructionController::index' => [[], ['_controller' => 'App\\Controller\\PreConstructionController::index'], [], [['text', '/pre/construction/lead']], [], [], []],
    'App\Controller\PreConstructionTermitesController::index' => [[], ['_controller' => 'App\\Controller\\PreConstructionTermitesController::index'], [], [['text', '/pre/construction/termites']], [], [], []],
    'App\Controller\PreDesAsbestosController::index' => [[], ['_controller' => 'App\\Controller\\PreDesAsbestosController::index'], [], [['text', '/pre/des/asbestos']], [], [], []],
    'App\Controller\PreDesTermitesController::index' => [[], ['_controller' => 'App\\Controller\\PreDesTermitesController::index'], [], [['text', '/pre/des/termites']], [], [], []],
    'App\Controller\PreDestructionController::index' => [[], ['_controller' => 'App\\Controller\\PreDestructionController::index'], [], [['text', '/pre/destruction']], [], [], []],
    'App\Controller\PreRentController::index' => [[], ['_controller' => 'App\\Controller\\PreRentController::index'], [], [['text', '/pre/rent']], [], [], []],
    'App\Controller\PreSellController::index' => [[], ['_controller' => 'App\\Controller\\PreSellController::index'], [], [['text', '/pre/sell']], [], [], []],
    'App\Controller\RAATUpdateController::index' => [[], ['_controller' => 'App\\Controller\\RAATUpdateController::index'], [], [['text', '/r/a/a/t/update']], [], [], []],
    'App\Controller\SkillsController::index' => [[], ['_controller' => 'App\\Controller\\SkillsController::index'], [], [['text', '/skills']], [], [], []],
    'App\Controller\SocietyController::index' => [[], ['_controller' => 'App\\Controller\\SocietyController::index'], [], [['text', '/society']], [], [], []],
    'App\Controller\SocietyUpdateController::index' => [[], ['_controller' => 'App\\Controller\\SocietyUpdateController::index'], [], [['text', '/society/update']], [], [], []],
    'App\Controller\TermitesController::index' => [[], ['_controller' => 'App\\Controller\\TermitesController::index'], [], [['text', '/termites']], [], [], []],
    'App\Controller\TermitesUpdateController::index' => [[], ['_controller' => 'App\\Controller\\TermitesUpdateController::index'], [], [['text', '/termites/update']], [], [], []],
];
