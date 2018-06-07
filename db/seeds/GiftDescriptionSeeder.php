<?php

use Phinx\Seed\AbstractSeed;

/**
 * Class GiftDescriptionSeeder
 */
class GiftDescriptionSeeder extends AbstractSeed
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
        $this->execute(<<<SQL
            update gift set description='Mes livres partout !' where id=1;
            update gift set description='Si jamais je pleure.' where id=2;
            update gift set description='Pour ranger mes jouets.' where id=3;
            update gift set description='Transforme le rangement à jouets en banc douillet.' where id=4;
            update gift set description='Une lumière douce pratique pour m''endormir.' where id=5;
            update gift set description='Pour des sommeils colorés.' where id=6;
            update gift set description='Pour des sommeils colorés.' where id=7;
            update gift set description='Je ne veux pas un troupeau mais j''en veux bien une.' where id=8;
            update gift set description='Si je ne devais en choisir qu''un je voudrais celui-là ; les plus connus si trouvent.' where id=9;
            update gift set description='Pour apprendre ou réapprendre à papa et maman les bases.' where id=10;
            update gift set description='S''endormir avec les classiques.' where id=11;
            update gift set description='Un tipi avec un tas d''activités amovibles pour mon développement.' where id=12;
            update gift set description='Jouer c''est bien mais papa et maman apprécient les rangements.' where id=13;
            update gift set description='Des canards flottants pouvant servir à me rincer.' where id=14;
            update gift set description='2 livres de bains et 4 jouets gicleurs.' where id=15;
            update gift set description='Parce que c''est cool un bateau sur l''eau.' where id=16;
            update gift set description='Un bateau c''est cool un sous-marin c''est la classe.' where id=17;
            update gift set description='Coup de coeur de maman pour ce livre coloré et nomade.' where id=18;
            update gift set description='Coloré pour capter mon attention.' where id=19;
            update gift set description='Cette renarde jouera à cache-cache avec moi.' where id=20;
            update gift set description='Pour nettoyer mes biberons.' where id=21;
            update gift set description='Cela pourrait servir…' where id=22;
            update gift set description='Pour m''aider à faire mes dents.' where id=23;
            update gift set description='M''accompagnera dans la découverte des saveurs.' where id=24;
            update gift set description='Pour mes petits déjeuners avec papa et maman.' where id=25;
            update gift set description='Adapté pour mes premiers repas comme les grands.' where id=26;
            update gift set description='Mignon mais surtout pratique avec sa poche pour récupérer la nourriture.' where id=27;
            update gift set description='La version singe de la bavette anti-débordement, il existe encore d''autres versions si vous voulez. Je pense qu''avec tous ça vous avez le choix en bavette.' where id=28;
            update gift set description='Grands modèles éponges.' where id=29;
            update gift set description='Petits modèles éponges.' where id=30;
            update gift set description='Comme la licorne des bavettes anti-débordements.' where id=31;
            update gift set description='Papa il a dit je veux des biberons en verre, alors en voila un grand.' where id=32;
            update gift set description='Et encore un autre ?' where id=33;
            update gift set description='Le même en plus petit.' where id=34;
            update gift set description='Un petit c''est bien, 2 c''est mieux.' where id=35;
            update gift set description='Pour me garder propre tout en tentant de préserver un minimum la planète.' where id=36;
            update gift set description='En compléments du coffret.' where id=37;
            update gift set description='Pour emmener partout mon nécessaire repas et toilette.' where id=38;
            update gift set description='Pour me protéger des UV.' where id=39;
            update gift set description='Des compagnons de voyages idéals.' where id=40;
            update gift set description='Jouet d''éveil nomade.' where id=41;
            update gift set description='Tous les moyens seront bon pour être contre papa et maman partout et tout le temps.' where id=42;
SQL
        );
    }

    public function getDependencies()
    {
        return [GiftSeeder::class];
    }
}
