<?php
namespace Classes;

class User {
    private $name;
    private $age;
    private $email;

    public function __call($method, $arguments) {
        if (strpos($method, 'set') === 0 && method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $arguments);
        } else {
            throw new UserException($method);
        }
    }

    private function setName($name) {
        $this->name = $name;
    }

    private function setAge($age) {
        $this->age = $age;
    }

    public function getAll() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email
        ];
    }
}