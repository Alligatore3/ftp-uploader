<?php require './constants.php'; ?>

<?php
/*
    - Apro una connessione FTP che mi restituisce un id
    - Effetto l'autenticazione con i dati precedentemente impostati
    - A questo punto occorre effettuare l'effettivo upload dei file:
    - Mi Sposto nella cartella in cui voglio effettuare l'upload
    - upload del File
    - Chiudo la connessione
*/
function pushToFTPServer($file_name){
    $id_connection = ftp_connect(SERVER); 
    $login = ftp_login($id_connection, USERNAME, PASSWORD);
    
    ftp_chdir($id_connection, FTP_DESTINATION);
    
    echo ftp_put($id_connection, $file_name, UPLOAD_DESTINATION . $file_name , FTP_ASCII)
    ? showSuccess($file_name . ': Trasferimento FTP effettuato con successo')
    : showError($file_name . ': Errore durante il trasferimento FTP');
    
    ftp_close($id_connection);
}

function showSuccess($message) {
$html_DOM = <<<XYZ
    <div class="success-message">
        <i class="far fa-check-circle"></i>
        <span>$message</span>
    </div>
XYZ;
    echo $html_DOM;
}

function showError($message) {
$html_DOM = <<<XYZ
    <div class="error-message">
        <i class="fas fa-times"></i>
        <span>$message</span>
    </div>
XYZ;
    echo $html_DOM;
}