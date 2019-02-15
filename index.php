<?php
  require 'Latte.php';
  require 'Acqua.php';

  $mukky = new Latte('Mukky', '0,5 lt', '0,70 €');

  // $mukky->marca = 'Mukky';
  // $mukky->litri = '0,5';
  // $mukky->prezzo = '0,70';


  $granarolo = new Latte('Granarolo', '1 lt', '1,00 €');

  // $granarolo->marca = 'Granarolo';
  // $granarolo->litri = '1';
  // $granarolo->prezzo = '1,00';


  $maremma = new Latte('Maremma', '1,5 lt', '1,50 €');

  $maremma->marca = 'Maremma';
  $maremma->litri = '1,5';
  $maremma->prezzo = '1,50';


  $tesorino = new Acqua('Tesorino', '1,5 lt', '3,00 €');
  $silva = new Acqua('Silva', '1,5 lt', '2,50 €');
  $panna = new Acqua('Panna', '2 lt', '3,00 €');

?>
<h2>Latte:</h2>
<ul>
  <li><?php echo $mukky->printProduct() ?></li>
  <li><?php echo $granarolo->printProduct() ?></li>
  <li><?php echo $maremma->printProduct() ?></li>
</ul>

<h2>Acqua:</h2>
<ul>
  <li><?php echo $tesorino->printProduct() ?></li>
  <li><?php echo $silva->printProduct() ?></li>
  <li><?php echo $panna->printProduct() ?></li>
</ul>
