<?php

namespace xgendermachine;

class GenderBase implements LanguageInterface, FactorInterface
{
    const MALE = 'male';
    const FEMALE = 'female';

    // an array of settings for every language
    private $languages = [
        self::LANGUAGE_RU => [
            self::MALE => [
                'ан' => self::FACTOR_HI,
                'ур' => self::FACTOR_HI,
                'ор' => self::FACTOR_HI,
                'ей' => self::FACTOR_HI,
                'ий' => self::FACTOR_HI,
                'илья' => self::FACTOR_HI,
                'ем' => self::FACTOR_HI,
                'ав' => self::FACTOR_HI,
            ],
            self::FEMALE => [
                'на' => self::FACTOR_HI,
                'ия' => self::FACTOR_HI,
                'ла' => self::FACTOR_HI,
                'та' => self::FACTOR_HI,
                'ка' => self::FACTOR_HI,
                'ра' => self::FACTOR_HI,
                'ля' => self::FACTOR_MID_HI,
                'ья' => self::FACTOR_MID,
                'я' => self::FACTOR_LOW,
                'а' => self::FACTOR_LOW
            ],
            self::ENDING_LENGTH => self::RU_ENDING_LENGTH,
        ],
        self::LANGUAGE_EN => [
            self::MALE => [
                'an' => self::FACTOR_HI,
                'ck' => self::FACTOR_HI,
                'ry' => self::FACTOR_HI,
                'on' => self::FACTOR_HI,
                'od' => self::FACTOR_HI,
                'il' => self::FACTOR_HI,
                'rt' => self::FACTOR_HI,
                'or' => self::FACTOR_HI,
                'is' => self::FACTOR_HI,
                'in' => self::FACTOR_HI,
                'de' => self::FACTOR_MID_HI,
                'ay' => self::FACTOR_MID_HI,
                'ir' => self::FACTOR_MID_HI,
                'el' => self::FACTOR_MID_HI,
                'ey' => self::FACTOR_MID,
                'th' => self::FACTOR_MID,
            ],
            self::FEMALE => [
                'cy' => self::FACTOR_HI,
                'na' => self::FACTOR_HI,
                'ie' => self::FACTOR_HI,
                'ce' => self::FACTOR_HI,
                'ia' => self::FACTOR_HI,
                'sa' => self::FACTOR_HI,
                'by' => self::FACTOR_HI,
                'ly' => self::FACTOR_HI,
                'ah' => self::FACTOR_MID_HI,
                'er' => self::FACTOR_MID_HI,
                'tt' => self::FACTOR_MID_HI,
                'fy' => self::FACTOR_LOW,
            ],
            self::ENDING_LENGTH => self::EN_ENDING_LENGTH,
        ]
    ];

    /**
     * @param string $language
     *
     * @return mixed
     */
    protected function getEndings(string $language)
    {
        return $this->languages[$language];
    }
}