<?php

$file = $_GET['file'];

$text = file_get_contents($file);

include 'files.phtml';