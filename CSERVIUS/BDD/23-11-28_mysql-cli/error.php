<?php 
/* error_reporting(E_ALL);
ini_set('display_errors', 1);
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error !== NULL) {
        $info = "[{$error['type']}] {$error['message']} in {$error['file']} on line {$error['line']}\n";
        echo nl2br($info);
    }
});

try {
    // Le code qui pourrait générer une erreur fatale
    errorInfo(); // Cette fonction n'est pas définie et va générer une erreur fatale
} catch (Exception $e) {
    nl2br('Exception caught: ' . $e->getMessage());
} catch (ErrorException $e) {
    nl2br('Error caught: ' . $e->getMessage());
} */
?>