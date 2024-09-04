<?php

include 'vts_crypt.inc.php'; // https://github.com/danielmarschall/php_utils/blob/master/vts_crypt.inc.php

function mha2_testvectors($input, $salt, $iterations, $base_algo) {
	echo "MHA2 - Base algo '$base_algo', Input '$input', Salt '$salt', Iterations $iterations\n";
	$hash = vts_mha2_hash($input, $salt, $iterations, $base_algo);
	echo "MCF: $hash\n";
	$ary = explode("$", $hash);
	$salt = crypt_radix64_decode($ary[3]);
	$hash_bin = crypt_radix64_decode($ary[4]);
	if ($base_algo == 'md4') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.1';
	if ($base_algo == 'md5') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.2';
	if ($base_algo == 'ripemd160') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.3';
	if ($base_algo == 'sha') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.4';
	if ($base_algo == 'sha1') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.5';
	if ($base_algo == 'sha224') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.6.224';
	if ($base_algo == 'sha256') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.6.256';
	if ($base_algo == 'sha384') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.6.384';
	if ($base_algo == 'sha512') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.6.512';
	if ($base_algo == 'sha3-224') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.7.224';
	if ($base_algo == 'sha3-256') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.7.256';
	if ($base_algo == 'sha3-384') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.7.384';
	if ($base_algo == 'sha3-512') $base_algo_oid = '1.3.6.1.4.1.37476.3.2.1.99.7.512';
	$hash = "1.3.6.1.4.1.37476.3.2.1.2$".$base_algo_oid."$".$iterations."$".base64_encode($salt)."$".base64_encode($hash_bin);
	echo "HSN: $hash\n"; // heterogenous storage notation (deprecated)
	$hex = bin2hex($hash_bin);
	echo "Hex: $hex\n\n";
}

mha2_testvectors('', '', 0, 'sha1');
mha2_testvectors('', '', 1, 'sha1');
mha2_testvectors('', '', 2, 'sha1');

mha2_testvectors('', 'salt', 0, 'sha1');
mha2_testvectors('', 'salt', 1, 'sha1');
mha2_testvectors('', 'salt', 2, 'sha1');

mha2_testvectors('The quick brown fox jumps over the lazy dog', '', 0, 'sha1');
mha2_testvectors('The quick brown fox jumps over the lazy dog', '', 1, 'sha1');
mha2_testvectors('The quick brown fox jumps over the lazy dog', '', 2, 'sha1');

mha2_testvectors('The quick brown fox jumps over the lazy dog', 'salt', 0, 'sha1');
mha2_testvectors('The quick brown fox jumps over the lazy dog', 'salt', 1, 'sha1');
mha2_testvectors('The quick brown fox jumps over the lazy dog', 'salt', 2, 'sha1');
