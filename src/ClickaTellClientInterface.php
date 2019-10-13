<?php

namespace AshrafSaeed\ClickaTell;


interface ClickaTellClientInterface {

  	/**
     *
     */
  	public function setMsgBody($msgbody);

  	/**
     *
     */
  	public function setRecipients(array $recipients);


  	/**
     *
     */
  	public function getMsgBody();


  	/**
     *
     */
  	public function getRecipients();


  	/**
     *
     */
  	public function createMessage();

	/**
     *
    */
    public function sendMessage(array $recipients, $msgbody); 
 
}