<?php

class JonSnow {
    
    private string $firstname;
    private string $lastname;
    private int $old;

    public function __construct(
        $firstname,
        $lastname,
        $old
    )
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->old = $old;
    }


    public function getOld(): int
    {
        return $this->old;
    }

    public function setOld(int $old): void
    {
        $this->old = $old;
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

$jon = new JonSnow('Jon', 'Snow', 25);

print($jon->getFullName() . "\n");
print($jon->saySpeech() . "\n");
print(strval($jon->getOld()) . "\n");
$jon->setOld(26);
print(strval($jon->getOld()) . "\n");
