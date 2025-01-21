<?php
$name = htmlspecialchars($_POST['text'], ENT_QUOTES);
print '私の名前は、'. $name. '<br>';
$item = htmlspecialchars($_POST['radio'], ENT_QUOTES);
print 'ご希望商品は、'. $item. '<br>';
$order = htmlspecialchars($_POST['number'], ENT_QUOTES);
print '注文数は、'. $order;