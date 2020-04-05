<?php

class QuizTakerInfo
{
    private $fields;
    private $fieldTitles;
    private $fieldValues;
    private $replacer;

    const FIELD_USER_NAME = 'USER_NAME';
    const FIELD_USER_EMAIL = 'USER_EMAIL';

    public function __construct($fieldTitles, $fieldValues)
    {
        $this->fieldTitles = $this->escape($fieldTitles);
        $this->fieldValues = $this->escape(
            $this->collectKnownFieldValues($fieldValues)
        );
    }

    private function escape($strings)
    {
        return array_map('htmlspecialchars', $strings);
    }

    public function initUserInResults(QuizResults $quizResults)
    {
        if (!$this->doesContainUserInfo())
        {
            return;
        }

        $quizResults->studentName = !empty($this->fieldValues[self::FIELD_USER_NAME])
            ? $this->fieldValues[self::FIELD_USER_NAME] : null;
        $quizResults->studentEmail = !empty($this->fieldValues[self::FIELD_USER_EMAIL])
            ? $this->fieldValues[self::FIELD_USER_EMAIL] : null;
    }

    private function doesContainUserInfo()
    {
        return !empty($this->fieldValues[self::FIELD_USER_NAME])
            || !empty($this->fieldValues[self::FIELD_USER_EMAIL]);
    }

    /**
     * @param array $arrayContainingFieldValues
     * @return array
     */
    private function collectKnownFieldValues($arrayContainingFieldValues)
    {
        $result = array();
        foreach ($this->fieldTitles as $fieldId => $fieldTitle)
        {
            $result[$fieldId] = !empty($arrayContainingFieldValues[$fieldId])
                ? $arrayContainingFieldValues[$fieldId]
                : '';
        }
        return $result;
    }

    public function getReplacer()
    {
        if (!isset($this->replacer))
        {
            $this->replacer = new VariableReplacer($this->fieldValues);
        }
        return $this->replacer;
    }

    /**
     * @return QuizTakerInfoField[]
     */
    public function getFields()
    {
        if (!isset($this->fields))
        {
            $this->fields = $this->createFields();
        }
        return $this->fields;
    }

    private function createFields()
    {
        $result = array();
        foreach ($this->fieldTitles as $fieldId => $fieldTitle)
        {
            if ($this->isUserInfoField($fieldId))
            {
                continue;
            }

            $result[$fieldId] = new QuizTakerInfoField(
                $fieldTitle,
                $this->fieldValues[$fieldId]
            );
        }
        return $result;
    }

    private function isUserInfoField($fieldId)
    {
        $fieldId = strtoupper($fieldId);
        return $fieldId === self::FIELD_USER_NAME
            || $fieldId === self::FIELD_USER_EMAIL;
    }
}