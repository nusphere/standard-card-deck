Standard Card Deck
======================

## Introduction
This small composer package helps to render playing cards via HTML.

![img.png](docs%2Fimg.png)

## Installation
Install through composer
```json
{
    "require" : {
        "nubox/standard-card-deck" : "*"
    }
}
```

## Usage

### Draw a card by a simple string

```php
include 'vendor/autoload.php';

echo drawCard('4 Karo');
echo drawCard('10 Herz');
```


### Generating a card deck, take a card from the deck and draw it (OOP Style)

```php
$deck = new \NuBox\StandardCardDeck\Model\Deck();

// or

$deck = \NuBox\StandardCardDeck\Singleton\DeckSingleton::getInstance()->getDeck();

echo drawCard($deck->takeCard());
```
