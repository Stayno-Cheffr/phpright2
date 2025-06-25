<?php
    declare(strict_types=1);

    // spl_autoload_register(function ($class) {
    //     $path = __DIR__.'/../'.lcfirst(str_replace('\\', '/', $class)).'.php';

    //     if(file_exists($path)){
    //         require $path;
    //     }   
    // });

    require __DIR__.'/../vendor/autoload.php';

    require_once '../Transaction.php';

    $obj = new \stdClass();
    $obj->name = 'Test Object';
    $obj->age = 42;

    var_dump($obj);

    $transaction = new Transaction(100, 'Test Transaction');
    $transaction->addTax(8)->applyDiscount(10);

    var_dump($transaction->getAmount());

    echo '<br>';

    $id = new \Ramsey\Uuid\UuidFactory();
    echo $id->uuid4();

    echo '<br>';

    echo $transaction::STATUS_PAID . '<br>';

    $transaction->setStatus(Transaction::STATUS_PAID);
    var_dump($transaction);
    echo '<br>';

    $transaction = new Transaction(100, 'Test Transaction');
    $transaction = new Transaction(100, 'Test Transaction');
    $transaction = new Transaction(100, 'Test Transaction');
    var_dump(Transaction::$count);
    echo '<br>';