<?php

include '..\Lib\AutoLoad.php';
//session_start()
try {
    $app = new \Lib\FrontEnd();

    $app->run();
} catch (\Exception $ex) {
    echo '[' . __FILE__ . '] : ' . $ex->getMessage() . ' / ' . $ex->getFile() . ' // => ' . $ex->getLine();
}
