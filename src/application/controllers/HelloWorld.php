<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends CI_Controller {

	public function index() {
        $data = [
            'title' => 'Hello World!',
        ];
		$this->smarty->view('HelloWorld.tpl',$data);
	}
}
