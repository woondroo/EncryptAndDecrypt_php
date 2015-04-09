<?php
include('Crypt.php');

define( 'KEY' , 'J7A38DY3PjeUlmqCU9H5LufzCFwhurRK' );

// Start ...
$start = microtime(true);

// Crypt string.
$str = '有更大的坑 curl 7.36才支持ECC https://bugzilla.redhat.com/show_bug.cgi?id=1058776libcurl没有细查';
// Start crypt.
$strEncrypt = Crypt::encode( $str , KEY );
echo "Encrypted str: ".$strEncrypt."\n";

// Start decrypt.
$strDecrypt = Crypt::decode( $strEncrypt , KEY );
echo "Decrypted str: ".$strDecrypt."\n";

$end = microtime(true);
$time = $end - $start;
echo "Consuming time: {$time} s\n";
?>
