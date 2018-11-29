<?php

class About{
    public function __construct
    {
        echo 'This is the home page';
        $this->_other();
    }

    protected function _other()
    {
        echo 'other func';
    }
}