<?php
class MyClass {
    public $publicVar = 'Public Variable'; // Accessible from anywhere
    protected $protectedVar = 'Protected Variable'; // Accessible within the class and by inherited classes
    private $privateVar = 'Private Variable'; // Accessible only within the class

    public function publicMethod() {
        echo 'Public Method<br>';
    }

    protected function protectedMethod() {
        echo 'Protected Method<br>';
    }

    private function privateMethod() {
        echo 'Private Method<br>';
    }

    public function accessMembers() {
        echo $this->publicVar . '<br>'; // Accessible
        echo $this->protectedVar . '<br>'; // Accessible
        echo $this->privateVar . '<br>'; // Accessible within the class
        $this->publicMethod(); // Accessible
        $this->protectedMethod(); // Accessible
        $this->privateMethod(); // Accessible within the class
    }
}

$obj = new MyClass();
echo $obj->publicVar . '<br>';
$obj->publicMethod();
$obj->accessMembers();
