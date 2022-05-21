<?php

declare(strict_types=1);

namespace Katya\Compliments210522;

class Compliments
{
    public function getCompliment(string $name)
    {
        $compliment = $name . ", ты лапушка!";
        return $compliment;
    }
}