<?php

//tanpa
// class Conflict {

// }
// class Conflict {

// }

//dengan
namespace Data\One {
    class Conflict
    {
        function __construct()
        {
            echo "C1" . PHP_EOL;
        }
    }
    class Sample
    {
        function __construct()
        {
            echo "S1" . PHP_EOL;
        }
    }
    class Sample2
    {
        function __construct()
        {
            echo "S2" . PHP_EOL;
        }
    }
}

namespace Data\Two {
    class Conflict
    {
        function __construct()
        {
            echo "C2" . PHP_EOL;
        }
    }
}

namespace Helper {
    function HelpMe()
    {
        echo "Help Me" . PHP_EOL;
    }

    const APPLICATION = "Aplikasi 1.0" . PHP_EOL;
}

//global namespace
namespace {
    echo "Hello World" . PHP_EOL;
}
