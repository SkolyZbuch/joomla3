<?php
// Protection contre les appels directs.
defined("_JEXEC") or die("Restricted access");
function modChrome_joomspirit($module, &$params, &$attribs) {
   	// init vars
	$showtitle = $module->showtitle;
	$content   = $module->content;
	$suffix    = '';
	$badge		='';
	// create title
	$pos   = JString::strpos($module->title, ' ');
	$title = ($pos !== false) ? JString::substr($module->title, 0, $pos).'<span>'.JString::substr($module->title, $pos).'</span>' : $module->title;
 
	// force module type
	if ($module->position == 'logo')  $suffix = 'normal_without_title';
	if ($module->position == 'top_menu')  $suffix = 'normal_without_title';	
	if ($module->position == 'menu')  $suffix = 'menu';
	if ($module->position == 'bottom_menu')  $suffix = 'normal_without_title';
	if ($module->position == 'top')  $suffix = 'normal';
	if ($module->position == 'bottom')  $suffix = 'normal';
	if ($module->position == 'left')  $suffix = 'normal';
	if ($module->position == 'right')  $suffix = 'normal';
	if ($module->position == 'user1')  $suffix = 'normal';
	if ($module->position == 'user2')  $suffix = 'normal';
	if ($module->position == 'user3')  $suffix = 'normal';
	if ($module->position == 'user4')  $suffix = 'normal';
	if ($module->position == 'user5')  $suffix = 'normal';
	if ($module->position == 'user6')  $suffix = 'normal';
	
	// set module skeleton using the suffix
	switch ($suffix) {
		case 'menu':
			$skeleton = 'menu';
			break;
		case 'normal':
			$skeleton = 'normal';
			break;
		case 'normal_without_title':
			$skeleton = 'normal_without_title';
			break;
		case 'user-footer':
			$skeleton = 'user-footer';
			break;			
		default:
			$skeleton = 'not defined';
	}
	// Modules
	switch ($skeleton) {
		case 'menu':
			/*
			 * menu module
			 */
			?>
				<?php echo $content; ?>
			<?php 
			break;
		case 'normal_without_title':
			/*
			 * normal without title
			 */
			?>
			<div class="moduletable <?php echo $params->get('moduleclass_sfx'); ?>" >
		
					<?php echo $content; ?>
			
			</div>
			<?php 
			break;
		case 'normal':
			/*
			 * normal
			 */
			?>
			<div class="moduletable <?php echo $params->get('moduleclass_sfx'); ?>" >
		
					<?php if ($showtitle) : ?>
					<h3 class="module"><?php echo $title; ?></h3>
					<?php endif; ?>
			
					<div class="content-module">
						<?php echo $content; ?>
					</div>
		
			</div>
			<?php 
			break;			
		case 'user-footer':
			/*
			 * user-footer
			 */
			?>
			<div class="moduletable <?php echo $params->get('moduleclass_sfx'); ?>" >
				<div>
					<?php if ($showtitle) : ?>
					<div class="bg-user-footer-h3"></div>
					<h3 class="module"><?php echo $title; ?></h3>
					<?php endif; ?>
			
					<div class="content-module">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
			<?php 
			break;			
		default:
			/*
			 * not defined
			 */
			?>
			<div class="module <?php echo $suffix; ?>">
				<?php if ($showtitle) : ?>
				<h3 class="module"><?php echo $title; ?></h3>
				<?php endif; ?>
				<?php echo $content; ?>
			</div>
			<?php 
			break;
	}
}
?>