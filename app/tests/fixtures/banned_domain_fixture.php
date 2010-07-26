<?php
/* BannedDomain Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/fixture.ctp on line 24
2010-07-23 23:07:35 : 1279942595 */
class BannedDomainFixture extends CakeTestFixture {
	var $name = 'BannedDomain';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'domain' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'added' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'domain' => 'Lorem ipsum dolor sit amet',
			'added' => '2010-07-23 23:36:35'
		),
	);
}
?>