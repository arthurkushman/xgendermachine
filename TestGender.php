<?php
require_once 'LanguageInterface.php';
require_once 'FactorInterface.php';
require_once 'GenderBase.php';
require_once 'GenderMachine.php';

$gender = new \xgendermachine\GenderMachine();
$gender->setLang('ru');

echo $gender->getGender('Анатолий');