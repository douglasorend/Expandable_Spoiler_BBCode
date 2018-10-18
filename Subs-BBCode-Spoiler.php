<?php
/**********************************************************************************
* Subs-BBCode-Changelog.php
***********************************************************************************
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/

function BBCode_Spoiler(&$bbc)
{
	$bbc[] = array(
		'tag' => 'spoiler',
		'type' => 'unparsed_content',
		'dcontent' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>xu7aprafafrA: </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>xu7aprafafrC</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>xu7aprafafrA: </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>xu7aprafafrB</a>\'; }" /><b>xu7aprafafrA: </b><a href="#" onClick="return false;">xu7aprafafrB</a></span></div><div class="quotecontent"><div style="display: none;">$1</div></div></div>',
		'validate' => create_function('&$tag, &$data, $disabled', '
			global $txt;
			if (!isset($tag["content"]))
			{
				$tmp = str_replace("xu7aprafafrA", $txt["spoiler"], $tag["dcontent"]);
				$tmp = str_replace("xu7aprafafrC", $txt["debug_hide"], str_replace("xu7aprafafrB", $txt["debug_show"], $tmp));
				$tag["content"] = $tmp;
			}
		'),
	);
}

?>