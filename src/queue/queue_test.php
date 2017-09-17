<?php
require_once('queue_class.php');

// キューにデータ追加
$q = new Queue();
$q->enqueue("Panda");
$q->enqueue("Tiger");
$q->enqueue("Bird");

// キューのデータを全て表示
while ($q->length() > 0) {
    $e = $q->dequeue();
    echo "[$e]\n";
}