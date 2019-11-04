<?php

//autoloads all of the classes for use so only need to call one page
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name.'.php';
});
?>