<?php

interface WarriorInterface
{
    public function getStamina(): int;
    public function setStamina(int $stamina): void;
}

class JonSnow implements WarriorInterface {
    
    private string $firstname;
    private string $lastname;
    private int $stamina;

    public function __construct(
        $firstname,
        $lastname
    )
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->stamina = 100;
    }

    public function saySpeech()
    {
        return "Winter is comming... The death come";
    }

    public function getFullName()
    {
        return $this->firstname . " " . $this->lastname;
    }

    public function getStamina(): int
    {
        return $this->stamina;
    }

    public function setStamina(int $stamina): void
    {
        $this->stamina = $stamina;
    }

}

$jon = new JonSnow('Jon', 'Snow');

print($jon->getFullName() . "\n");
print($jon->saySpeech() . "\n");
print($jon->getStamina() . "\n");
$jon->setStamina(75);
print($jon->getStamina() . "\n");
