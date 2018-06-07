<?php

use Phinx\Seed\AbstractSeed;

/**
 * Class NewGiftSeeder
 */
class NewGiftSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id' => 43,
                'what'    => 'Regarde dans la nuit',
                'description' => 'Pour que papa et maman me lisent des histoires de chats ou autres ; libre à vous de me faire découvrir vos coup de coeur.',
                'category' => 'Mes livres',
                'observed_price' => 14.00,
                'online_shop_url' => 'https://livre.fnac.com/a10162772/Catherine-Jousselme-Regarde-dans-la-nuit#st=regardes%20dans%20la%20nuit%20na&ct=Rayons&t=p'
            ],
            [
                'id' => 44,
                'what'    => 'Mon imagier des contraires',
                'description' => 'Les imagiers un classique indispensable ; libre à vous de m’en trouver d’autres.',
                'category' => 'Mes livres',
                'observed_price' => 8.00,
                'online_shop_url' => 'https://livre.fnac.com/a4012647/Kididoc-Mon-imagier-des-contraires-Nathalie-Choux#int=%7CNonApplicable%7C6628358%7CNonApplicable%7CL1'
            ],
            [
                'id' => 45,
                'what'    => 'Vole petit oiseau',
                'description' => 'Un oiseau à déplacer au fil de l’histoire.',
                'category' => 'Mes livres',
                'observed_price' => 12.00,
                'online_shop_url' => 'https://livre.fnac.com/a8071102/Marion-Billet-Vole-petit-oiseau#int=%7CNonApplicable%7C9560368%7CNonApplicable%7CL1'
            ],
        ];

        $gift = $this->table('gift');
        $gift->insert($data)->save();

        $data = [
            [
                'gift_id' => 43,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/43.jpg')),
                'width' => 340,
                'height' => 340,
                'alt' => 'Regarde dans la nuit'
            ],
            [
                'gift_id' => 44,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/44.jpg')),
                'width' => 340,
                'height' => 340,
                'alt' => 'Mon imagier des contraires'
            ],
            [
                'gift_id' => 45,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/45.jpg')),
                'width' => 340,
                'height' => 340,
                'alt' => 'Vole petit oiseau'
            ]
        ];

        $image = $this->table('image');
        $image->insert($data)->save();
    }
}
