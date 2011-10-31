<?php
/**
 * Web Services plugin settings
 */


echo '<div>';
echo ' ';
echo elgg_view("input/checkboxes", array(
			'name' => 'params[enabled_webservices]',
			'value' => unserialize(elgg_get_plugin_setting('enabled_webservices', 'web_services')),
			'options' => array(elgg_echo("web_services:user") => 'user', 
								elgg_echo("web_services:blog") => 'blog', 
								elgg_echo("web_services:wire") => 'wire', 
								elgg_echo("web_services:group") => 'group',
								elgg_echo("web_services:file") => 'file'),
			));

echo '</div>';

$enabled = unserialize(elgg_get_plugin_setting('enabled_webservices', 'web_services'));
var_dump($enabled);

