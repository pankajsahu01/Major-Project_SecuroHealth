<?php

// Global Encryption for all public information.
function aes_encrypt($plaintext){

	// Store the cipher method
	$ciphering = "AES-128-CTR";

	// Use OpenSSl Encryption method
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;

	// Non-NULL Initialization Vector for encryption
	$encryption_iv = '1234567891011121';

	// Store the encryption key
	$encryption_key = "%4eh!htyy%#dsg67*5gg#3zd%mpi*hbbj@y6$";

	// Use openssl_encrypt() function to encrypt the data
	$encryption = openssl_encrypt($plaintext, $ciphering, $encryption_key, $options, $encryption_iv);

	// Return the encrypted string
	return $encryption;
}
?>
