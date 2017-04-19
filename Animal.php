<?php

class Animal
{
    protected $name = '';
    protected $sound = '';

    public function __construct($name = '') {
        $this->setName($name);
    }

    /**
     * Get animal name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set animal name
     *
     * @return string
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get a sound the animal makes
     *
     * @return string
     */
    protected function getSound() {
        return $this->sound;
    }

    /**
     * Set a sound the animal makes
     *
     * @param string $sound
     */
    protected function setSound($sound) {
        $this->sound = $sound;
    }

}
