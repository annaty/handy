<?php
class User
{
    public $_name;
    public $_lastName;
    public $_email;
    private $_skill = array();
    public $_password;

    public function __contruct(string $name, string $lastName, string $email, $password)
    {
        $this-> _name = $name;
        $this-> _lastName = $lastName;
        $this-> _email = $email;
        $this-> _password = $password;
    }

    public function new_skill($skill)
    {
        $this-> _skill[] = $skill;
    }

    
}
