<?php
session_cache_limiter('nocache');
$cache_limiter = session_cache_limiter();
function goProxy($dataURL)
{
	$baseURL = 'http://dbharris92tofc.cartodb.com/api/v2/sql?';
	//  					^ cartoDB url
	$api = '&api_key=3c54e9eb73aedf7d17ca4bf6915a7b8ccf02c6a5';
	//				 ^api key
	$url = $baseURL.'q='.urlencode($dataURL).$api;
	$result = file_get_contents ($url);
	return $result;
}
?>
