<?php

namespace NuBox\StandardCardDeck\Singleton;

use NuBox\StandardCardDeck\Model\Deck;

final class DeckSingleton
{
    private static $instance;

    private $deck;

    public static function getInstance(): DeckSingleton
    {
        if (!self::$instance instanceof DeckSingleton) {
            self::$instance = new DeckSingleton();
        }

        return self::$instance;
    }

    public function setDeck(Deck $deck): void
    {
        $this->deck = $deck;
    }

    public function getDeck(): Deck
    {
        if (!$this->deck instanceof Deck) {
            $this->deck = new Deck();
        }

        return $this->deck;
    }
}


