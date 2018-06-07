<?php

use Phinx\Migration\AbstractMigration;

/**
 * Class CreateSchema
 */
class CreateSchema extends AbstractMigration
{
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
}
