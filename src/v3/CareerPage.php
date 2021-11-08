<?php

namespace Osoobe\Manatal\v3;

class CareerPage extends API {

    public static function getJobs($client_slug) {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', static::API_URL."/career-page/$client_slug/jobs/");
            $data  = $response->getBody()->getContents();
            if ( is_string($data) ) {
                return json_decode($data, true);
            }
        } catch (\Throwable $th) {
            $data = [ 'detail' => 'Not Found', 'error' => $th->getMessage()];
        }
        $data = [];
        return $data;
    }

}


?>