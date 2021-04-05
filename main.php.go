package main

import (
	"github.com/arnaud-lb/php-go/php-go"
	"time"
)

// call php.Export() for its side effects
var _ = php.Export("gophpgo", map[string]interface{}{
	"go1": go1,
	"go2": go2,
})

func go1() {
	go println("go1")
}

func go2() {
	go func() {
		time.Sleep(1)
		println("go2")
	}()
}

func main() {
}