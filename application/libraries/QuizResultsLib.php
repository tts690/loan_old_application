<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/third_party/quizresults/includes/common.inc.php';

require APPPATH.'/third_party/text2pdf/tfpdf.php';

class QuizResultsLib{

	function __construct(){
	}

	function process(){
		$requestParameters = RequestParametersParser::getRequestParameters($_POST, !empty($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : null);
		$this->_log($requestParameters);

		log_message('debug', 'QuizResultsLib Class Initalized');

		try{
			$quizResults = new QuizResults();
			$quizResults->InitFromRequest($requestParameters);
			$generator = QuizReportFactory::CreateGenerator($quizResults, $requestParameters);
			$report = $generator->createReport();
			$report = str_replace('User Name:', '', $report);
			$report = str_replace($_POST['sn'], '', $report);
			$resultsDetails = "VISDUM"."\r\n";
			$resultsDetails .= "------------------------------------"."\r\n";
      
			$pdf = new tFPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','',14);
			$pdf->Write(8,$resultsDetails.$report);
			$pdf->Output(FCPATH.'result/'.$_POST['sn'].'.pdf');
			return $_POST['sn'];
		}
		catch (Exception $e){
			error_log($e);
			$this->_log("Error: " . $e->getMessage());
			return false;
		}
	}

	function _log($requestParameters){
        $logFilename = APPPATH. '/logs/quiz_results.log';
        $event       = array('ts' => date('Y-m-d H:i:s'), 'request_parameters' => $requestParameters, 'ts_' => time());
        $logMessage  = json_encode($event);
        $logMessage .= ',' . PHP_EOL;
        @file_put_contents($logFilename, $logMessage, FILE_APPEND);
    }
}

/* End of file HybridAuthLib.php */
/* Location: ./application/libraries/HybridAuthLib.php */