<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
print "私の名前は、" . $name;
echo "<br />";
$choice = htmlspecialchars($_GET['choice'], ENT_QUOTES);
print "ご注文の商品は" . $choice;
echo "<br />";
$order = htmlspecialchars($_GET['order'], ENT_QUOTES);
print "ご注文数は、" . $order;