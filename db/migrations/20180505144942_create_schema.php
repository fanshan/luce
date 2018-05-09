<?php

use Phinx\Migration\AbstractMigration;

/**
 * Class CreateSchema
 */
class CreateSchema extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $this->execute(<<<SQL
            create table gift (
                id              INTEGER primary key autoincrement,
                what            TEXT default '' not null,
                description     TEXT default '' not null,
                category        TEXT default '' not null,
                observed_price  REAL default 0 not null,
                online_shop_url TEXT default '' not null,
                bought_by       TEXT,
                is_buyer_anonymous BOOLEAN default FALSE not null
            );
    
            create unique index gift_what_uindex on gift (what);
    
            create table image (
                id         INTEGER primary key autoincrement,
                gift_id    INTEGER default 0 not null constraint image_gift_id_fk references gift on delete cascade,
                media_type TEXT    default '' not null,
                data       TEXT    default '' not null,
                height     INTEGER default 0 not null,
                width      INTEGER default 0 not null,
                alt        TEXT    default '' not null
            );
SQL
        );
    }

    public function down()
    {
        $this->execute(<<<SQL
            DROP TABLE gift;
            DROP TABLE image;
SQL
        );
    }
}
