<?php
/**
 * @version     $Id$
 * @copyright   Copyright 2011 Stilero AB. All rights re-served.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

//No direct access
defined('_JEXEC) or die;');

require_once('communicator/communicator.php');

class BacklinkChecker extends Communicator{
    public function __construct($url, $postVars, $config = "") {
        parent::__construct($url, $postVars, $config);
    }
}
?>