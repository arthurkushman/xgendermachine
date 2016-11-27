<?php
namespace xgendermachine;

class GenderMachine extends GenderBase
{
    const UTF8          = 'utf-8';
    const GENDER_MALE   = 1;
    const GENDER_FEMALE = 0;

    private $lang;

    public function getGender(string $name)
    {
        $factorMaleSum   = 0;
        $factorFemaleSum = 0;

        $langSettings         = $this->getEndings($this->lang);
        $nameEnding = mb_substr($name, mb_strlen($name, self::UTF8) - $langSettings[self::ENDING_LENGTH], null, self::UTF8);
        foreach($langSettings[self::MALE] as $k => $v)
        {
            if(mb_strrpos($nameEnding, mb_strtolower($k, self::UTF8), null, self::UTF8) !== false)
            {
                $factorMaleSum += $v;
            }
        }

        foreach($langSettings[self::FEMALE] as $k => $v)
        {
            if(mb_strrpos($nameEnding, mb_strtolower($k, self::UTF8), null, self::UTF8) !== false)
            {
                $factorFemaleSum += $v;
            }
        }

        if($factorFemaleSum > $factorMaleSum)
        {
            return self::FEMALE;
        }

        return self::MALE;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

}