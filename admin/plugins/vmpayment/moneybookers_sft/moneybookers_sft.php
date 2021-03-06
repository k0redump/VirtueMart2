<?php

/*
* @author Skrill Holdings Ltd.
* @version $Id: 1.0
* @package VirtueMart
* @subpackage payment
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
* 
* http://virtuemart.org
*/

defined('_JEXEC') or die('Restricted access');
if (!class_exists('vmPSPlugin'))
    require(JPATH_VM_PLUGINS . DS . 'vmpsplugin.php');
if (!class_exists('plgVmpaymentMoneybookers'))
    require(JPATH_ROOT . DS . 'plugins' . DS . 'vmpayment' . DS . 'moneybookers' . DS . 'moneybookers.php');

class plgVmpaymentMoneybookers_Sft extends plgVmpaymentMoneybookers
    {
    public static $_this = false;

    function __construct(& $subject, $config)
	{
        parent::__construct($subject, $config);
        
        $this->_loggable = true;
        $this->_debug = true;
        $this->_tablepkey = 'id'; //virtuemart_moneybookers_id';
        $this->_tableId = 'id'; //'virtuemart_moneybookers_id';
	}
    
    function plgVmConfirmedOrder($cart, $order)
        {
        parent::plgVmConfirmedOrder($cart, $order, "SFT");
        }
    }
// No closing tag