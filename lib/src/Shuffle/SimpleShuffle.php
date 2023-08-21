<?php

namespace NuBox\StandardCardDeck\Shuffle;

class SimpleShuffle implements ShuffleInterface
{
    public static function shuffle(array &$cards): void {

        shuffle($cards);
    }
}
