<?php
class RemoteService {

    public static function httpGet($url) {
        $ch = curl_init($url);
        
        //curl_setopt($ch, CURLOPT_HEADER, 0);
    	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , 0); //TODO enabled this option will return an error no 60 in Windows PHP 5.3, why?
    	//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    	//curl_setopt($ch, CURLOPT_SSLVERSION, 3);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_POST, false);
    	//curl_setopt($ch, CURLOPT_REFERER, $strReferer);
    	$response = curl_exec($ch);
        $error_no = curl_errno($ch);
        curl_close($ch);
        if($error_no) {
            return false;
        }

        return $response;
    }

    public static function work() {
        if($_GET['data'] == 'jobs') {
            return self::getJobs();
        }
        if($_GET['data'] == 'shop') {
            return self::getShopInfo();
        }
    }

    public static function getJobs() {
        $params = http_build_query(['identifier' => $_GET['identifier'], 'page' => $_GET['page']]);
        $url = 'http://api.haojialian.net/shop/tv/jobs?' . $params; // TODO config
        $data = self::httpGet($url, $params);
        return $data;
    }
    
    public static function getShopInfo() {
        $params = http_build_query(['identifier' => $_GET['identifier']]);
        $url = 'http://api.haojialian.net/shop/tv/info?' . $params; // TODO config
        $data = self::httpGet($url, $params);
        return $data;
    }
}

header("Content-Type: application/json");
echo RemoteService::work();
