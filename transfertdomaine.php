<?php

require_once __DIR__.'/../src/dna.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new \DomainNameApi\DomainNameAPI_PHPLibrary($username,$password);

/**
 * Transfer Domain
 * @param string $DomainName
 * @param string $AuthCode
 * @param int $Period
 * @return array
 */

$result = $dna->Transfer('testdomain859.com', '5b3}R6Qq',3);

print_r($result);

/**
 * Array
(
    [result] => OK
)
 */