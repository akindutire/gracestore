<?php
         namespace src\gracestore\config;

         use \zil\core\interfaces\Config as ConfigInterface;

         /**
          *   @Configuration:gracestore
          */

         class Config implements ConfigInterface{

             private const DB_DRIVER 	=   'mysql';
             private const DB_HOST 		=   'localhost';
             private const DB_USER 		=   'root';
             private const DB_PASSWORD 	=   '';
             private const DB_NAME 		=   'gracestore';
             private const DB_PORT 		=    3306;
             private const DB_ENGINE	=   'MyISAM';
             private const DB_CHARSET	=   'latin1';
             private const APP_NAME	= "gracestore";

             public function __construct(){  }

             /**
              * Specify app name and expected to be unique
              *
              * @return string
              */
             public function getAppName(): string{
                return self::APP_NAME;
             }

             /**
              * Database Info
              *
              * @return array
              */
             public function getDatabaseParams(): array{
                 return [
                     'driver'	=>	self::DB_DRIVER,
                     'host'		=>	self::DB_HOST,
                     'user'		=>	self::DB_USER,
                     'password'	=>	self::DB_PASSWORD,
                     'database'	=>	self::DB_NAME,
                     'port'		=>	self::DB_PORT,
                     'engine'	=>	self::DB_ENGINE,
                     'charset'	=>	self::DB_CHARSET
                 ];
             }

             /**
              * Other configuration options
              *
              * @return array
              */
             public function options(): array{
                 return [
                     'pageLoadStategy' => 'async',
                     'projectBasePath' => '/'
                 ];
             }

             public function getProductPath(){
                 return  $_SERVER['DOCUMENT_ROOT'].$this->options()['projectBasePath'].'/src/'.self::APP_NAME.'/asset/products';
             }
         }
