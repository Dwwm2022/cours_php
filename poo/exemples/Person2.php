<?php
class Person2 implements JsonSerializable
{
    private $name;

    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'age' => $this->age
        ];
    }
}
header('Content-type:application/json');
// serialize object to json
$alice = new Person2('Alice', 20);
echo json_encode($alice);