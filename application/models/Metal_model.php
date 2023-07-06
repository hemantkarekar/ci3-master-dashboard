
<?php

class Metal_model extends CI_Model
{

    function getLivePriceOf($metal)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://www.goldapi.io/api/' . $metal . '/INR');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'X-Access-Token: goldapi-ddn3rlipueps4-io';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        $data["gold_rate"] = $result;
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);
        return $result;
    }
}
