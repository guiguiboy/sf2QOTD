<?php
namespace Sf2quotd\WebsiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sf2qotd\WebsiteBundle\Entity\Quote;

class LoadUserData implements FixtureInterface
{
    public static $fixtures = array(
        array(
            'body' => '<Vincent VG> En fait, il faut jamais faire de svn up quand Olivier il a commit ! ',
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2011-12-01'
        ),
        array(
            'body' => '<Denis BG> ET pendant ce temps la, Arnaud Tisset sa toile',
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2011-12-01'
        ),
        array(
            'body' => "<Gaël METAIS> Yop
<Gaël METAIS> Non, c'était ce matin :-)
<Guillaume BRETOU> c est faux
<Guillaume BRETOU> huh ?
<Gaël METAIS> C'était pas hier, c'était ce matin
<Guillaume BRETOU> ah oki
<Gaël METAIS> T'es mignon mais t'es un tout petit bretou",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Guillaume BRETOU> sinon hier on t as cherché partout ...
<Gaël METAIS> Ah bah j'étais là
<Guillaume BRETOU> metais t'es ou ?",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Olivier G> '10_DummyMigration.php' C'est joli comme nom de fichier",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Matthieu W> Autant pour moi Denis : les fichiers incriminés sont bien dû à un commit d'Olivier
<Denis BG> tu sera fouetté sur la place de greve pour accusations calomnieuse
<Matthieu W> +1
<Matthieu W> (ah merde c'est de moi qu'on parle )
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Matthieu W> @Bastien : je comprends pas ta question
<Bastien B> je crée les image avec gimp
<Bastien B> j'ai 3 claques (2 textes + le point d'interrogation)
<Guillaume B> ca commence a devenir violent
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Guillaume B> Y a un deal sur groupon c'est 'Clara Morgane'
PLus on est a lui passer dessus moins ce sera cher ?
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Bastien B> Denis truevier je trouve que tu assert à rien, Svn t'as blamé.
<Guillaume B> wow
<Mickael T> ca pique un peu les yeux là bastien xD
<Denis BG> lait ce tomber Bastien, tu es trop truevial 
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Guillaume B> \$this->assertEquals(true, false);
<Guillaume B> THIS IS PURE GENIOUSSE
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Stephane B> Vous savez d'où viennent ces trucs?
<Stephane B> data/locales/de_DE/LC_MESSAGES/translations_front.mo.backup
?       data/locales/de_DE/LC_MESSAGES/translations_front.po.backup
?       data/locales/en_GB/LC_MESSAGES/translations_back.mo.backup
?       data/locales/en_GB/LC_MESSAGES/translations_back.po.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_back.mo.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_back.po.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_front.mo.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_front.po.backup
<Matthieu W> des traductions (captain obvious)
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Stephane B> Vous savez d'où viennent ces trucs?
<Stephane B> data/locales/de_DE/LC_MESSAGES/translations_front.mo.backup
?       data/locales/de_DE/LC_MESSAGES/translations_front.po.backup
?       data/locales/en_GB/LC_MESSAGES/translations_back.mo.backup
?       data/locales/en_GB/LC_MESSAGES/translations_back.po.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_back.mo.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_back.po.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_front.mo.backup
?       data/locales/fr_FR/LC_MESSAGES/translations_front.po.backup
<Matthieu W> des traductions (captain obvious)
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Guillaume B> venantn  d'Arnaud, ca me parait bizarre qu'il ait fait ca : il hurlait a chaque fois qu'il voyait une méthode statique dans l'application
<Guillaume B> ah pardon il hurlait tout le temps
<Bastien B> :)
<Mickael T> :D
<Denis BG> il vociférait singulierement
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Bastien B> VVV
<Denis BG> www
<Guillaume B> XXX
<Bastien B> Je testais mon clavier
<Guillaume B> moi mon navigateur
<Bastien B> on vois les habitué...
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => ":: Denis BG a rejoint la discussion. ::
<Stephane B> Bonjour Denis
<Matthieu W> taisez vous v'là l'vieux
<Denis BG> @mathieur tu n'es qu'un placenta qui pue 
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Denis BG> On as tous cru au pere NOEL ,  à cause de nos parents, donc nos parents sont des menteurs et nous le serons forcement à notre tour
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Mickael T> Oo nous on fait des stand up meeting et B2C font des sit down meeting xDDDDD
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Guillaume B> On a donc un GPRO qui a 78 établissemenst observés
Le dernier se trouve dans le 78e arrondissement de Paris
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Guillaume B> ils avaient des filles chez B2C, ils ont des filles chez FWK. Et Pro ???!!
<Matthieu W> Bah on a Bastien
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-11-02'
        ),
        array(
            'body' => "<Matthieu W> J'ai oublié de vous signaler : je pars à 15h aujourd'hui et, pour ceux qui se demanderaient, j'en avais parlé à OGN qui m'avait donné son accord. (c'est la 2nd échographie donc attendez vous à avoir des croissants demain )
<Guillaume B> croissants en reference au penis de ton futur enfant ?
<Stephane B> Ne pouvant travailler sans scrum master, je partirai en même temps de toi 
<Mickael T> xDDD
<Mickael T> et moi je doit récupere mon jeux assassin creed donc il faut que j'arrive avant la fermeture 
<Guillaume B> ca veut dire que si pains au chocolat ce sera une fille (en reference au fait qu elle se fera fourrée) ?
",
            'vote_plus' => 0,
            'vote_minus' => 0,
            'date' => '2012-09-20'
        ),
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach (self::$fixtures as $fixture)
        {
            $quote = new Quote();
            $quote->setBody($fixture['body']);
            $quote->setVoteMinus($fixture['vote_minus']);
            $quote->setVotePlus($fixture['vote_plus']);
            $quote->setDate(\DateTime::createFromFormat('Y-m-d', $fixture['date']));
            $manager->persist($quote);
        }

        $manager->flush();
    }
}
