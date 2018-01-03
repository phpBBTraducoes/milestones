<?php
/**
*
* @package phpBB Extension - Milestones
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.2] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'MILESTONES_TITLE'					=> 'Milestones',
	'MILESTONES_VIA_GITHUB'				=> 'via Github',
	'MILESTONES_LAST_UPDATED'			=> 'Ultima atualização',
	'MILESTONES_COMPLETE'				=> 'completo',
	'MILESTONES_OPEN'					=> 'aberto',
	'MILESTONES_CLOSED'					=> 'fechado',
	'MILESTONES_VIEW' 					=> '»» ver »»',
	'MILESTONES_HIDE' 					=> '&nbsp;«« ocultar ««',
	'MILESTONES_NO_REPOSITORY' 			=> 'Sem milestones definidos no repositório',
));
