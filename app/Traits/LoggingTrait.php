<?php
namespace App\Traits;
trait LoggingTrait {
    public function log($message){
        file_put_contents(__DIR__.'/../../logs/app.log', date('Y-m-d H:i:s')." - $message\n", FILE_APPEND);
    }
}