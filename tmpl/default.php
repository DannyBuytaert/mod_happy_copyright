<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_footer
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die();
?>
<div class="<?php echo $moduleclass_sfx ?>"><?php echo $copyright; ?><?php echo $year; ?>
<?php if ($showSitename==1):?>
&nbsp;<?php echo $csiteName; ?>
<?php endif;?>
<?php if ($params -> get('freeText')):?>
&nbsp;<?php echo $params -> get('freeText'); ?>
<?php endif;?>
</div>

