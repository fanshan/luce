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
        if ($this->getAdapter()->getAdapterType() == 'pgsql') {
            $this->execute('truncate public.gift cascade;');
            $this->execute('truncate public.image cascade;');

            $this->execute('ALTER SEQUENCE image_id_seq RESTART WITH 1;');
        } else {
            $this->table('gift')->truncate();
            $this->execute('delete from sqlite_sequence where name=\'gift\';');

            $this->table('image')->truncate();
            $this->execute('delete from sqlite_sequence where name=\'image\';');
        }

        $data = [
            [
                'id' => 1,
                'what'    => 'Bac à livres à roulettes',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 75.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/chambre-bebe-enfant/mobilier-enfant/bac-a-albums-a-roulettes-wesco-91679640'
            ],
            [
                'id' => 2,
                'what'    => 'Babyphone',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 70.00,
                'online_shop_url' => 'https://www.amazon.fr/Philips-SCD501-00-Babyphone-Secteur/dp/B00KR2DYGS/ref=sr_1_2_sspa?s=baby&ie=UTF8&qid=1524754880&sr=1-2-spons&keywords=babyphone+philips+avent&psc=1'
            ],
            [
                'id' => 3,
                'what' => 'Banc avec rangement jouets blanc',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 80.00,
                'online_shop_url' => 'https://www.ikea.com/fr/fr/catalog/products/S59252637/'
            ],
            [
                'id' => 4,
                'what' => 'Coussin pour banquette noir',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.ikea.com/fr/fr/catalog/products/00332368/'
            ],
            [
                'id' => 5,
                'what' => 'Veilleuse portable',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 40.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/chambre-bebe-enfant/veilleuses/veilleuse-enfant-nomade-91219520',
                'bought_by' => 'Christophe PERUVIEN',
                'is_buyer_anonymous' => 0
            ],
            [
                'id' => 6,
                'what' => 'Drap housse turquoise',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 10.00,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/p-amp-acute-tit-basile-drap-housse-bebe-jersey-bio--60-x-120-cm,bebe,produit,0-3783-46885,3.couche-lavable.html'
            ],
            [
                'id' => 7,
                'what' => 'Drap housse jaune soleil',
                'description' => '',
                'category' => 'Ma chambre',
                'observed_price' => 10.00,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/p-amp-acute-tit-basile-drap-housse-bebe-jersey-bio--60-x-120-cm,bebe,produit,0-3783-46886,3.couche-lavable.html'
            ],
            [
                'id' => 8,
                'what' => 'Sophie la girafe',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 13.00,
                'online_shop_url' => 'https://www.amazon.fr/gp/product/B000IDSLOG/ref=s9_acsd_hps_bw_c_x_6_w'
            ],
            [
                'id' => 9,
                'what' => 'Mon premier livre de comptines',
                'description' => '',
                'category' => 'Mes livres',
                'observed_price' => 13.00,
                'online_shop_url' => 'https://livre.fnac.com/a6057283/Rosalinde-Bonnet-Mon-premier-livre-de-comptines'
            ],
            [
                'id' => 10,
                'what' => 'Mon grand livre de comptines',
                'description' => '',
                'category' => 'Mes livres',
                'observed_price' => 13.00,
                'online_shop_url' => 'https://livre.fnac.com/a7304285/Camille-Jourdy-Mon-grand-livre-de-comptines-chansons-mimees-et-jeux-de-doigts-CD-offert'
            ],
            [
                'id' => 11,
                'what' => 'Mon grand livre des berceuses',
                'description' => '',
                'category' => 'Mes livres',
                'observed_price' => 13.00,
                'online_shop_url' => 'https://livre.fnac.com/a8657908/Sophie-Rohrbach-Mon-grand-livre-des-berceuses-classiques-traditionnelles-et-d-ailleurs#int=S:Suggestion%7CFA:LIV:Fiche_Article%7CNonApplicable%7C8657908%7CBL3%7CL1'
            ],
            [
                'id' => 12,
                'what' => 'Tapis d\'activités tipi',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 100.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/chambre-bebe-enfant/tentes-tipis/tapis-d-activites-tipi-camping-91395820'
            ],
            [
                'id' => 13,
                'what' => 'Panier de rangement',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 30.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/enfant/jouets-eveil/jeux-de-bain/panier-de-rangement-bain-moby-91396180'
            ],
            [
                'id' => 14,
                'what' => 'Canards de bain',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 15.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/toilette-soin/baignoire-jeux-bain/-canards-bain-empilables-filles-rose-91394120'
            ],
            [
                'id' => 15,
                'what' => 'Coffret de bain',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 16.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/enfant/librairie/decouverte-apprentissage/mon-coffret-de-bain-11184220'
            ],
            [
                'id' => 16,
                'what' => 'Bateau ours polaire',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 17.00,
                'online_shop_url' => 'https://www.amazon.fr/Plantoys-Pt5712-Bateau-Ours-Polaire/dp/B00W5HOOI0/ref=pd_bxgy_21_img_3?_encoding=UTF8&pd_rd_i=B00W5HOOI0&pd_rd_r=E6A61WDEN6NF1SWJDVMS&pd_rd_w=1yF6t&pd_rd_wg=031ZX&psc=1&refRID=E6A61WDEN6NF1SWJDVMS'
            ],
            [
                'id' => 17,
                'what' => 'Mon sous-marin',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 17.00,
                'online_shop_url' => 'https://www.amazon.fr/Plantoys-Pt5669-Jouet-Bain-Sous-marin/dp/B00I55S2ZC/ref=pd_sim_21_1?_encoding=UTF8&pd_rd_i=B00I55S2ZC&pd_rd_r=MA7F1405NHY1YTFPVMGK&pd_rd_w=18BQw&pd_rd_wg=0zZnZ&psc=1&refRID=MA7F1405NHY1YTFPVMGK'
            ],
            [
                'id' => 18,
                'what' => 'Livre évolutif',
                'description' => '',
                'category' => 'Mes livres',
                'observed_price' => 17.00,
                'online_shop_url' => 'https://www.oxybul.com/jouets-d-eveil/1ers-jouets-d-eveil/livre-en-tissu/livre-evolutif-en-tissu-3-en-1/produit/328405'
            ],
            [
                'id' => 19,
                'what' => 'Mobile musicale Lilliputiens',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 73.00,
                'online_shop_url' => 'https://www.amazon.fr/Lilliputiens-Mobile-musicale-Ferme-avec/dp/B06X6KKQ2Y/ref=sr_1_66?s=baby&ie=UTF8&qid=1527181655&sr=1-66&keywords=mobile+musicale+bebe+bois'
            ],
            [
                'id' => 20,
                'what' => 'Hochet vibrant',
                'description' => '',
                'category' => 'Mes jouets',
                'observed_price' => 15.00,
                'online_shop_url' => 'https://www.laredoute.fr/ppdp/prod-500582486.aspx'
            ],
            [
                'id' => 21,
                'what' => 'Goupillon à biberon et à tétine',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 12.00,
                'online_shop_url' => 'https://www.amazon.fr/gp/product/B0038JDVCY/ref=s9_acsd_zwish_hd_bw_b4KQLi3_c_x_w?pf_rd_m=A1X6FK5RDHNB96&pf_rd_s=merchandised-search-6&pf_rd_r=VVGKGRCEYT02AJG16HX5&pf_rd_t=101&pf_rd_p=90ace44d-3dfb-5d60-aba6-6194e5a9eafc&pf_rd_i=3966338031'
            ],
            [
                'id' => 22,
                'what' => 'Égouttoir pour biberons',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 19.00,
                'online_shop_url' => 'https://www.amazon.fr/gp/product/B00GN0S81Y/ref=s9_acsd_simh_hd_bw_b4KQLyB_c_x_w?pf_rd_m=A1X6FK5RDHNB96&pf_rd_s=merchandised-search-3&pf_rd_r=23687SJ8G1ZYM52FRFXT&pf_rd_t=101&pf_rd_p=d2d814c5-6d46-5f5e-b19e-972efc97fd15&pf_rd_i=3966339031'
            ],
            [
                'id' => 23,
                'what' => 'Hochet de dentition à réfrigérer',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 4,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/remond-hochet-de-dentition-a-refrigerer--rose-translucide,bebe,produit,0-21185-44952,3.couche-lavable.html'
            ],
            [
                'id' => 24,
                'what' => 'Grignoteuse',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 19.00,
                'online_shop_url' => 'https://www.amazon.fr/Grignoteuse-GUHEE-Alimentation-Alimentaire-Transition/dp/B077Z1N38C/ref=sr_1_6?s=baby&ie=UTF8&qid=1524758143&sr=1-6&keywords=anneaux%2Bde%2Bdentition%2Bfresh&th=1'
            ],
            [
                'id' => 25,
                'what' => 'Bol et tasse',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 40.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/repas-bebe/couverts-bebe/bol-et-tasse-fille-91642160'
            ],
            [
                'id' => 26,
                'what' => 'Set de vaisselle',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 17.00,
                'online_shop_url' => 'https://www.amazon.fr/dp/B01BPBCSTI/ref=sspa_dk_detail_6?psc=1&pd_rd_i=B01BPBCSTI&pd_rd_wg=j5ZpT&pd_rd_r=H9JCRCTV5KMCDDM7ETM8&pd_rd_w=LsjsF'
            ],
            [
                'id' => 27,
                'what' => 'Bavette licorne',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.amazon.fr/Skip-Hop-SK-232124-bavoir-Vache/dp/B00WANFL5O/ref=pd_sim_75_4?_encoding=UTF8&pd_rd_i=B00WANFP3M&pd_rd_r=H112TX7TQC6XC44WMW8Y&pd_rd_w=xg2kN&pd_rd_wg=ETRvz&refRID=H112TX7TQC6XC44WMW8Y&th=1',
                'bought_by' => 'Nathalie F.',
                'is_buyer_anonymous' => 1
            ],
            [
                'id' => 28,
                'what' => 'Bavette singe',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.amazon.fr/Skip-Hop-232104-bavoir-Hibou/dp/B004IEBU5S/ref=pd_bxgy_75_img_2?_encoding=UTF8&pd_rd_i=B004IEBU6C&pd_rd_r=F0CCT40ZYY0ZEXM9QC4A&pd_rd_w=aEZyK&pd_rd_wg=9iNvH&refRID=F0CCT40ZYY0ZEXM9QC4A&th=1'
            ],
            [
                'id' => 29,
                'what' => 'Bavettes de marin',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 7.00,
                'online_shop_url' => 'https://www.kiabi.com/lot-de-3-bavoirs-coton-bebe-garcon-bleu-marine_P529247C529248'
            ],
            [
                'id' => 30,
                'what' => 'Bavettes éponges',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 6.00,
                'online_shop_url' => 'https://www.kiabi.com/lot-de-5-bavoirs-eponge-bebe-fille-rose_P469317C469315'
            ],
            [
                'id' => 31,
                'what' => 'Bavettes avec poche',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/repas-bebe/bavoirs/lot-de-3-bavoirs-kushies-6-12-mois-green-91597600'
            ],
            [
                'id' => 32,
                'what' => 'Premier biberon Philips AVENT Natural en verre',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.amazon.fr/Philips-AVENT-Biberon-Natural-verre/dp/B0093IZQAY/ref=sr_1_1?ie=UTF8&qid=1527530637&sr=8-1&keywords=biberons+avent+verre',
                'bought_by' => 'Nathalie F.',
                'is_buyer_anonymous' => 1
            ],
            [
                'id' => 33,
                'what' => 'Second biberon Philips AVENT Natural en verre',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.amazon.fr/Philips-AVENT-Biberon-Natural-verre/dp/B0093IZQAY/ref=sr_1_1?ie=UTF8&qid=1527530637&sr=8-1&keywords=biberons+avent+verre',
                'bought_by' => 'Nathalie F.',
                'is_buyer_anonymous' => 1
            ],
            [
                'id' => 34,
                'what' => 'Premier petit biberon Philips AVENT Natural en verre',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.amazon.fr/Philips-AVENT-Biberon-Natural-verre/dp/B008KFZOAI/ref=sr_1_1?ie=UTF8&qid=1527531030&sr=8-1&keywords=biberons%2Bavent%2Bverre&dpID=31krOhHT2ML&preST=_SY300_QL70_&dpSrc=srch&th=1'
            ],
            [
                'id' => 35,
                'what' => 'Second petit biberon Philips AVENT Natural en verre',
                'description' => '',
                'category' => 'Mes repas',
                'observed_price' => 10.00,
                'online_shop_url' => 'https://www.amazon.fr/Philips-AVENT-Biberon-Natural-verre/dp/B008KFZOAI/ref=sr_1_1?ie=UTF8&qid=1527531030&sr=8-1&keywords=biberons%2Bavent%2Bverre&dpID=31krOhHT2ML&preST=_SY300_QL70_&dpSrc=srch&th=1'
            ],
            [
                'id' => 36,
                'what' => 'Coffret de soins bébé',
                'description' => '',
                'category' => 'Ma toilette',
                'observed_price' => 61.00,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/les-tendances-d-emma-kit-eco-chou-deluxe--bambou-couleur,bebe,produit,-19911-43029,3.couche-lavable.html'
            ],
            [
                'id' => 37,
                'what' => 'Lingettes lavables',
                'description' => '',
                'category' => 'Ma toilette',
                'observed_price' => 12.00,
                'online_shop_url' => 'http://www.bebe-au-naturel.com/les-tendances-d-emma-5-carres-bebe-lavables--bambou-ecru,bebe,produit,-19914-43032,3.couche-lavable.html'
            ],
            [
                'id' => 38,
                'what' => 'Sac à langer',
                'description' => '',
                'category' => 'Mes sorties',
                'observed_price' => 51.00,
                'online_shop_url' => 'https://www.vertbaudet.fr/sac-a-langer-journee-multipoches-vertbaudet-imprime-chevrons.htm?ProductId=703130044&FiltreCouleur=6346&t=1'
            ],
            [
                'id' => 39,
                'what' => 'Pare-soleil voiture',
                'description' => '',
                'category' => 'Mes sorties',
                'observed_price' => 13.00,
                'online_shop_url' => 'https://www.amazon.fr/Tokkids-Pare-soleil-lat%C3%A9ral-dimensions-r%C3%A9glables/dp/B06XPRVJ8G/ref=sr_1_1?m=AHCETUQALHBK6&s=merchant-items&ie=UTF8&qid=1526417089&sr=1-1&th=1'
            ],
            [
                'id' => 40,
                'what' => 'Trousseau pour siège et poussette',
                'description' => '',
                'category' => 'Mes sorties',
                'observed_price' => 30.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/puericulture/promenade-sortie/attache-tetine-accessoires/trousseau-siege-poussette-ferme-lilliput-91504630'
            ],
            [
                'id' => 41,
                'what' => 'Spirale d\'activités',
                'description' => '',
                'category' => 'Mes sorties',
                'observed_price' => 23.00,
                'online_shop_url' => 'https://www.natureetdecouvertes.com/enfant/jouets-eveil/tapis-eveil-arche/spirale-d-activites-galopins-des-bois-31152120'
            ],
            [
                'id' => 42,
                'what' => 'Porte bébé',
                'description' => '',
                'category' => 'Mes sorties',
                'observed_price' => 170.00,
                'online_shop_url' => 'https://www.babybjorn.fr/porte-bebes/porte-bebe-one-edition-limitee/?attribute_pa_color=grey-yellow&attribute_pa_material=cotton-mix'
            ],
        ];

        $gift = $this->table('gift');
        $gift->insert($data)->save();

        $data = [
            [
                'gift_id' => 1,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/1.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Bac à livres à roulettes'
            ],
            [
                'gift_id' => 2,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/2.jpg')),
                'width' => 1348,
                'height' => 899,
                'alt' => 'Babyphone'
            ],
            [
                'gift_id' => 3,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/3.jpg')),
                'width' => 500,
                'height' => 500,
                'alt' => 'Banc avec rangement jouets blanc'
            ],
            [
                'gift_id' => 4,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/4.jpg')),
                'width' => 500,
                'height' => 500,
                'alt' => 'Coussin pour banquette noir'
            ],
            [
                'gift_id' => 5,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/5.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Veilleuse portable'
            ],
            [
                'gift_id' => 6,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/6.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Drap housse turquoise'
            ],
            [
                'gift_id' => 7,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/7.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Drap housse jaune soleil'
            ],
            [
                'gift_id' => 8,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/8.jpg')),
                'width' => 1112,
                'height' => 1500,
                'alt' => 'Sophie la girafe'
            ],
            [
                'gift_id' => 9,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/9.jpg')),
                'width' => 340,
                'height' => 340,
                'alt' => 'Mon premier livre de comptines'
            ],
            [
                'gift_id' => 10,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/10.jpg')),
                'width' => 340,
                'height' => 340,
                'alt' => 'Mon grand livre de comptines'
            ],
            [
                'gift_id' => 11,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/11.jpg')),
                'width' => 340,
                'height' => 340,
                'alt' => 'Mon grand livre des berceuses'
            ],
            [
                'gift_id' => 12,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/12.jpg')),
                'width' => 600,
                'height' => 600,
                'alt' => 'Tapis d\'activités tipi'
            ],
            [
                'gift_id' => 13,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/13.jpg')),
                'width' => 600,
                'height' => 600,
                'alt' => 'Panier de rangement'
            ],
            [
                'gift_id' => 14,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/14.jpg')),
                'width' => 600,
                'height' => 466,
                'alt' => 'Canards de bain'
            ],
            [
                'gift_id' => 15,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/15.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Coffret de bain'
            ],
            [
                'gift_id' => 16,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/16.jpg')),
                'width' => 1500,
                'height' => 1200,
                'alt' => 'Bateau ours polaire'
            ],
            [
                'gift_id' => 17,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/17.jpg')),
                'width' => 1500,
                'height' => 972,
                'alt' => 'Mon sous-marin'
            ],
            [
                'gift_id' => 18,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/18.jpg')),
                'width' => 1200,
                'height' => 1200,
                'alt' => 'Livre évolutif'
            ],
            [
                'gift_id' => 19,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/19.jpg')),
                'width' => 1000,
                'height' => 1000,
                'alt' => 'Mobile musicale Lilliputiens'
            ],
            [
                'gift_id' => 20,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/20.jpg')),
                'width' => 641,
                'height' => 641,
                'alt' => 'Hochet vibrant'
            ],
            [
                'gift_id' => 21,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/21.jpg')),
                'width' => 1500,
                'height' => 1500,
                'alt' => 'Goupillon à biberon et à tétine'
            ],
            [
                'gift_id' => 22,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/22.jpg')),
                'width' => 500,
                'height' => 375,
                'alt' => 'Égouttoir pour biberons'
            ],
            [
                'gift_id' => 23,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/23.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Hochet de dentition à réfrigérer'
            ],
            [
                'gift_id' => 24,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/24.jpg')),
                'width' => 1500,
                'height' => 1500,
                'alt' => 'Grignoteuse'
            ],
            [
                'gift_id' => 25,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/25.jpg')),
                'width' => 521,
                'height' => 431,
                'alt' => 'Bol et tasse'
            ],
            [
                'gift_id' => 26,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/26.jpg')),
                'width' => 1500,
                'height' => 1372,
                'alt' => 'Set de vaisselle'
            ],
            [
                'gift_id' => 27,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/27.jpg')),
                'width' => 500,
                'height' => 500,
                'alt' => 'Bavette licorne'
            ],
            [
                'gift_id' => 28,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/28.jpg')),
                'width' => 500,
                'height' => 500,
                'alt' => 'Bavette singe'
            ],
            [
                'gift_id' => 29,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/29.jpg')),
                'width' => 501,
                'height' => 660,
                'alt' => 'Bavette de marin'
            ],
            [
                'gift_id' => 30,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/30.jpg')),
                'width' => 2000,
                'height' => 2000,
                'alt' => 'Bavettes éponges'
            ],
            [
                'gift_id' => 31,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/31.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Bavettes avec poche'
            ],
            [
                'gift_id' => 32,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/32.jpg')),
                'width' => 1061,
                'height' => 1500,
                'alt' => 'Biberon Philips AVENT Natural en verre'
            ],
            [
                'gift_id' => 33,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/32.jpg')),
                'width' => 1061,
                'height' => 1500,
                'alt' => 'Biberon Philips AVENT Natural en verre'
            ],
            [
                'gift_id' => 34,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/34.jpg')),
                'width' => 760,
                'height' => 1039,
                'alt' => 'Petit biberon Philips AVENT Natural en verre'
            ],
            [
                'gift_id' => 35,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/34.jpg')),
                'width' => 760,
                'height' => 1039,
                'alt' => 'Petit biberon Philips AVENT Natural en verre'
            ],
            [
                'gift_id' => 36,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/36.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Coffrets de soins bébé'
            ],
            [
                'gift_id' => 37,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/37.jpg')),
                'width' => 700,
                'height' => 550,
                'alt' => 'Lingettes lavables'
            ],
            [
                'gift_id' => 38,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/38.jpg')),
                'width' => 1320,
                'height' => 1760,
                'alt' => 'Sac à langer'
            ],
            [
                'gift_id' => 39,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/39.jpg')),
                'width' => 1500,
                'height' => 1032,
                'alt' => 'Pare-soleil voiture'
            ],
            [
                'gift_id' => 40,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/40.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Trousseau pour siège et poussette'
            ],
            [
                'gift_id' => 41,
                'media_type' => 'image/jpeg',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/41.jpg')),
                'width' => 650,
                'height' => 650,
                'alt' => 'Spirale d\'activités'
            ],
            [
                'gift_id' => 42,
                'media_type' => 'image/png',
                'data' => base64_encode(file_get_contents(__DIR__ . '/images/42.png')),
                'width' => 671,
                'height' => 499,
                'alt' => 'Porte bébé'
            ],
        ];

        $image = $this->table('image');
        $image->insert($data)->save();
    }
}
