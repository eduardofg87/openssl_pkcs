<?php
try { 
    $p7s = new Openssl\P7s('tests/001.phpt');
} catch (Exception $e) {
    echo 'exception throwed';
}
