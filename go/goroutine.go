package main
import "fmt"
import "time"

func foo(from string) {
	for i := 1; i <= 3; i++ {
		fmt.Printf("from %s #%d\n", from, i)
		time.Sleep(100*time.Millisecond)
	}
}

func main() {
	foo("직접")
	go foo("고루틴")
	foo("직접2")
	time.Sleep(1*time.Second)
}

