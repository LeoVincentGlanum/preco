<?php

namespace App\ModelStates\GameStates;

class Validate extends \App\ModelStates\GameStatus
{

    public function color(): string
    {
        // TODO: Implement color() method.
    }
    public function name(): string
    {
        return trans('validate');
    }
}
