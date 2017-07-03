<?php
namespace Hcode;

use Rain\Tpl;

class Page{

	private $tpl = [];
	private $options = [];
	private $defaults =[
		"header"=>true,
		"footer"=>true,
		"data"=>[]
	];


	public function __construct($opts, array(), $tpl_dir = "/views/")
	{
		$this->options = array_merge($this->defaults, $opts);

		$config = array(

			"tpl_dir"=> $_SERVER["DOCUMENT_ROOT"].$tpl_dir,
			"cache_dir"=>$_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"=> false

		);

		Tpl::configure($config);
		$this->tpl = new Tpl,
		
	}
}

?>