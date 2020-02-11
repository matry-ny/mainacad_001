<?php

try {
    throw new RuntimeException('Test');
} catch (RuntimeException $exception) {
    var_dump($exception);
}
