<?php

/* Classe para conexão com o SGBD.
 * Implementa o método "openConnect()" da interface "IConnectInfo", fornecendo
 * detalhes da conexão com o SGBD por meio da classe PDO - PHP Data Objects.
 * Funciona com base na ideia de uma "fábrica de conexões", onde são "criados"
 * objetos de conexão com diferentes SGBDs.
 */

include_once 'IConnectInfo.php';

final class Connection implements IConnectInfo
{   
    public static function openConnect()
    {
        $host = IConnectInfo::HOST;
        $user = IConnectInfo::USER;
        $pw = IConnectInfo::PW;
        $db = IConnectInfo::DB;
        $type = IConnectInfo::TYPE;
        $port = IConnectInfo::PORT;

        switch ($type)
        {            
            case "mysql":
                $conn = new PDO("$type:host=$host; port=$port; dbname=$db;", $user, $pw);
                break;
            
            # Outros SGBDs...
            
            default :
                echo "Dados de conexão inválidos.";
        }
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;     
    }
}