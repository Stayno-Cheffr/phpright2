<?php

    declare(strict_types=1);
    require_once '../Transaction.php';

    $obj = new \stdClass();
    $obj->name = 'Test Object';
    $obj->age = 42;

    var_dump($obj);

    $transaction = new Transaction(100, 'Test Transaction');
    $transaction->addTax(8)->applyDiscount(10);

    var_dump($transaction->getAmount());