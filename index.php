<?php
include 'vendor/autoload.php';

echo drawCard('4 Karo');
echo drawCard('10 Herz');
echo drawCard('Dame Kreuz');
echo drawCard('Ass Pik', 120);


echo drawCard([7, 'Kreuz']);

echo drawCard('Herz Ass');
echo drawCard('10 Pik');
echo drawBack();
echo '<br>';
echo drawBack(2);
