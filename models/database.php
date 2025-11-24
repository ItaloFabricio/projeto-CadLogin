<?php

    class Database {
        private static $instance = null;

        public static function getConnection() {

            //se eu não tiver nenhuma instancia, crio ela
            if(!self::$instance) {
                $host = 'localhost';
                $db = 'sistema_usuarios';
                $user = 'root';
                $password = '';

                //PDO - representa uma conexão entre o php e o banco de dados
                self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$instance;
        }
    }

?>