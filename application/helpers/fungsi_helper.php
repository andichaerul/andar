<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// if ( ! function_exists('tanggal'))
// {
// 	function tanggal($var = '')
// 		{
// 			$tgl = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
// 			$pecah = explode("-", $var);
// 			return $pecah[2]." ".$tgl[$pecah[1] - 1]." ".$pecah[0];
// 		}
// }

if ( ! function_exists('source'))
{
	function source($dataurl)
		{
			$url['1']  = $dataurl;
			$url['2']  = explode("//", $url['1']);
			if (count($url['2']) > 1 ) {
				$url['3'] = $url['2']['1'];
			}
			else{
				$url['3'] = $url['2']['0'];
			}
			$url['4'] = explode("/", $url['3']);
			$url['5'] = explode(".", $url['4']['0']);
			$arr = count($url['5']);
			if ($arr < 3 ) {
				for ($x=0; $x < $arr ; $x++) { 
				$data1[] = $url['5'][$x];
				}
			}
			else {
				for ($x=1; $x < $arr ; $x++) { 
				$data1[] = $url['5'][$x];
				}
			}
			
			$data = join(".",$data1);
			return $data;
		}
}

if ( ! function_exists('getTitle'))
{
	function getTitle($url) 
	{
    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
	}
}