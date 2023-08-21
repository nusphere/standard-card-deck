<?php

namespace NuBox\StandardCardDeck\Model;

enum Type: string
{
    case CARD_2 = '2';
    case CARD_3 = '3';
    case CARD_4 = '4';
    case CARD_5 = '5';
    case CARD_6 = '6';
    case CARD_7 = '7';
    case CARD_8 = '8';
    case CARD_9 = '9';
    case CARD_10 = '10';
    case CARD_JACK = 'jack';
    case CARD_QUEEN = 'queen';
    case CARD_KING = 'king';
    case CARD_ASS = 'ass';
}
