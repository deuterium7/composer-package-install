<?php

namespace src;

class Member
{
    private $name;
    private $surname;
    private $location;

    public function __construct($name, $surname, $location)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->location = $location;
    }

    /**
     * Полное имя пользователя
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->name . " " . $this->surname;
    }

    /**
     * Местонахождение пользователя
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->getFullname() . " is locate there: " . $this->location;
    }
}