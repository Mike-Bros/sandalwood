<?php

namespace App\LearningClasses\TestingJargon;

class TagParser {

    public function __construct()
    {

    }

    public function parse(string $tags)
    {
        return preg_split('/ ?[,|] ?/', $tags);
    }
}
