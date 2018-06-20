<?php

function C($key)
{
	global $config;
	
	return $config[$key];
}

function __autoload($className)
{
	include './'.$className.'.php';
}

function url($controller,$action,$param = [])
{
	$url = APP_HOST.'/index.php?c='.$controller.'&a='.$action;
	if (!empty($param)) {
		foreach ($param as $key => $val) {
			$url .= '&'.$key.'='.$val;
		}
	}
	return $url;
}

function redirect($url)
{

}

function getImg($imgSrc)
{
	return APP_HOST.'/public/img/'.$imgSrc;
}

function getJs($jsSrc)
{
return APP_HOST.'/public/img/'.$jsSrc;
}

function getCss($CssSrc)
{
return APP_HOST.'/public/img/'.$CssSrc;
}