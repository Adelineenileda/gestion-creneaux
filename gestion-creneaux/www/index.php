<?php
/**
* @package   gestion-creneaux
* @subpackage 
* @author    Comission Numérique
* @copyright 2025 Kissikol, Devenir Consom'Acteur
* @link      https://kissikol.org
* @license   https://spdx.org/licenses/GPL-3.0-or-later.html GPL-3.0-or-later
*/

require ('../application.init.php');
require (JELIX_LIB_CORE_PATH.'request/jClassicRequest.class.php');

checkAppOpened();

jApp::loadConfig('index/config.ini.php');

jApp::setCoord(new jCoordinator());
jApp::coord()->process(new jClassicRequest());



