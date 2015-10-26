<?php namepsace Tasnim;

use \Michelf\Markdown;

class MarkdownParser{


	public static function parse($string){
		return MarkdownExtra::defaultTransform($my_text);
	}
}