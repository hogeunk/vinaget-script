<?php

class dl_1fichier_com extends Download {

        //public function CheckAcc($cookie) {
        //        $data = $this->lib->curl("https://1fichier.com/console/abo.pl", $cookie, "");
      //if (stristr($data, 'Your Premium offer subscription is valid until')) return array(true, "Account Premium");
           //     elseif (stristr($data, 'After test for FREE our services, choose your Offer')) return array(false, "accfree");
           //     else return array(false, "accinvalid");
       // }
   
  // public function Login($user, $pass) {
    //  $data = $this->lib->curl("https://1fichier.com/login.pl", "", "mail=andykimpe%40gmail.com&pass=30019295Ab&lt=on&valider=Send");
    //  $cookie = "LG=en; ".$this->lib->GetCookies($data);
     // return $cookie;
   //}

//   public function Leech($url) {
public function FreeLeech($url) {

$urlmatche1 = str_replace("http://", "http://andykimpe%gmail.com:30019295Ab@", $url);
$urlmatche2 = str_replace("https://", "http://andykimpe%gmail.com:30019295Ab@", $urlmatche1);

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $urlmatche2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:48.0) Gecko/20100101 Firefox/48.0");
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch2, CURLOPT_HEADER, 1);
$http_data = curl_exec($ch2);
$curl_info = curl_getinfo($ch2);
$headers = substr($http_data, 0, $curl_info["header_size"]);
preg_match("!\r\n(?:Location|URI): *(.*?) *\r\n!", $headers, $matches);
$furl = $matches[1];
curl_close($ch2);
return trim($furl);
return false;













}

/*
 * Open Source Project
 * Vinaget by ..::[H]::..
 * Version: 2.7.0
 * 1fichier Download Plugin
 * Downloader Class By [FZ]
 * Fixed Check Account by Enigma [15.06.2016]
 * [Jetleech.net]
 */
?>
