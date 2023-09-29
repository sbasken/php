<?php 
  $drinks = ["coffee" => 3.5, "tea" => 3.8, "hot chocolate" => 4.3, "orange juice" => 2.7, "cappucino" => 4.3, "latte" => 4.8];
  $pastries = ["croissants", "savory wheels", "chocolate croissants", "danish", "veggie danish", "donuts", "coffee cake"];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
  <?php foreach($drinks as $drink => $price): ?>
    <li><?php echo "$drink - $$price"; ?></li>
  <?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
  <?php for($i = 0; $i < count($pastries); $i++): ?>
  <li><?php echo $pastries[$i] ?> </li>
  <?php endfor ?>
</ul>
