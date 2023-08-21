<?php

namespace NuBox\StandardCardDeck\Model;

final class Deck
{
    /**
     * @var Card[]|null
     */
    private array $cards;

    public function __construct()
    {
        $this->initDeck();
        $this->shuffle();
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * @param Card[] $cards
     */
    public function setCards(array $cards): void
    {
        $this->cards = $cards;
    }

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function takeCard(): Card
    {
        return array_shift($this->cards);
    }

    private function initDeck(): void
    {
        foreach (Suit::cases() as $suit) {
            foreach (Type::cases() as $type) {

                $card = new Card();
                $card->setSuit($suit);
                $card->setType($type);

                $this->addCard($card);
            }
        }
    }

    public function shuffle(): void
    {
        shuffle($this->cards);
    }
}
