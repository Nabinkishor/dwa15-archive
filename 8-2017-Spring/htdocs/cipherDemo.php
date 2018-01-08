<?php

require('foobooks/tools.php');
require('Cipher.php');

$cipher = new Cipher('vowels');

dump($cipher->encode('hello world'));
dump($cipher->decode($cipher->encode('hello world')));



$cipherB = new Cipher('shift');
dump($cipherB->encode('hello world'));
dump($cipherB->decode($cipherB->encode('hello world')));
