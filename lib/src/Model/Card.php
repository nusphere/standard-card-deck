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

    public function getValue(): int
    {
        if ($this->type === Type::CARD_ASS) return 11;

        if (is_numeric($this->type->value)) return (int)$this->type->value;

        return 10;
    }

    public function toArray(): array
    {
        return [
            'suite' => $this->suit->name,
            'type' => $this->type->value,
            'value' => $this->getValue()
        ];
    }
}
