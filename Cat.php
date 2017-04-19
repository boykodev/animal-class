<?php

/**
 * Class Cat
 */
class Cat extends Animal
{
    protected $sound = 'meow';

    public function meow() {
        return sprintf('Cat %s is saying %s', $this->getName(), $this->getSound());
    }
}
