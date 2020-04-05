<?php

class LikertScaleQuestion extends Question
{
    public function getType()
    {
        return QuestionType::LIKERT_SCALE;
    }

    public function isGraded()
    {
        return false;
    }

    public function initFromXmlNode(DOMElement $node)
    {
        parent::initFromXmlNode($node);

        $statementsNode = $node->getElementsByTagName('statements')->item(0);
        $statementsCollection = TextCollection::fromXmlNode($statementsNode, 'statement');
        $statements = $statementsCollection->toArray();

        $labelsNode = $node->getElementsByTagName('scaleLabels')->item(0);
        $labelsCollection = TextCollection::fromXmlNode($labelsNode, 'label');
        $labels = $labelsCollection->toArray();

        $userAnswers = array();

        if ($node->getElementsByTagName('userAnswer')->length != 0)
        {
            $userAnswerNode = $node->getElementsByTagName('userAnswer')->item(0);
            $userAnswers = $this->exportUserAnswer($userAnswerNode);
        }

        $index = 0;
        foreach ($statements as $statement)
        {
            $label = '';
            $userAnswer = $this->getUserAnswerByStatementIndex($userAnswers, $index);
            if ($userAnswer)
            {
                $label = $labels[$userAnswer->labelIndex];
            }

            if ($this->userAnswer != '')
            {
                $this->userAnswer .= '; ';
            }
            $this->userAnswer .= $statement . ' - ' . $label;

            ++$index;
        }
    }

    /**
     * @param $userAnswers
     * @param $index
     * @return LikertScaleMatch
     */
    public function getUserAnswerByStatementIndex($userAnswers, $index)
    {
        if (!$userAnswers)
        {
            return null;
        }

        foreach ($userAnswers as $match)
        {
            if ($match->statementIndex == $index)
            {
                return $match;
            }
        }

        return null;
    }

    private function exportUserAnswer(DOMElement $node)
    {
        $out = Array();

        $matchesList = $node->getElementsByTagName('match');
        for ($i = 0; $i < $matchesList->length; ++$i)
        {
            $matchNode = $matchesList->item($i);

            $match = new LikertScaleMatch();
            $match->initFromXmlNode($matchNode);
            $out[] = $match;
        }

        return $out;
    }
}