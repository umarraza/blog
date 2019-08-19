<?php

namespace App\Models\Traits;

trait Method {

    public function printThis()
    {
        echo "Trait executed";
    }
    
    public function anotherMethod()
    {
        echo "Trait – anotherMethod() executed";
    }

}
