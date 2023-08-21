<?php

namespace NuBox\StandardCardDeck\Model;

use NuBox\StandardCardDeck\Shuffle\ShuffleInterface;
use NuBox\StandardCardDeck\Shuffle\SimpleShuffle;

final class Deck
{
    /**
     * @var Card[]|null
     */
    private array $cards;

    public function __construct(
        readonly ShuffleInterface $shuffle = new SimpleShuffle()
    ) {
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
        $this->shuffle::shuffle($this->cards);
    }

    public function toArray(): array
    {
        $deckArray = [];

        foreach ($this->cards as $card) {
            $deckArray[] = $card->toArray();
        }

        return $deckArray;
    }
}
