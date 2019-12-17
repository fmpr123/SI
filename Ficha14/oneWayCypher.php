<?php

// Indicar uma texto limpo a ser cifrado

$string = "É fácil cifra texto com a biblioteca MCrypt para

PHP";

// Chave para a cifragem/decifragem

$key = "Uma chave";

// Indicar que algoritmo se pretende utilizar

$cipher_alg = MCRYPT_RIJNDAEL_128;

// Indicar um sector de inicialização para aumentar a

// segurança.

$iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher_alg,

MCRYPT_MODE_ECB), MCRYPT_RAND);

// Imprimir texto limpo

print "Texto limpo: $string <p>";

// Encriptar o texto limpo ($string)

$encrypted_string = mcrypt_encrypt($cipher_alg, $key,

$string, MCRYPT_MODE_CBC, $iv);

// Converter para hexadecimal e apresentar no browser

print "Texto cifrado: ".bin2hex($encrypted_string)."<p>";

$decrypted_string = mcrypt_decrypt($cipher_alg, $key,

$encrypted_string, MCRYPT_MODE_CBC, $iv);

print "Texto decifrado: $decrypted_string";

?>