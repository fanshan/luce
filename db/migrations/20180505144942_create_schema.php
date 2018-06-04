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
    /*public function up()
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
    }*/

    public function change()
    {
        $table = $this->table('gift', ['id' => false, 'primary_key' => ['id']]);
        $table
            ->addColumn('id', 'integer', ['null' => false])
            ->addColumn('what', 'text', ['null' => false])
            ->addColumn('description', 'text', ['null' => false, 'default' => ''])
            ->addColumn('category', 'text', ['null' => false])
            ->addColumn('observed_price', 'float', ['null' => false, 'default' => 0])
            ->addColumn('online_shop_url', 'text', ['null' => false])
            ->addColumn('bought_by', 'text', ['null' => true])
            ->addColumn('is_buyer_anonymous', 'boolean', ['null' => false, 'default' => false])
            ->addIndex(['what'], ['unique' => true])
            ->create();

        $table = $this->table('image');
        $table
            ->addColumn('gift_id', 'integer', ['null' => false])
            ->addColumn('media_type', 'text', ['null' => false])
            ->addColumn('data', 'text', ['null' => false])
            ->addColumn('height', 'float', ['null' => false])
            ->addColumn('width', 'text', ['null' => false])
            ->addColumn('alt', 'text', ['null' => true])
            ->addForeignKey('gift_id', 'gift', 'id', ['delete'=> 'CASCADE'])
            ->create();
    }

    /**
     * Migrate Up.
     */
    public function up()
    {
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
    }
}
