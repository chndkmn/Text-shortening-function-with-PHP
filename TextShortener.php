<?php
function ShortenIt($content, $str = 10)
	{
		if (strlen($content) > $str)
		{
			if (function_exists("mb_substr")) $content = mb_substr($content, 0, $str, "UTF-8").'..';
			else $content = substr($content, 0, $str).'..';
		}
		return trim(strip_tags($content));
	}
?>