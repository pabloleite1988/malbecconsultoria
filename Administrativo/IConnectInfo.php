<?php

/* Interface de "configuração" para conexão com o SGBD.
 * Contém as CONSTANTES referentes aos dados de conexão e uma assinatura do
 * método "openConnect()" que fará a conexão.
 */

interface IConnectInfo
{     
    const HOST = "127.0.0.1";
    const USER = "root";
    const PW = "";
    const DB = "dbConsultoriaVinhos";
    const TYPE = "mysql";
    const PORT = "3306";
    
    public static function openConnect();
}