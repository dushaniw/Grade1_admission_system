<?php
class DBBackUp{
   public static function backup()
   {
      define("BACKUP_PATH", "C:\Users\DinsuG\Documents\ ");
      $server_name   = "localhost";
      $username      = "root";
      $password      = "";
      $database_name = "g1ams";
      $date_string   = date("Ymd");

      //$cmd = "mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} > " . BACKUP_PATH . "{$date_string}_{$database_name}.sql";
      $cmd='C:\wamp\bin\mysql\mysql5.6.17\bin\mysqldump -uroot -p g1ams > C:\Users\DinsuG\Documents\tut_backup.sql';
      exec($cmd);
   }

   public static function restore(){
      $restore_file  = "/home/abdul/20140306_world_copy.sql";
      $server_name   = "localhost";
      $username      = "root";
      $password      = "root";
      $database_name = "test_world_copy";

      $cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
      exec($cmd);
   }
}