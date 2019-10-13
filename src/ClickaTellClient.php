<?php

namespace AshrafSaeed\ClickaTell;

use AshrafSaeed\ClickaTell\Resources\RestApi;

class ClickaTellClient implements ClickaTellClientInterface {

    private $access_key;
    private $msgbody;
    private $recipients;

    /**
     *
     */
    public function __construct($access_key) {

        $this->access_key = $access_key;        
    
    }

    /**
     *
     */
    public function setMsgBody($msgbody) {
    
        $this->msgbody = $msgbody;        

    }

    /**
     *
     */
    public function setRecipients(array $recipients) {
    
        $this->recipients = $recipients;        

    }

    /**
     *
     */
    public function getMsgBody() {
    
        return $this->msgbody;

    }

    /**
     *
     */
    public function getRecipients() {

        return $this->recipients;
    
    }


    /**
     *
     */
    public function sendMessage( array $recipients, $msgbody ) {

        $this->setMsgBody($msgbody);
        $this->setRecipients($recipients);
    
        return $this->createMessage();

    }

    /**
     *
     */
    public function createMessage() {

        try {
    
            $clickatell = new RestApi($this->access_key);

            $result = $clickatell->sendMessage(
                ['to' => $this->getRecipients(), 'content' => $this->getMsgBody()]
            );

            return json_encode($result);

        } catch (Exception $e) {

            return json_encode($e->getMessage());

        }

    }

}