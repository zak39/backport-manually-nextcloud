<?php

class JonSnow {
    
    private string $firstname;
    private string $lastname;

    public function __construct(
        $firstname,
        $lastname
    )
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function saySpeech()
    {
        return "Winter is comming... The death come";
    }

    public function getFullName()
    {
        return $this->firstname . " " . $this->lastname;
    }

}

$jon = new JonSnow('Jon', 'Snow');

print($jon->getFullName() . "\n");
print($jon->saySpeech() . "\n");
print("password is : dany8 \n");
