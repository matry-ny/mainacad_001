<?php

class MyOwnException extends Exception
{
    protected $message = 'My message';

    protected $code = 321;
}

try {
    $int = random_int(1, 2);
    var_dump($int);
    if ($int % 2 === 0) {
//        throw new RuntimeException('Test');
//        throw new ErrorException('Error');
        throw new LogicException('Logic');
    } else {
        throw new MyOwnException();
    }
} catch (RuntimeException $exception) {
    var_dump('RUNTIME', $exception);
} catch (ErrorException $exception) {
    var_dump('ERROR', $exception);
} catch (MyOwnException $exception) {
    var_dump('My OWN', $exception);
} catch (Exception $exception) {
    var_dump('OTHER', $exception);
} finally {
    var_dump('AFTER EXCEPTION');
}
