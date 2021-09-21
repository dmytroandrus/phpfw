<?php

namespace phpfw\core;

require LIBS . '/rb-mysql.php';

// use PDO;
use R;
use phpfw\core\traits\TSingletone;


class DB
{
    use TSingletone;
    protected $pdo;
    // protected static $instance;
    public static $countSql = 0;
    public static $queries = [];

    private function __construct()
    {
        // RedBean
        $db = require ROOT . "/config/config_db.php";
        R::setup($db['dsn'], $db['username'], $db['password']);
        R::freeze(true);
        // R::fancyDebug(true);

        // PDO 
        // $options = [
        //     \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,
        //     \PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC
        // ];

        // $this->pdo = new \PDO($db['dsn'], $db['username'], $db['password'], $options);
    }

    // public static function getInstance()
    // {
    //     if (empty(self::$instance)) {
    //         self::$instance = new self;
    //     }
    //     return self::$instance;
    // }

    // public function execute($sql, $params = [])
    // {
    //     self::$countSql++;
    //     self::$queries[] = $sql;
    //     $stmt = $this->pdo->prepare($sql);
    //     return $stmt->execute($params);
    // }

    // public function query($sql, $params = [])
    // {
    //     self::$countSql++;
    //     self::$queries[] = $sql;
    //     $stmt = $this->pdo->prepare($sql);
    //     $res = $stmt->execute($params);
    //     if ($res !== false) {
    //         return $stmt->fetchAll();
    //     }
    //     return [];
    // }
}
