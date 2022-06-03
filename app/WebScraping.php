<?php

namespace App;

use ZipArchive;
use DOMDocument;

/**
 * 
 * Web scraping site SIGTAP (http://sigtap.datasus.gov.br/tabela-unificada/app/download.jsp)
 * Baixa o arquivo ZIP da última competência disponível
 * github
 * 
 */
class WebScraping
{
    /**
     * Descompacta o arquivo ZIP na pasta 'files'
     *
     * @param string $origin
     * @return void
     */
    public static function unzip(string $origin):void
    {
        $destiny = "files\\";

        $zip = new ZipArchive;
        $zip->open($origin);

        if ($zip->extractTo($destiny) === TRUE) {

            echo '<li>Passo 3 - OK!</li>';
        } else {

            echo '<li>Passo 3 - Erro! O arquivo não foi descompactado.</li>';
        }

        $zip->close();
        
        unlink($origin);
    }

    /**
     * Realiza o download do arquivo ZIP inerente à última competência disponível
     *
     * @param array $links
     * @return void
     */
    public static function getLastCompetence(array $links):void
    {
       if(isset($links[6]['url']))
       {
            $url = $links[6]['url'];
            $aux = explode('/', $url);
            $name = $aux[7];
            $path = "files\\{$name}";

            file_put_contents($path, file_get_contents($url));
            
            echo "<li>Passo 2 - OK!</li>";
            echo "<li>Passo 3 - Descompactando arquivos para a pasta <b>files</b>;</li>";

            self::unzip($path);

       }else{
           
            echo '<li>Passo 2 - Erro! A página do SIGTAP está indisponível.</li>';
            http_response_code(503);            
       }        
    }

    /**
     * Realiza o web scraping da página e captura os links disponíveis
     *
     * @return void
     */
    public static function getLink():void
    {
        echo "<li>Passo 1 - Lendo a URL;</li>";

        libxml_use_internal_errors(true);

        $xml = new DOMDocument();

        $xml->loadHTMLFile(self::getUrl());

        $links = array();

        foreach ($xml->getElementsByTagName('a') as $link) {
            $links[] = array('url' => $link->getAttribute('href'), 'text' => $link->nodeValue);
        }

        echo "<li>Passo 2 - Baixando a última competência;</li>";

        self::getLastCompetence($links);
    }

    /**
     * Lê o parâmetro URL_SIGTAP disponível no arquivo config.txt
     *
     * @return string
     */
    public static function getUrl():string
    {
        $url = file("config.txt");
        $url = explode("=",implode($url));  
        
        echo "<li>Passo 1 - OK!</li>";

        return (string) $url[1];
    }
}
