<?php

use FastSimpleHTMLDom\Document;
use App\Proxy;

Route::prefix('crawl')->group(function (){
    Route::get('/proxy', function (){

        /*
        $html = file_get_html('https://www.sslproxies.org');

        foreach($html->find('#proxylisttable tr') as $element) {
            try{
                //echo "Ip : " . $element->find('td')[0]->plaintext . "</br>";
                //echo "Port : " . $element->find('td')[1]->plaintext . "</br>";
                $ip = $element->find('td')[0]->plaintext;
                $port = $element->find('td')[1]->plaintext;

                Proxy::create([
                    'ip' => $ip,
                    'port' => $port
                ]);
            }catch (Exception $e){
                echo $e;
            }
        }*/

        /*
        $html = file_get_html("http://www.freeproxylists.net/?c=&pt=&pr=HTTPS");

        echo $html->plaintext;

        foreach ( $html->find('.DataGrid tr') as $row ){
            try{
                $ip = $row->find('td')[0]->plaintext ;
                $port = $row->find('td')[1]->plaintext ;

                echo $ip . "</br>";
                echo $port . "</br>";
            }catch (Exception $e){
                echo $e;
            }
        }*/



        $html = file_get_html('https://www.proxynova.com/proxy-server-list/country-id/');

        foreach ( $html->find('#tbl_proxy_list tbody tr') as $row ){
            try{
                $ip = $row->find('td abbr')[0]->title ;
                $port = $row->find('td')[1]->plaintext ;

                //echo $ip . "</br>";
                //echo $port . "</br>";

                Proxy::create([
                    'ip' => $ip,
                    'port' => $port
                ]);
            }catch (Exception $e){
                echo $e;
            }
        }

    });
});