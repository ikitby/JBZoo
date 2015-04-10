<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

$this->js('libraries:jquery/jquery-ui.custom.min.js');
$this->css('libraries:jquery/jquery-ui.custom.css');

?>

<span class="jbprice-option-buttons">
    <?php echo $this->_jbhtml->buttonsJqueryUI($data, $this->getRenderName('value'), null, $this->getValue(), $this->htmlId(true)); ?>
</span>