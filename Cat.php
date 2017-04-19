<?php

/**
 * Class Cat
 */
class Cat extends Animal
{
    public function __construct($name = '') {
        parent::__construct($name);

        $this->setSound('meow');
    }

    public function meow() {
        return sprintf('Cat %s is saying %s', $this->getName(), $this->getSound());
    }
}
