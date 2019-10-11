<?php

namespace AshrafSaeed\MessageBird\Common;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;


class HttpClient {

    private $access_key;

    public function __construct($access_key) {

        $this->access_key = $access_key;
    
    }
    
    public function httpRequest($requestUrl, $jsonData) {

        try {

            $Client = new Client();

            $request = $Client->request('POST', $requestUrl, [
                'body' => $jsonData,
                'headers' => [
                    'content-type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'AccessKey '.$this->access_key,
                ],
            ]);

            return json_encode($request);

        } catch (BadResponseException $ex) {
            
            $response = $ex->getResponse();
            return (string) $response->getBody();
            
        } catch (Exception $exception) {
            
            return (string)$e->getResponse()->getBody();

        }

    }
   
}