<?php

namespace Hcode;

class PageAdmin extends Page {

	public function __construct($opts = array(), $tpl_dir = "/views/admin/"){
		//invocando o metodo construtor da classe page
		parent::__construct($opts, $tpl_dir);
	}

}