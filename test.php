<?php

use Illuminate\Support\Collection;

$foo = new Foo();

$collection = new Collection();

class Foo
{
    public function bar($baz = 'bob')
    {
        return $baz;
    }

    public function baz($baz = 'bob')
    {
        return;
    }
}
