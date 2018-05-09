<?php

use Phinx\Seed\AbstractSeed;

/**
 * Class GiftSeeder
 */
class GiftSeeder extends AbstractSeed
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
        $this->table('gift')->truncate();
        $this->execute('delete from sqlite_sequence where name=\'gift\';');

        $this->table('image')->truncate();
        $this->execute('delete from sqlite_sequence where name=\'image\';');

        $data = [
            [
                'what'    => 'Projecteur musical d\'Étoiles',
                'description' => 'Petite lampe pour aider bébé à s\'endormir.',
                'category' => 'Chambre de Luce',
                'observed_price' => 33.00,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/pabobo-projecteur-musical-d-etoiles,sante,produit,-18248-39973,9.bien-etre.html'
            ],
            [
                'what'    => 'Tortue à promener',
                'description' => 'Une tortue à promener partout.',
                'category' => 'Jouets',
                'observed_price' => 19.00,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/janod-zigolo--tortue-a-promener--des-12-mois-,bebe,produit,-17358-38508,3.couche-lavable.html'
            ],
            [
                'what'    => 'Coffret de soins',
                'description' => 'Pour nettoyer les petites fesses.',
                'category' => 'Soins',
                'observed_price' => 61,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/les-tendances-d-emma-kit-eco-chou-deluxe--biface-coton-bio,bebe,produit,-19912-43030,3.couche-lavable.html'
            ],
            [
                'what'    => 'Bol et tasse fille',
                'description' => 'Petits déjeuners en famille',
                'category' => 'Repas',
                'observed_price' => 39,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/repas-bebe/couverts-bebe/bol-et-tasse-fille-91642160'
            ],
            [
                'what'    => 'Tapis d\'activités tipi - camping',
                'description' => 'Jouer en se trainant par terre sous un tipi.',
                'category' => 'Jouets',
                'observed_price' => 100,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/chambre-bebe-enfant/tentes-tipis/tapis-d-activites-tipi-camping-91395820'
            ],
            [
                'what'    => 'Bac à albums à roulettes',
                'description' => 'Des livres pour raconter des histoires',
                'category' => 'Chambre de Luce',
                'observed_price' => 73,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/chambre-bebe-enfant/mobilier-enfant/bac-a-albums-a-roulettes-wesco-91679640'
            ],
            [
                'what'    => 'Boîte à musique la chanson du lapin chou',
                'description' => 'Une chanson douce que me chantait ma maman.',
                'category' => 'Chambre de Luce',
                'observed_price' => 19,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/chambre-bebe-enfant/boites-musique/boite-a-musique-la-chanson-du-lapin-chou-91471190'
            ],
            [
                'what'    => 'Bavoirs',
                'description' => 'Il faut bien se nourrir et ne pas trop me tacher',
                'category' => 'Repas',
                'observed_price' => 14,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/repas-bebe/bavoirs/lot-de-3-bavoirs-kushies-6-12-mois-green-91597600'
            ],
        ];

        $gift = $this->table('gift');
        $gift->insert($data)->save();

        $data = [
            [
                'gift_id' => 1,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/18248.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Projecteur Musical d\'Étoiles'
            ],
            [
                'gift_id' => 2,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/17358.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Tortue à promener'
            ],
            [
                'gift_id' => 3,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/19912.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Coffret de soins'
            ],
            [
                'gift_id' => 4,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/6833E944902EC6FDD5D4EBFF3C71D9FC.jpg')),
                'width' => 576,
                'height' => 474,
                'alt' => 'Bol et tasse fille'
            ],
            [
                'gift_id' => 5,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/650.jpg')),
                'width' => 600,
                'height' => 600,
                'alt' => 'Tapis d\'activités tipi - camping'
            ],
            [
                'gift_id' => 6,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/651.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Bac à albums à roulette'
            ],
            [
                'gift_id' => 7,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/652.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Boîte à musique la chanson du lapin chou'
            ],
            [
                'gift_id' => 8,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/653.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Bavoirs'
            ],
        ];

        $image = $this->table('image');
        $image->insert($data)->save();
    }
}
