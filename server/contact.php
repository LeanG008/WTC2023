<?php 
        $data = null;
        if(strtoupper($_SERVER['REQUEST_METHOD'] === 'POST') && $_POST['g-recaptcha-response']){

            $secretKey = '6Lejwa4kAAAAAIEwLD8V6SnqdzdzvgoDtS07jnSk';
            $recaptcha = $_POST['g-recaptcha-response'];
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
                    . $secret_key . '&response=' . $recaptcha;
            $response = file_get_contents($url);

            echo('<div> 
                <h1>
                    This page is not allowed.
                </h1>
             </div>');
             
             var_dump($_POST);
            $data = true;
        }
    
    if($data == false){
        header('Location: ../contact.php');
    }
    
    
?>


