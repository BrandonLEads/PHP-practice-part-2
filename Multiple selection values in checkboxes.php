<?php
echo '<br /><b><u>From The Book</u></b><br />';
?>

<html>
<head><title>Personality</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
 Select your personality attributes:<br />
 <select name="attributes[]" multiple>
 <option value="perky">Perky</option>
 <option value="morose">Morose</option>
 <option value="thinking">Thinking</option>
 <option value="feeling">Feeling</option>
 <option value="thrifty">Spend-thrift</option>
 <option value="shopper">Shopper</option>
 </select><br />
 <input type="submit" name="s" value="Record my personality!" />
</form>
<?php if (array_key_exists('s', $_GET)) {
 $description = join(' ', $_GET['attributes']);
 echo "You have a {$description} personality.";
} 
?>

</body>
</html>


<?php
echo '<br /><b><u>My Examples</u></b><br />';
?>

<html>
<head><title>Menu</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
 Select your menu item:<br />
 <select name="attributes[]" multiple>
 <option value="ramen">Ramen</option>
 <option value="udon">Udon</option>
 <option value="gyoza">Gyoza</option>
 <option value="beer">Beer</option>
 <option value="green tea">Green Tea</option>
 <option value="extra noodles">Extra Noodles</option>
 </select><br />
 <input type="submit" name="s" value="Send to cart" />
</form>
<?php if (array_key_exists('s', $_GET)) {
 $description = join(' ', $_GET['attributes']);
 echo "You picked {$description}. Would you like to add another item?.";
} 
?>

</body>
</html>

