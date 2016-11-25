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
        $endings         = $this->getEndings($this->lang);
        foreach($endings[self::MALE] as $k => $v)
        {
            if(mb_strrpos($name, mb_strtolower($k, self::UTF8), null, self::UTF8) !== false)
            {
               echo $factorMaleSum += $k;
            }
        }

        foreach($endings[self::FEMALE] as $k => $v)
        {
            if(mb_strrpos($name, mb_strtolower($k, self::UTF8), null, self::UTF8) !== false)
            {
                $factorFemaleSum += $k;
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