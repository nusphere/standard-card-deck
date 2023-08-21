<?php

function drawBack(int $deckNumber = 1, int $width = 117, int $height = 180): string
{
    $filename = 'Card_back_0' . $deckNumber . '.svg';

    $height +=15;

    $content = file_get_contents(
        dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . $filename
    );

    return '<img class="deckback_' . $deckNumber . '" src="data:image/svg+xml;base64,' .base64_encode($content) .'" style="height: ' . $height . '; width: ' . $width . '">';
}
