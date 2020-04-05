<?php

/**
 * Description of Test
 *
 * @author HemanthRaj
 */
class Test extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
      $this->load->view('refer_a_friend');

    }

}
