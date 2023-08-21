<?php
include 'vendor/autoload.php';

echo drawCard('4 Karo');
echo drawCard('10 Herz');
echo drawCard('Dame Kreuz');
echo drawCard('Ass Pik', 120, 200);


echo drawCard([7, 'Kreuz']);
