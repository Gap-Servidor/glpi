<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'administrador';
   public $dbpassword = '123';
   public $dbdefault = 'glpi';
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
   public $use_timezones = true;
}
