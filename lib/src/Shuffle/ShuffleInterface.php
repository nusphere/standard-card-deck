<?php

namespace NuBox\StandardCardDeck\Shuffle;

interface ShuffleInterface
{
    public static function shuffle(array &$cards): void;
}
