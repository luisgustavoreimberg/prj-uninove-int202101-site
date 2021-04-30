<?php

    function chamarAPI($metodo, $url, $dados){
        $curl = curl_init();
        
        switch($metodo){
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if($dados)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST,  'PUT');
                if($dados)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
                break;
            default:
                if($dados)
                    $url = $url."?".http_build_query($dados);
                break;
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $resultado = curl_exec($curl);
        curl_close($curl);
        return $resultado;
    }

?>