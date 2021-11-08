<?php

namespace Osoobe\Manatal\v3;

class CareerPage extends API {

    public static function getJobs($client_slug) {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', static::API_URL."/career-page/$client_slug/jobs/");
        $data  = $response->getBody()->getContents();
        if ( is_string($data) ) {
            return json_decode($data, true);
        }
        return $data;
    }

}


?>