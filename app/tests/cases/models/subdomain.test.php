<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* Subdomain Test cases generated on: 2010-07-24 02:07:45 : 1279951965*/
App::import('Model', 'Subdomain');

class SubdomainTestCase extends CakeTestCase {
	var $fixtures = array('app.subdomain', 'app.server', 'app.plan', 'app.account', 'app.custom_field_value', 'app.custom_field', 'app.log', 'app.staff_account', 'app.ticket_reply', 'app.mail_log');

	function startTest() {
		$this->Subdomain =& ClassRegistry::init('Subdomain');
	}

	function endTest() {
		unset($this->Subdomain);
		ClassRegistry::flush();
	}

}
?>