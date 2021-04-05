<?php
// Create a class from the Go module, and return an instance of it
$module = phpgo_load("/gopath/src/github.com/chaseisabelle/gophpgo/gophpgo.so", "gophpgo");

// Display the methods defined by the class
//ReflectionClass::export($module);

// Call some method
foreach (range(1, 1000) as $i) {
    $module->go1();
    $module->go2();
}

// sleep to let them finish
sleep(1);