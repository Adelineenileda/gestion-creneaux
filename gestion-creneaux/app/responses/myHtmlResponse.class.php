<?php
/**
* @package   gestion-creneaux
* @subpackage 
* @author    Comission Numérique
* @copyright 2025 Kissikol, Devenir Consom'Acteur
* @link      https://kissikol.org
* @license   https://spdx.org/licenses/GPL-3.0-or-later.html GPL-3.0-or-later
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'jelix~defaultmain';

    function __construct() {
        parent::__construct();

        // Include your common CSS and JS files here
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        $this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
