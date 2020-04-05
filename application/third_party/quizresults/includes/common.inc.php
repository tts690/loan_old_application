<?php

require_once APPPATH.'/third_party/quizresults/classes/question/Text.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/TextCollection.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/AnswersCollection.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/QuestionType.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/Question.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice/MultipleChoiceSurveyAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice/MultipleChoiceSurveyAnswers.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice/MultipleChoiceSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice/MultipleChoiceAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice/MultipleChoiceAnswers.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice/MultipleChoiceQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/true_false/TrueFalseSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/true_false/TrueFalseQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/multiple_response/MultipleResponseSurveyAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_response/MultipleResponseSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_response/MultipleResponseAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_response/MultipleResponseQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/sequence/SequenceSurveyAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/sequence/SequenceSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/sequence/SequenceAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/sequence/SequenceQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/type_in/TypeInSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/type_in/TypeInQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/matching/Match.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/matching/MatchingSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/matching/MatchingQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/numeric/NumericSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/numeric/NumericAnswerType.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/numeric/NumericAnswer.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/numeric/NumericQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/fill_in_the_blank/FillInTheBlankSurveyDetailsBlank.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/fill_in_the_blank/FillInTheBlankDetailsBlank.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/fill_in_the_blank/FillInTheBlankSurveyDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/fill_in_the_blank/FillInTheBlankDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/fill_in_the_blank/FillInTheBlankSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/fill_in_the_blank/FillInTheBlankQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice_text/MultipleChoiceTextSurveyDetailsBlank.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice_text/MultipleChoiceTextDetailsBlank.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice_text/MultipleChoiceTextSurveyDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice_text/MultipleChoiceTextDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice_text/MultipleChoiceTextSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/multiple_choice_text/MultipleChoiceTextQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/word_bank/WordBankDetailsSurveyWord.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/word_bank/WordBankSurveyDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/word_bank/WordBankSurveyQuestion.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/word_bank/WordBankDetailsWord.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/word_bank/WordBankDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/word_bank/WordBankQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/essay/EssayQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/hotspot/Hotspot.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/hotspot/HotspotQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/question/likert_scale/LikertScaleMatch.class.php';
require_once APPPATH.'/third_party/quizresults/classes/question/likert_scale/LikertScaleQuestion.class.php';

require_once APPPATH.'/third_party/quizresults/classes/RequestParameters.class.php';
require_once APPPATH.'/third_party/quizresults/classes/QuizType.class.php';
require_once APPPATH.'/third_party/quizresults/classes/QuizDetails.class.php';
require_once APPPATH.'/third_party/quizresults/classes/QuizResults.class.php';
require_once APPPATH.'/third_party/quizresults/classes/QuizReportFactory.class.php';
require_once APPPATH.'/third_party/quizresults/classes/QuizReportGenerator.class.php';

require_once APPPATH.'/third_party/quizresults/classes/quiz_taker_info/QuizTakerInfoField.class.php';
require_once APPPATH.'/third_party/quizresults/classes/quiz_taker_info/QuizTakerInfo.class.php';
require_once APPPATH.'/third_party/quizresults/classes/quiz_taker_info/QuizTakerInfoFactory.class.php';
require_once APPPATH.'/third_party/quizresults/classes/quiz_taker_info/VariableReplacer.class.php';

require_once APPPATH.'/third_party/quizresults/classes/utils/RequestParametersParser.class.php';
