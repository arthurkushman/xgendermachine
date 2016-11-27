<?php

namespace xgendermachine;

interface LanguageInterface
{
    const LANGUAGE_RU = 'ru';
    const LANGUAGE_EN = 'en';

    const ENDING_LENGTH = 'ending_length';
    // todo: in future there can be more symbols in other languages
    const RU_ENDING_LENGTH = 2;
    const EN_ENDING_LENGTH = 2;
}