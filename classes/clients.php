<?php

class Client
{
    protected $clientId;

    public function __construct($_id)
    {
        $this->clientId = $_id;
    }
    private $email;
    private $password;

    public function setName($_nickname)
    {
        return $this->nickname = $_nickname;
    }
    public function setEmail($_mail)
    {
        return $this->email = $_mail;
    }
    public function setPassword($_passwrd)
    {
        return $this->password = $_passwrd;
    }
    public function getIfClient()
    {
        if (is_null($this->email) || is_null($this->password)) {
            $this->isClient = false;
        } else $this->isClient = true;
    }
}

// $clientOne = new Client(1);
// $clientOne->setName('Mark');
// $clientOne->setEmail('Mark@gmail.com');
// $clientOne->setPassword('Ciao123');
// $clientOne->getIfClient();
// var_dump($clientOne);

// $clientTwo = new Client(2);
// $clientTwo->setName('Julius');
// $clientTwo->getIfClient();
// var_dump($clientTwo);
