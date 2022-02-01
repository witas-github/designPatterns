<h1>Design patterns: singleton</h1>
<?php

class Connection {
    public function __construct()
    {
        echo "Create new object<br />";
    }

    public static function getInstance(): self {
        static $instance = null;
        if ($instance === null) {
            $instance = new static();
        } else {
            echo "Use existing instance<br />";
        }
        return $instance;
    }
}

$c1 = new Connection();
$c2 = new Connection();
$c3 = new Connection();
echo "<br />";


$c_1 = Connection::getInstance();
$c_2 = Connection::getInstance();
$c_3 = Connection::getInstance();