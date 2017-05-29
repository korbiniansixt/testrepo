<?php
namespace Movies\Data;

class Connection
{
    /**
     *  Send a postrequest ($post) to any url ($url) and get the $result
     * @param $url
     * @param $post
     * @return mixed
     */
    static function postRequest($url, $post)
    {
        $ch = curl_init($url);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, ($post));
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
