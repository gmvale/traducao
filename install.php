<?php
$this->load->model('localisation/language');
$results = $this->model_localisation_language->getLanguages();

foreach ($results as $result) {
	if ($result['code'] == 'pt-br') {
		$this->model_localisation_language->deleteLanguage($result['language_id']);
	}
}

$oc_language['name']       = 'Português (BR)';
$oc_language['code']       = 'pt-br';
$oc_language['locale']     = 'pt_BR.UTF-8, pt_BR, UTF-8';
$oc_language['directory']  = 'portuguese-br';
$oc_language['image']      = 'br.png';
$oc_language['sort_order'] = 1;
$oc_language['status']     = 1;
$this->model_localisation_language->addLanguage($oc_language);

$this->load->model('localisation/currency');
$results = $this->model_localisation_currency->getCurrencies();

foreach ($results as $result) {
	if ($result['code'] == 'BRL') {
		$this->model_localisation_currency->deleteCurrency($result['currency_id']);
	}
}

$oc_currency['title']         = 'Real';
$oc_currency['code']          = 'BRL';
$oc_currency['symbol_left']   = 'R$';
$oc_currency['symbol_right']  = '';
$oc_currency['decimal_place'] = '2';
$oc_currency['value']         = 1.00000000;
$oc_currency['status']        = 1;

$this->model_localisation_currency->addCurrency($oc_currency);