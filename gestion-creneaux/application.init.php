<?php
/**
* @package   gestion-creneaux
* @subpackage
* @author    Comission Numérique
* @copyright 2025 Kissikol, Devenir Consom'Acteur
* @link      https://kissikol.org
* @license   https://spdx.org/licenses/GPL-3.0-or-later.html GPL-3.0-or-later
*/
$vendorDir = realpath(__DIR__.'/../vendor/').'/';
require($vendorDir.'autoload.php');

jApp::initPaths(
    __DIR__.'/',
    __DIR__.'/www/',
    __DIR__.'/var/',
    __DIR__.'/var/log/',
    __DIR__.'/var/config/'
);
jApp::setTempBasePath(__DIR__.'/temp/');

require($vendorDir.'jelix_app_path.php');

// Declares here paths of directories containings plugins and modules,
// that are not already declared into composer.json files of Composer packages
jApp::declareModulesDir(array(
    __DIR__.'/modules/'
));
jApp::declarePluginsDir(array(
    __DIR__.'/plugins'
));

