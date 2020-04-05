<?php

class NumericSurveyQuestion extends Question
{
    public function isGraded()
    {
        return false;
    }

    public function initFromXmlNode(DOMElement $node)
    {
        parent::initFromXmlNode($node);

        if ($node->hasAttribute('userAnswer'))
        {
            $this->userAnswer = $node->getAttribute('userAnswer');
        }
    }
}