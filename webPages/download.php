<?php

if (isset($_POST['download_csv_form1'])) {
    // Handle download for Form 1
    $file = 'templeteSTD.csv';
} else if (isset($_POST['download_csv_form2'])) {
    $file = 'templeteADV.csv';
} else {
    // Handle other cases or show an error message
    echo 'Invalid form submission.';
    exit;
}

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
} else {
    echo 'File not found.';
    exit;
}

?>