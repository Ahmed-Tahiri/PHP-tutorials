<!-- HTML in PHP -->
<?php
$name = "Ahmed";
$font_size = "100px";
$txt_color = "grey";
echo "<h1 style='color:red'>Hello My name is $name</h1>";
?>

<!-- PHP in HTML -->
<h2 style='color: <?php echo $txt_color; ?>; font-size: <?php echo $font_size; ?>'>I'm HTML tag and my color is <?php echo $txt_color; ?></h2>