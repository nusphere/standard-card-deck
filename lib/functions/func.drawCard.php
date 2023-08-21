<?php

function drawCard(string|array $card, int $width = 117, int $height = 180): string
{
    if (is_array($card)) {
        $card = implode('-', $card);
    }

    $card = strtolower($card);

    $type = match (true) {
        str_contains($card, 'heart'), str_contains($card, 'herz') => 'hearts',
        str_contains($card, 'spade'), str_contains($card, 'pik') => 'spades',
        str_contains($card, 'dia'), str_contains($card, 'karo') => 'diamonds',
        default => 'clubs'
    };

    $weight = match (true) {
        str_contains($card, '2') => '2',
        str_contains($card, '3') => '3',
        str_contains($card, '4') => '4',
        str_contains($card, '5') => '5',
        str_contains($card, '6') => '6',
        str_contains($card, '7') => '7',
        str_contains($card, '8') => '8',
        str_contains($card, '9') => '9',
        str_contains($card, '10') => '10',
        str_contains($card, 'jack'), str_contains($card, 'bube') => 'jack',
        str_contains($card, 'queen'), str_contains($card, 'dame') => 'queen',
        str_contains($card, 'king'), str_contains($card, 'könig') => 'king',
        default => 'ace'
    };

    $filename = 'English_pattern_' . $weight . '_of_' . $type . '.svg';

    $content = file_get_contents(
        dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . $filename
    );

    return '<img class="' . $card . '" src="data:image/svg+xml;base64,' .base64_encode($content) .'" style="height: ' . $height . '; width: ' . $width . '">';

}
