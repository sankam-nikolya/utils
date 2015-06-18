<?php

/**
 * Test: Nette\Utils\Arrays::flatten()
 */

use Nette\Utils\Arrays;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$res = Arrays::flatten(array(
	2 => array('a', array('b')),
	4 => array('c', 'd'),
	'e',
));

Assert::same(array(
	0 => 'a',
	1 => 'b',
	2 => 'c',
	3 => 'd',
	4 => 'e',
), $res);

$res = Arrays::flatten(array(
	5 => 'a',
	10 => array(
		'z' => 'b',
		1 => 'c',
	),
	'y' => 'd',
	'z' => 'e',
), TRUE);

Assert::same(array(
	5 => 'a',
	'z' => 'e',
	1 => 'c',
	'y' => 'd',
), $res);
