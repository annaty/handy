<?php
class User
{
    private $_name;
    private $_lastName;
    private $_email;
    private $_skill = array();

    public function __contruct(string $name, string $lastName, string $email)
    {
        $this-> _name = $name;
        $this-> _lastName = $lastName;
        $this-> _email = $email;
    }

    public function new_skill($skill)
    {
        $this-> _skill[] = $skill;
    }

    
}
