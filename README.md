# EncryptAndDecrypt_php

A simple encrypt and decrypt algorithm example achieved by php.

### How to use?
```
define('KEY','pricate_key');

$str = 'any string';
$strEncrypt = Crypt::encode( $str , KEY )

$strDecrypt = Crypt::decode( $strEncrypt , KEY )
```
