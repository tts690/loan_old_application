<?php

/**
 * Description of Test
 *
 * @author HemanthRaj
 */
class Test extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $account['user'] = 'myloan';
	$account['pass'] = '123456';
	$account['from'] = '8553522775';
	$this->load->library('Sms_global',$account);
	
	$this->sms_global->to('8722800555');
	$this->sms_global->message('Hello Hemanthraj');
	$this->sms_global->send();

	$id = $this->sms_global->get_sms_id(); // this is the sms id

	$this->sms_global->print_debugger(); // only use this to output the message details on screen for debugging
	

    }

}
