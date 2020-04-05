<?php

if (!function_exists('isLoggedIn')) {

    function isLoggedIn() {
        // $CI = & get_instance();
        // echo "<pre>";
        // print_r($CI);
        // echo "<pre>";die;
        // echo $id = $CI->session->userdata('i');
        // echo "sdafasdf";die;
        $CI = &get_instance();
      	$id = $CI->session->userdata('i');
        if ($id === NULL)
            return FALSE;
        return TRUE;
    }
    
    function isLoggedIn_emp() {
        $CI = &get_instance();
        $id = $CI->session->userdata('er');
        if ($id === NULL)
            return FALSE;
        return TRUE;        
    }
    
    function isLoggedIn_agn() {
        $CI = &get_instance();
        $id = $CI->session->userdata('ar');
        if ($id === NULL)
            return FALSE;
        return TRUE;        
    }

}

if(!function_exists('faq_answer')){
    function faq_answer() {
        $CI = &get_instance();
        $this->session->userdata('uu');
        if ($id === NULL)
            return FALSE;
        return TRUE;        
    }
}

if (!function_exists('checkForValidEmail')) {

    function checkForValidEmail($value) {
        if (!is_null($value) || $value != '')
            return false;
        return true;
    }

}

if (!function_exists('checkForValidName')) {

    function checkForValidName($value) {
        if (!is_null($value) || $value != '')
            return false;
        return true;
    }

}

if (!function_exists('getStaticStars')) {

    function getStaticStars($rating) {
        $stars = '<div class="static-stars">';
        $newRating = floor($rating);
        for ($i = 0; $i < $newRating; $i++) {
            $stars .= '<i class="fa fa-star"></i>';
        }
        if ($newRating < 5) {
            $remaining = 5 - $newRating;
            for ($i = 0; $i < $remaining; $i++) {
                $stars .= '<i class="fa fa-star-o"></i>';
            }
        }
        $stars .= '</div>';
        return $stars;
    }

}

if (!function_exists('getQuizMenuStars')) {

    function getQuizMenuStars($score) {
        $stars = '<div class="static-stars">';
        for ($i = 0; $i < $score; $i++) {
            $stars .= '<i class="fa fa-star quizmenustars"></i>';
        }
        if ($score < 3) {
            $remaining = 3 - $score;
            for ($i = 0; $i < $remaining; $i++) {
                $stars .= '<i class="fa fa-star-o quizmenustars"></i>';
            }
        }
        $stars .= '</div>';
        return $stars;
    }

}

if (!function_exists('mysql2englishDate')) {

    function mysql2englishDate($mysqldate) {
        if (!empty($mysqldate)) {
            $phpdate = strtotime($mysqldate);
            return date('d/m/Y', $phpdate);
        }
        return '';
    }

}


if (!function_exists('sendEmail')) {

    function sendEmail($to = null, $subject = null, $message = null, $cc = null, $bcc = null, $from = null, $from_name = null) {
        $CI = & get_instance();
        $CI->email->clear();

        $CI->email->initialize($CI->config->item('mail_config'));
        if ($from == null) {
            $CI->email->from($CI->config->item('web_admin_email_id'), 'Myloandetails');
        } else {
            $CI->email->from($from, $from_name);
        }
        $CI->email->to($to);
        if ($cc != null)
            $CI->email->cc($cc);
        if ($bcc != null)
            $CI->email->bcc($bcc);
        $CI->email->subject($subject);
        $CI->email->message($message);
        $CI->email->set_mailtype('html');
        //print_r($CI->email); exit;
        if (!$CI->email->send()) {
            log_message('error', $CI->email->print_debugger());
            return false;
        }
        return true;
    }

}
?>