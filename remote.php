<?php
if(file_exists('config.php')) {
    include('config.php');
}

class RemoteService {

    public static function httpGet($url, $params) {
        
        $params = self::filterParams($params);
        $params['sign'] = self::calcSignature($params);
        
        $url .= '?';
        $url .= http_build_query($params);
        
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
        $params = ['identifier' => $_GET['identifier'], 'page' => $_GET['page']];
        $url = 'http://api.haojialian.net/shop/tv/jobs';
        $data = self::httpGet($url, $params);
        return $data;
    }
    
    public static function getShopInfo() {
        $params = ['identifier' => $_GET['identifier']];
        $url = 'http://api.haojialian.net/shop/tv/info';
        $data = self::httpGet($url, $params);
        return $data;
    }
    
    protected static function filterParams($params)
    {
        foreach ($params as $key => $value) {
            if (is_null($value)) {
                $params[$key] = '';
            }
        }
        
        $phrase = '';
        for($i = 0; $i < 8; $i++) {
            $phrase .= mt_rand(0, 9);
        }
        
        $params['nonce'] = $phrase;
        $params['ts'] = time();
    
        return $params;
    }
    
    protected static function calcSignature($params, $data = null)
    {
        $key = defined('PLATFORM_API_KEY') ? PLATFORM_API_KEY : '';
        $str = self::paramsToSignatureString($params);
        $str .= 'key='.$key;
        if (is_string($data)) {
            $str .= $data;
        }
    
        return md5($str);
    }
    
    protected static function paramsToSignatureString($params)
    {
        $str = '';
    
        ksort($params, SORT_STRING);
        foreach ($params as $key => $value) {
            if (!is_array($value)) {
                $str .= $key.'='.$value;
            }
        }
    
        return $str;
    }
    
}

header("Content-Type: application/json");
echo RemoteService::work();
