<?php

$l_alas = (0.5 * 14.7 * 5.4);
$k_alas = (14.7 + 14.7 + 14.7);
$prisma_segitiga = number_format(((2 * $l_alas) + ($k_alas * 8.9)),3);

echo "$prisma_segitiga m3";
?>