$f3 = require('vendor/autoload.php');
$f3->route('GET /',
    function() {
        $view = new View;
        echo $view->render ('views/home.html');
    }
);


