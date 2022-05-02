<?php
class ParentClass {
    public function printMe () {
        echo 'i am ' . self::who();
    }
    public static function who () {
        return 'parent';
    }
}

class ChildClass extends ParentClass {
    public static function who () {
        return 'child';
    }
}

$a = new ChildClass();
$a->printMe();
