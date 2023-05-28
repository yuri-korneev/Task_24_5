<?php

namespace App\models;
use App\core\Model;

class Portfolio_model extends Model
{
	public function get_data()
	{	
		
		return array(
			array(
				'Year' => '2017',
				'Site' => 'http://luchezarny.ru',
				'Description' => 'Бывший пансионат "Лучезарный" заискрил новыми красками в городе Сочи.'
			),
			array(
				'Year' => '2019',
				'Site' => 'http://restmoscow.ru',
				'Description' => 'В основе концепции лежит желание поддержать архитектуру здания в стиле арт-деко и «вывести» её на улицу.'
			),
			array(
				'Year' => '2020',
				'Site' => 'http://sadair.ru',
				'Description' => 'Мы назвали его Висячие сады. В названии отражены связь времен и поколений.'
			),
			array(
				'Year' => '2021',
				'Site' => 'http://usadba.ru',
				'Description' => 'Наша команда разработала концептульное предложение по благоустройству территории усадьбы.'
			),
			array(
				'Year' => '2022',
				'Site' => 'http://pestovo.ru',
				'Description' => 'Новый проект – это путешествие во времени, набор тех знаний и составляющих, которые мы собирали веками и тысячелетиями.'
			),
		);
	}
}

?>