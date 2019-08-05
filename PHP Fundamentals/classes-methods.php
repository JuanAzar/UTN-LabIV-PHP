<?php
    class MyClass
    {
        public $instanceAttribute = 0;
        public static $staticAttribute = 0;

        public function incrementInstanceAttribute()
        {
            $this->instanceAttribute++;
        }

        public static function incrementStaticAttribute()
        {
            MyClass::$staticAttribute++;
        }

        public function getAttributes()
        {
            echo "Instance: " . $this->instanceAttribute . "<br>";
            echo "Static: " . $this::$staticAttribute . "<br>";
        }
    }

    $object1 = new MyClass();
    $object2 = new MyClass();
    
    $object1->incrementInstanceAttribute();
    
    $object2->incrementInstanceAttribute();
    $object2->incrementInstanceAttribute();

    $object1::incrementStaticAttribute();

    echo "Object 1: <br>";
    $object1->getAttributes();

    echo "<br>";

    echo "Object 2: <br>";
    $object2->getAttributes();

    echo "<br>";

    echo "Class: <br>";
    echo MyClass::$staticAttribute;
?>

