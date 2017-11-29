<?php

use yii\db\Migration;

/**
 * Class m171129_195813_user
 */
class m171129_195813_user extends Migration
{

    public function up()
    {

        $this->execute(
            "CREATE TABLE  `user` (
         `id` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
         `email` VARCHAR( 40 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
         `pswd` VARCHAR( 64 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
         `auth_key` VARCHAR( 32 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
         `token` VARCHAR( 40 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
         `name` VARCHAR( 255 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
         `surname` VARCHAR( 255 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
         `role` ENUM(  'user',  'admin' ) COLLATE utf8_bin NOT NULL DEFAULT  'user',
         `status` ENUM(  'waitconfirm',  'active',  'blocked',  'deleted' ) COLLATE utf8_bin NOT NULL DEFAULT  'waitconfirm',
         `created` TIMESTAMP NOT NULL DEFAULT  '2000-01-01 00:00:00',
         `updated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
         `image` VARCHAR( 40 ) COLLATE utf8_bin NOT NULL DEFAULT  '',
        PRIMARY KEY (  `id` ) ,
        UNIQUE KEY  `email` (  `email` )
        ) ENGINE = INNODB DEFAULT CHARSET = utf8 COLLATE = utf8_bin"
        );
}

public function down()
{
    $this->dropTable('user');

}
}
