<?php

namespace App\Controllers;

use \App\Models\Database;

use \PDO;
class Main{

    /**
     * Values for retrieves
     */

        /**
         * @var integer $id
         */
        public $id;

        /**
         * @var integer $name
         */
        public $name;



        public static function getRegisters( $where = null, $order = null, $limit = null, $fields = null )
        {
            return ( new Database( 'tb_games' ) )->selectRegisters( $where, $order, $limit, $fields )
                                                       ->fetchAll( PDO::FETCH_CLASS, self::class );
        }




}