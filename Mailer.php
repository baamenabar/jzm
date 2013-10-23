<?php

require_once 'swiftMailer/swift_required.php';
require_once 'email-config.php';

class Mail {

    protected $server;
    public $user;
    protected $pass;
    protected $from;
    protected $fromName = 'JZMusic.cl';
    public $to;
    public $toName;
    public $msg;
    public $subject;
    public $result;

    public function __construct($to, $toName, $msg, $subject){
        global $email;
        $this->server = $email['servidor'];
        $this->user = $email['usuario'];
        $this->pass = $email['password'];
        $this->to = $to;
        $this->toName = $toName;
        $this->msg = $msg;
        $this->subject = $subject;
        $this->from = $this->user;
    }

    public function sendContact(){
        $from = $this->to;
        $fromName = $this->toName;
        $to = $this->user;
        $toName = $this->from;
        $this->to = $to;
        $this->toName = $toName;
        $this->from = $from;
        $this->fromName = $fromName;
        $this->send();
    }

    public function sendQuote($msgCustomer){
        $this->send();
        $from = $this->to;
        $fromName = $this->toName;
        $to = $this->user;
        $toName = $this->from;
        $this->to = $to;
        $this->toName = $toName;
        $this->from = $from;
        $this->fromName = $fromName;
        $this->msg = $msgCustomer;
        $this->send();
    }

    private function send(){
        try {
            $transport = Swift_SmtpTransport::newInstance($this->server, 465, 'ssl')
                                    ->setUsername($this->user)
                                    ->setPassword($this->pass);
            $mailer = Swift_Mailer::newInstance($transport);
            $message = Swift_Message::newInstance($this->subject)
                                    ->setFrom(array($this->from => $this->fromName))
                                    ->setTo(array($this->to => $this->toName))
                                    ->setReplyTo(array($this->from => $this->fromName))
                                    ->setBody($this->msg, 'text/html');
            $this->result = ( $mailer->send($message) == 1 ) ? true : false;
        } catch (Exception $e) {
            $this->result = false;
        }
    }

}
