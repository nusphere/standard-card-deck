<?php

namespace NuBox\StandardCardDeck\Model;

final class Card
{
    private ?Suit $suit;

    private Type $type;

    public function getSuit(): ?Suit
    {
        return $this->suit;
    }

    public function setSuit(?Suit $suit): void
    {
        $this->suit = $suit;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setType(Type $type): void
    {
        $this->type = $type;
    }
}
