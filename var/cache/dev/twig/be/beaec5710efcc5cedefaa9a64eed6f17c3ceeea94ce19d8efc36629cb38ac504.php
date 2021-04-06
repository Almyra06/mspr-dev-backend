<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mentions_legales/index.html.twig */
class __TwigTemplate_d3ca119222946a8f1594a9f2020e821d1b3b0bbe47efe5bb93ed733f726710d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions_legales/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos mentions légales et CGU";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
              <h1 class=\"mt-3 mb-4\">Nos mentions légales et CGU</h1>
              <div class=\"container\">
                <h2>Définitions</h2>
                <p><b>Client :</b> tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.<br>
                <b>Prestations et Services :</b> <a href=\"https://www.live-event.com\">https://www.live-event.com</a> met à disposition des Clients :</p>

                <p><b>Contenu :</b> Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>

                <p><b>Informations clients :</b> Ci après dénommé « Information (s) » qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par <a href=\"https://www.live-event.com\">https://www.live-event.com</a> pour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>


                <p><b>Utilisateur :</b> Internaute se connectant, utilisant le site susnommé.</p>
                <p><b>Informations personnelles :</b> « Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
                <p>Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données sensibles » ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

                <h2>1. Présentation du site internet.</h2>
                <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet <a href=\"https://www.live-event.com\">https://www.live-event.com</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
                </p><p><strong>Propriétaire</strong> :  SAS Live Event Capital social de 1000€  – 91, rue Nationale, Immeuble Le Plaza 59000 lille<br>
                              
                <strong>Responsable publication</strong> : Mortreu Adam – adam.mortreu1@gmail.com<br>
                Le responsable publication est une personne physique ou une personne morale.<br>
                <strong>Webmaster</strong> : Devos William – william.decospro@gmail.com<br>
                <strong>Hébergeur</strong> : ovh – 2 rue Kellermann 59100 Roubaix 1007<br>
                <strong>Délégué à la protection des données</strong> : Adam Mortreu – adam.mortreu1@gmail.com<br>
                </p>

                <div ng-bind-html=\"linkHTML\"><p>Ce modèle de mentions légales est proposé par le <a href=\"https://fr.orson.io/1371/generateur-mentions-legales\" title=\"générateur gratuit de mentions légales pour un site internet\">générateur gratuit de mentions légales pour un site internet</a></p></div>



                <h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

                <p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. 
                Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>

                <p>L’utilisation du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> sont donc invités à les consulter de manière régulière.</p>

                <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
                Le site web <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est mis à jour régulièrement par <a href=\"https://www.live-event.com\">https://www.live-event.com</a> responsable. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>

                <h2>3. Description des services fournis.</h2>

                <p>Le site internet <a href=\"https://www.live-event.com\">https://www.live-event.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’efforce de fournir sur le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

                <p>Toutes les informations indiquées sur le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

                <h2>4. Limitations contractuelles sur les données techniques.</h2>

                <p>Le site utilise la technologie JavaScript.

                Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour
                Le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

                <p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> et l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>

                <h2>5. Propriété intellectuelle et contrefaçons.</h2>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.
                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : <a href=\"https://www.live-event.com\">https://www.live-event.com</a>.</p>

                <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

                <h2>6. Limitations de responsabilité.</h2>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> agit en tant qu’éditeur du site. <a href=\"https://www.live-event.com\">https://www.live-event.com</a>  est responsable de la qualité et de la véracité du Contenu qu’il publie. </p>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a>.
                Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. <a href=\"https://www.live-event.com\">https://www.live-event.com</a> se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

                <h2>7. Gestion des données personnelles.</h2>

                <p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679). </p>

                <h3>7.1 Responsables de la collecte des données personnelles</h3>

                <p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : Live Event. <a href=\"https://www.live-event.com\">https://www.live-event.com</a>est représenté par Devos, son représentant légal</p>

                <p>En tant que responsable du traitement des données qu’il collecte, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité.
                Chaque fois que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> traite des Données Personnelles, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> prend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles <a href=\"https://www.live-event.com\">https://www.live-event.com</a> les traite.</p>
                 
                <h3>7.2 Finalité des données collectées</h3>
                 
                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> est susceptible de traiter tout ou partie des données : </p>

                <ul>
                  
                <li>pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur : données de connexion et d’utilisation du Site, facturation, historique des commandes, etc. </li>
                 
                <li>pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé) </li>
                 
                <li>pour améliorer la navigation sur le Site : données de connexion et d’utilisation </li>
                 
                <li>pour mener des enquêtes de satisfaction facultatives sur <a href=\"https://www.live-event.com\">https://www.live-event.com</a> : adresse email </li>
                <li>pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email</li>


                </ul>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>
                 
                <h3>7.3 Droit d’accès, de rectification et d’opposition</h3>
                 
                <p>
                Conformément à la réglementation européenne en vigueur, les Utilisateurs de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> disposent des droits suivants : </p>
                 <ul>

                <li>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite </li>
                 
                <li>droit de retirer à tout moment un consentement (article 13-2c RGPD) </li>
                 
                <li>droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD) </li>
                 
                <li>droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD) </li>
                 
                <li>droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD) </li>
                 
                <li>droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui <a href=\"https://www.live-event.com\">https://www.live-event.com</a> devra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné</li>
                 </ul>

                <p>Dès que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> a connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une obligation légale.</p>
                 
                <p>Si l’Utilisateur souhaite savoir comment <a href=\"https://www.live-event.com\">https://www.live-event.com</a> utilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter <a href=\"https://www.live-event.com\">https://www.live-event.com</a> par écrit à l’adresse suivante : </p>
                 
                Live Event – DPO, Adam Mortreu <br>
                91, rue Nationale, Immeuble Le Plaza 59000 lille.
                 
                <p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> corrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport). </p>

                <p>
                Les demandes de suppression de Données Personnelles seront soumises aux obligations qui sont imposées à <a href=\"https://www.live-event.com\">https://www.live-event.com</a> par la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> peuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).</p>
                 
                <h3>7.4 Non-communication des données personnelles</h3>

                <p>
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’interdit de traiter, héberger ou transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client. Pour autant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> reste libre du choix de ses sous-traitants techniques et commerciaux à la condition qu’il présentent les garanties suffisantes au regard des exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).</p>

                <p>
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’engage à prendre toutes les précautions nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne soient pas communiquées à des personnes non autorisées. Cependant, si un incident impactant l’intégrité ou la confidentialité des Informations du Client est portée à la connaissance de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, celle-ci devra dans les meilleurs délais informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne collecte aucune « données sensibles ».</p>

                <p>
                Les Données Personnelles de l’Utilisateur peuvent être traitées par des filiales de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> et des sous-traitants (prestataires de services), exclusivement afin de réaliser les finalités de la présente politique.</p>
                <p>
                Dans la limite de leurs attributions respectives et pour les finalités rappelées ci-dessus, les principales personnes susceptibles d’avoir accès aux données des Utilisateurs de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> sont principalement les agents de notre service client.</p>
                
                <div ng-bind-html=\"rgpdHTML\"></div>


                <h2>8. Notification d’incident</h2>
                <p>
                Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue. 
                Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.</p>
                <p>
                Aucune information personnelle de l'utilisateur du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a>.</p>

                <h3>Sécurité</h3>

                <p>
                Pour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles de Santé, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> utilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe. </p>
                 
                <p>
                Lors du traitement des Données Personnelles, <a href=\"https://www.live-event.com\">https://www.live-event.com</a>prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p>
                 
                <h2>9. Liens hypertextes « cookies » et balises (“tags”) internet</h2>
                <p>
                Le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>. Cependant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.
                <p></p>

                <h3>9.1. « COOKIES »</h3>
                 <p>
                Un « cookie » est un petit fichier d’information envoyé sur le navigateur de l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et l’heure d’accès. Les Cookies ne risquent en aucun cas d’endommager le terminal de l’Utilisateur.</p>
                 <p>
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est susceptible de traiter les informations de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les recherches effectuées. Ces informations permettent à <a href=\"https://www.live-event.com\">https://www.live-event.com</a> d’améliorer le contenu du Site, de la navigation de l’Utilisateur.</p>
                 <p>
                Les Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être enregistré dans son terminal. <a href=\"https://www.live-event.com\">https://www.live-event.com</a> informe l’Utilisateur que, dans ce cas, il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.</p>
                 <p>
                Si l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur est informé que sa navigation et son expérience sur le Site peuvent être limitées. Cela pourrait également être le cas lorsque <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal, les paramètres de langue et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.</p>
                 <p>
                Le cas échéant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> décline toute responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services éventuellement proposés par <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour <a href=\"https://www.live-event.com\">https://www.live-event.com</a> d’enregistrer ou de consulter les Cookies nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de Cookies.</p>
                 <p>
                À tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses souhaits en matière de Cookies. <a href=\"https://www.live-event.com\">https://www.live-event.com</a> pourra en outre faire appel aux services de prestataires externes pour l’aider à recueillir et traiter les informations décrites dans cette section.</p>
                 <p>
                Enfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ou dans son application mobile et si l’Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation sur le Site Internet ou l’application mobile de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur vos terminaux (ordinateur, tablette, téléphone portable).</p>
                 <p>
                Ces types de cookies ne sont déposés sur vos terminaux qu’à condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l’application mobile de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>. À tout moment, l’Utilisateur peut néanmoins revenir sur son consentement à ce que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> dépose ce type de cookies.</p>
                 
                <h3>Article 9.2. BALISES (“TAGS”) INTERNET</h3>
                 

                <p>

                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> peut employer occasionnellement des balises Internet (également appelées « tags », ou balises d’action, GIF à un pixel, GIF transparents, GIF invisibles et GIF un à un) et les déployer par l’intermédiaire d’un partenaire spécialiste d’analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l’adresse IP de l’Utilisateur) dans un pays étranger.</p>
                 
                <p>
                Ces balises sont placées à la fois dans les publicités en ligne permettant aux internautes d’accéder au Site, et sur les différentes pages de celui-ci. 
                 </p>
                <p>
                Cette technologie permet à <a href=\"https://www.live-event.com\">https://www.live-event.com</a> d’évaluer les réponses des visiteurs face au Site et l’efficacité de ses actions (par exemple, le nombre de fois où une page est ouverte et les informations consultées), ainsi que l’utilisation de ce Site par l’Utilisateur. </p>
                 <p>
                Le prestataire externe pourra éventuellement recueillir des informations sur les visiteurs du Site et d’autres sites Internet grâce à ces balises, constituer des rapports sur l’activité du Site à l’attention de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, et fournir d’autres services relatifs à l’utilisation de celui-ci et d’Internet.</p>
                 <p>
                </p><h2>10. Droit applicable et attribution de juridiction.</h2>  
                 <p>
                Tout litige en relation avec l’utilisation du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est soumis au droit français. 
                En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de </p>


                <h3>CONDITIONS GENERALES DE VENTE</h3>
 
                Entre la Société Live Event,
                22 AVENUE DES TILLEULS,
                au Capital Social de 1000
                immatriculée au Registre du Commerce et des Sociétés de PARIS,
                sous le numéro SIRET 123456789
                représentée par Adam Mortreu
                en qualité de gérant, dûment habilité aux fins des présentes.
                La société peut être jointe par email en cliquant sur le formulaire de contact accessible via la page d’accueil du site. Ou directement en utilisant l’adresse

                Ci-après le « Vendeur » ou la « Société ». D’une part, Et la personne physique ou morale procédant à l’achat de produits ou services de la société, Ci-après, « l’Acheteur », ou « le Client » D’autre part, Il a été exposé et convenu ce qui suit :

                PREAMBULE

                Le Vendeur est éditeur de Produits et Services de  festival à destination de consommateurs, commercialisés par l’intermédiaire de ses sites Internet (www.live-envent.com). La liste et le descriptif des biens et services proposés par la Société peuvent être consultés sur les sites susmentionnés.

                Article 1 : Objet

                Les présentes Conditions Générales de Vente déterminent les droits et obligations des parties dans le cadre de la vente en ligne de Produits ou Services proposés par le Vendeur.
                

                Article 2 : Dispositions générales

                Les présentes Conditions Générales de Vente (CGV) régissent les ventes de Produits ou de Services, effectuées au travers des sites Internet de la Société, et sont partie intégrante du Contrat entre l’Acheteur et le Vendeur. Elle sont pleinement opposable à l’Acheteur qui les a accepté avant de passer commande. Le Vendeur se réserve la possibilité de modifier les présentes, à tout moment par la publication d’une nouvelle version sur son site Internet. Les CGV applicables alors sont celles étant en vigueur à la date du paiement (ou du premier paiement en cas de paiements multiples) de la commande. Ces CGV sont consultables sur le site Internet de la Société à l’adresse suivante : www.live-envent.com.
                La Société s’assure également que leur acceptation soit claire et sans réserve en mettant en place une case à cocher et un clic de validation. Le Client déclare avoir pris connaissance de l’ensemble des présentes Conditions Générales de Vente, et le cas échéant des Conditions Particulières de Vente liées à un produit ou à un service, et les accepter sans restriction ni réserve.
                Le Client reconnaît qu’il a bénéficié des conseils et informations nécessaires afin de s’assurer de l’adéquation de l’offre à ses besoins.
                Le Client déclare être en mesure de contracter légalement en vertu des lois françaises ou valablement représenter la personne physique ou morale pour laquelle il s’engage.
                Sauf preuve contraire les informations enregistrées par la Société constituent la preuve de l’ensemble des transactions.

                Article 3 : Prix

                Les prix des produits vendus au travers des sites Internet sont indiqués en Euros hors taxes et précisément déterminés sur les pages de descriptifs des Produits. Ils sont également indiqués en euros toutes taxes comprises (TVA + autres taxes éventuelles) sur la page de commande des produits, et hors frais spécifiques d’expédition. Pour tous les produits expédiés hors Union européenne et/ou DOM-TOM, le prix est calculé hors taxes automatiquement sur la facture. Des droits de douane ou autres taxes locales ou droits d’importation ou taxes d’état sont susceptibles d’être exigibles dans certains cas. Ces droits et sommes ne relèvent pas du ressort du Vendeur. Ils seront à la charge de l’acheteur et relèvent de sa responsabilité (déclarations, paiement aux autorités compétentes, etc.). Le Vendeur invite à ce titre l’acheteur à se renseigner sur ces aspects auprès des autorités locales correspondantes.La Société se réserve la possibilité de modifier ses prix à tout moment pour l’avenir. Les frais de télécommunication nécessaires à l’accès aux sites Internet de la Société sont à la charge du Client. Le cas échéant également, les frais de livraison.

                Article 4 : Conclusion du contrat en ligne

                Conformément aux dispositions de l’article 1127-1 du Code civil, le Client doit suivre une série d’étapes pour conclure le contrat par voie électronique pour pouvoir réaliser sa commande :; Information sur les caractéristiques essentielles du Produit ; – Choix du Produit, le cas échéant, de ses options – Indication des coordonnées essentielles du Client (identification, email, adresse…) ; – Acceptation des présentes Conditions Générales de Vente – Vérification des éléments de la commande (formalité du double clic) et, le cas échéant, correction des erreurs. Avant de procéder à sa confirmation, l’Acheteur a la possibilité de vérifier le détail de sa commande, son prix, et de corriger ses éventuelles erreur, ou annuler sa commande. La confirmation de la commande emportera formation du présent contrat. – Ensuite, suivi des instructions pour le paiement, paiement des produits, puis livraison de la commande. Le Client recevra confirmation par courrier électronique du paiement de la commande, ainsi qu’un accusé de réception de la commande la confirmant. Il recevra un exemplaire .pdf des présentes conditions générales de vente.
                Le client disposera pendant son processus de commande de la possibilité d’identifier d’éventuelles erreurs commises dans la saisie des données et de les corriger. La langue proposé pour la conclusion du contrat est la langue française.
                Les modalités de l’offre et des conditions générales de vente sont renvoyées par email à l’acheteur lors de la commande et archivées sur le site web du Vendeur. Le cas échéant, les règles professionnelles et commerciales auxquelles l’auteur de l’offre entend se soumettre sont consultables dans la rubrique « règles annexes » des présentes CGV, consultables sur le site du Vendeur à l’adresse suivante : www.live-envent.com
                L’archivage des communications, de la commande, des détails de la commande, ainsi que des factures est effectué sur un support fiable et durable de manière constituer une copie fidèle et durable conformément aux dispositions de l’article 1360 du code civil. Ces informations peuvent être produits à titre de preuve du contrat.
                Pour les produits livrés, la livraison se fera à l’adresse indiquée par le Client. Aux fins de bonne réalisation de la commande, le Client s’engage à fournir ses éléments d’identification véridiques. Le Vendeur se réserve la possibilité de refuser la commande, par exemple pour toute demande anormale, réalisée de mauvaise foi ou pour tout motif légitime.

                Article 5 : Produits et services

                Les caractéristiques essentielles des biens, des services et leurs prix respectifs sont mis à disposition de l’acheteur sur les sites Internet de la société, de même, le cas échéant, que le mode d’utilisation du produit. Conformément à l’article L112-1 du Code la consommation, le consommateur est informé, par voie de marquage, d’étiquetage, d’affichage ou par tout autre procédé approprié, des prix et des conditions particulières de la vente et de l’exécution des services avant toute conclusion du contrat de vente. Dans tous les cas, le montant total dû par l’Acheteur est indiqué sur la page de confirmation de la commande. Le prix de vente du produit est celui en vigueur indiqué au jour de la commande, celui-ci ne comportant par les frais de ports facturés en supplément. Ces éventuels frais sont indiqués à l’Achteur lors du process de vente, et en tout état de cause au moment de la confirmation de la commande. Le Vendeur se réserve la possibilité de modifier ses prix à tout moment, tout en garantissant l’application du prix indiqué au moment de la commande. Lorsque les produits ou services ne sont pas exécuté immédiatement, une information claire est donnée sur la page de présentation du produit quant aux dates de livraison des produits ou services. Le client atteste avoir reçu un détail des frais de livraison ainsi que les modalités de paiement, de livraison et d’exécution du contrat, ainsi qu’une information détaillée relative à l’identité du vendeur, ses coordonnées postales, téléphoniques et électroniques, et à ses activités dans le contexte de la présente vente. Le Vendeur s’engage à honorer la commande du Client dans la limite des stocks de Produits disponibles uniquement. A défaut, le Vendeur en informe le Client ; si la commande a été passée, et à défaut d’accord avec le Client sur une nouvelle date de livraison, le Vendeur rembourse le client. Les informations contractuelles sont présentées en détail et en langue française. Les parties conviennent que les illustrations ou photos des produits offerts à la vente n’ont pas de valeur contractuelle. La durée de validité de l’offre des Produits ainsi que leurs prix est précisée sur les sites Internet de la Société, ainsi que la durée minimale des contrats proposés lorsque ceux-ci portent sur une fourniture continue ou périodique de produits ou services. Sauf conditions particulières, les droits concédés au titre des présentes le sont uniquement à la personne physique signataire de la commande (ou la personne titulaire de l’adresse email communiqué).

                Article 6 : Conformité

                Conformément à l’article L.411-1 du Code de la consommation, les produits et les services offert à la vente au travers des présentes CGV répondent aux prescriptions en vigueur relatives à la sécurité et à la santé des personnes, à la loyauté des transactions commerciales et à la protection des consommateurs. Indépendamment de toute garantie commerciale, le Vendeur reste tenu des défauts de conformité et des vices cachés du produit.
                Conformément à l’article L.217-4, le vendeur livre un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l’emballage, des instructions de montage ou de l’installation lorsque celleci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité.
                Conformément aux dispositions légales en matière de conformité et de vices cachés (art. 1641 c. civ.), le Vendeur rembourse ou échange les produits défectueux ou ne correspondant pas à la commande. Le remboursement peut être demandé de la manière suivante : dépôt d’une plainte à l’adresse

                Article 7 : Clause de réserve de propriété

                Les produits demeurent la propriété de la Société jusqu’au complet paiement du prix.

                Article 8 : Modalités de livraison

                Les produits sont livrés à l’adresse de livraison qui a été indiquée lors de la commande et dans les délais indiqués. Ces délais ne prenent pas en compte le délai de préparation de la commande. Lorsque le Client commande plusieurs produits en même temps ceux-ci peuvent avoir des délais de livraison différents acheminés selon les modalités suivantes : livraison via un ou plusieurs colis. En cas de retard d’expédition dépôt d’une plainte à l’adresse . En cas de retard de livraison, le Client dispose de la possibilité de résoudre le contrat dans les conditions et modalités définies à l’Article L 138-2 du Code de la consommation. Le Vendeur procède alors au remboursement du produit et aux frais « aller » dans les conditions de l’Article L 138-3 du Code de la consommation. Le Vendeur met à disposition un point de contact téléphonique (coût d’une communication locale à partir d’un poste fixe) indiqué dans l’email de confirmation de commande afin d’assurer le suivi de la commande. Le Vendeur rappelle qu’au moment où le Client pend possession physiquement des produits, les risques de perte ou d’endommagement des produits lui sont transférés. Il appartient au Client de notifier au transporteur toute réserves sur le produit livré.

                Article 9 : Disponibilité et présentation

                En cas d’indisponibilité d’un article pour une période supérieure à 30 jours ouvrables, vous serez immédiatement prévenu des délais prévisibles de livraison et la commande de cet article pourra être annulée sur simple demande. Le Client pourra alors demander un avoir pour le montant de l’article ou son remboursement intégral et l’annulation de la commande.

                Article 10 : Paiement

                Le paiement est exigible immédiatement à la commande, y compris pour les produits en précommande. Le Client peut effectuer le règlement par carte de paiement ou chèque bancaire. Les cartes émises par des banques domiciliées hors de France doivent obligatoirement être des cartes bancaires internationales (Mastercard ou Visa).Le paiement sécurisé en ligne par carte bancaire est réalisé par notre prestataire de paiement. Les informations transmises sont chiffrées dans les règles de l’art et ne peuvent être lues au cours du transport sur le réseau. Une fois le paiement lancé par le Client, la transaction est immédiatement débitée après vérification des informations. Conformément aux dispositions du Code monétaire et financier, l’engagement de payer donné par carte est irrévocable. En communiquant ses informations bancaires lors de la vente, le Client autorise le Vendeur à débiter sa carte du montant relatif au prix indiqué. Le Client confirme qu’il est bien le titulaire légal de la carte à débiter et qu’il est légalement en droit d’en faire usage. En cas d’erreur, ou d’impossibilité de débiter la carte, la Vente est immédiatement résolue de plein droit et la commande annulée.

                Article 11 : Délai de rétractation

                Conformément aux dispositions de l’article L 221-5 du Code de la consommation, l’Acheteur dispose du droit de se rétracter sans donner de motif, dans un délai de quatorze (14) jours à la date de réception de sa commande. Le droit de rétractation peut être exercé en contactant la Société de la manière suivante : dépôt d’une plainte à l’adresse . Nous informons les Clients que conformément aux dispositions des articles L. 221-18 à L. 221-28 du Code de la consommation, ce droit de rétractation ne peut être exercé pour tout article dont un processus de fabrication ou d’acheminement est en cours. En cas d’exercice du droit de rétractation dans le délai susmentionné, le prix du ou des produits achetés et les frais d’envoi seront remboursés, les frais de retour restant à la charge du Client. Les retours des produits sont à effectuer dans leur état d’origine et complets (emballage, accessoires, notice…) ; ils doivent si possible être accompagnés d’une copie du justificatif d’achat. Conformément aux dispositions légales, vous pouvez demander le formulaire-type de rétractation à nous adresser à l’adresse suivante : dépôt d’une plainte à l’adresse . Procédure de remboursement : la procédure de remboursement peut s’effectuer après une enquête sur le ou les produits achetés, plus de détailsdépôt d’une plainte à l’adresse

                Article 12 : Garanties

                Conformément à la loi, le Vendeur assume les garanties suivantes : de conformité et relative aux vices cachés des produits. Le Vendeur rembourse l’acheteur ou échange les produits apparemment défectueux ou ne correspondant pas à la commande effectuée. La demande de remboursement doit s’effectuer de la manière suivante : dépôt d’une plainte à l’adresse
                Le Vendeur rappelle que le consommateur : – dispose d’un délai de 2 ans à compter de la délivrance du bien pour agir auprès du Vendeur – qu’il peut choisir entre le remplacement et la réparation du bien sous réserve des conditions prévues par les dispositions susmentionnées. apparemment défectueux ou ne correspondant – qu’il est dispensé d’apporter la preuve l’existence du défaut de conformité du bien durant les six mois suivant la délivrance du bien. – que, sauf biens d’occasion, ce délai sera porté à 24 mois à compter du 18 mars 2016 – que le consommateur peut également faire valoir la garantie contre les vices cachés de la chose vendue au sens de l’article 1641 du code civil et, dans cette hypothèse, il peut choisir entre la résolution de la vente ou une réduction du prix de vente (dispositions des articles 1644 du Code Civil). Garanties complémentaires : _____ (décrire vos garanties complémentaires)

                Article 13 : Réclamations et mediation

                Le cas échéant, l’Acheteur peut présenter toute réclamation en contactant la société au moyen des coordonnées suivantes dépôt d’une plainte à l’adresse . Conformément aux dispositions des art. L. 611-1 à L. 616-3 du Code de la consommation, le consommateur est informé qu’il peut recourir à un médiateur de la consommation dans les conditions prévues par le titre Ier du livre VI du code de la consommation. En cas d’échec de la demande de réclamation auprès du service client du Vendeur, ou en l’absence de réponse dans un délai de deux mois, le consommateur peut soumettre le différent à un médiateur qui tentera en toute indépendance de rapprocher les parties en vue d’obtenir une solution amiable.

                Article 14 : résolution du contrat

                La commande peut être résolue par l’acheteur par lettre recommandée avec demande d’avis de réception dans les cas suivants : — livraison d’un produit non conforme aux caractéristiques de la commande ; — livraison dépassant la date limite fixée lors de la commande ou, à défaut de date, dans les trente jours suivant le paiement ; — de hausse du prix injustifiée ou de modification du produit. Dans ces cas, l’acheteur peut exiger le remboursement de l’acompte versé majoré des intérêts calculés au taux légal à partir de la date d’encaissement de l’acompte.

                Article 15 : Droits de propriété intellectuelle

                Les marques, noms de domaines, produits, logiciels, images, vidéos, textes ou plus généralement toute information objet de droits de propriété intellectuelle sont et restent la propriété exclusive du vendeur. Aucune cession de droits de propriété intellectuelle n’est réalisée au travers des présentes CGV. Toute reproduction totale ou partielle, modification ou utilisation de ces biens pour quelque motif que ce soit est strictement interdite.

                Article 16 : Force majeure

                L’exécution des obligations du vendeur au terme des présentes est suspendue en cas de survenance d’un cas fortuit ou de force majeure qui en empêcherait l’exécution. Le vendeur avisera le client de la survenance d’un tel évènement dès que possible.

                Article 17 : Nullité et modification du contrat

                Si l’une des stipulations du présent contrat était annulée, cette nullité n’entraînerait pas la nullité des autres stipulations qui demeureront en vigueur entre les parties. Toute modification contractuelle n’est valable qu’après un accord écrit et signé des parties. Article 18 : Protection des données personnelles Conformément au Règlement 2016/679 du 27 avril 2016 relatif à la protection des personnes physiques à l’égard du traitement des données à caractère personnel et à la libre circulation de ces données, le Vendeur met en place un traitement de données personnelles qui a pour finalité la vente et la livraison de produits et services définis au présent contrat. L’Acheteur est informé des éléments suivants : – l’identité et les coordonnées du responsable du traitement et, le cas échéant, du représentant du responsable du traitement : le Vendeur, tel qu’indiqué en haut des présentes CGV ; – les coordonnées du délégué à la protection des données : ……. – la base juridique du traitement : l’exécution contractuelle – les destinataires ou les catégories de destinataires des données à caractère personnel, s’ils existent  : le responsable du traitement, ses services en charge du marketing, les services en charge de la sécurité informatique, le service en charge de la vente, de la livraison et de la commande, les sous-traitant intervenants dans les opérations de livraison et de vente ainsi que toute autorité légalement autorisée à accéder aux données personnelles en question – aucun transfert hors UE n’est prévu – la durée de conservation des données : le temps de la prescription commerciale – la personne concernée dispose du droit de demander au responsable du traitement l’accès aux données à caractère personnel, la rectification ou l’effacement de celles-ci, ou une limitation du traitement relatif à la personne concernée, ou du droit de s’opposer au traitement et du droit à la portabilité des données – La personne concernée a le droit d’introduire une réclamation auprès d’une autorité de contrôle – les informations demandées lors de la commande sont nécessaires à l’établissement de la facture (obligation légale) et la livraison des biens commandés, sans quoi la commande ne pourras pas être passée. Aucune décision automatisée ou profilage n’est mis en oeuvre au travers du processus de commande.

                Article 18 : Droit applicable et clauses

                Toutes les clauses figurant dans les présentes conditions générales de vente, ainsi que toutes les opérations d’achat et de vente qui y sont visées, seront soumises au droit français. La nullité d’une clause contractuelle n’entraîne pas la nullité des présentes conditions générales de vente.

                Article 19 : Information des consommateurs

                Aux fins d’information des consommateurs, les dispositions du code civil et du code de la consommation sont reproduites ci-après : Aricle 1641 du Code civil : Le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue qui la rendent impropre à l’usage auquel on la destine, ou qui diminuent tellement cet usage que l’acheteur ne l’aurait pas acquise, ou n’en aurait donné qu’un moindre prix, s’il les avait connus. Aricle 1648 du Code civil : L’action résultant des vices rédhibitoires doit être intentée par l’acquéreur dans un délai de deux ans à compter de la découverte du vice. Dans le cas prévu par l’article 1642-1, l’action doit être introduite, à peine de forclusion, dans l’année qui suit la date à laquelle le vendeur peut être déchargé des vices ou des défauts de conformité apparents.
                Article L. 217-4 du Code de la consommation : Le vendeur livre un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l’emballage, des instructions de montage ou de l’installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité.
                Article L. 217-5 du Code de la consommation : Le bien est conforme au contrat : 1° S’il est propre à l’usage habituellement attendu d’un bien semblable et, le cas échéant : – s’il correspond à la description donnée par le vendeur et possède les qualités que celui-ci a présentées à l’acheteur sous forme d’échantillon ou de modèle ; – s’il présente les qualités qu’un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant, notamment dans la publicité ou l’étiquetage ; 2° Ou s’il présente les caractéristiques définies d’un commun accord par les parties ou est propre à tout usage spécial recherché par l’acheteur, porté à la connaissance du vendeur et que ce dernier a accepté.
                Article L. 217-12 du Code de la consommation : L’action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien.
                Article L. 217-16 du Code de la consommation : Lorsque l’acheteur demande au vendeur, pendant le cours de la garantie commerciale qui lui a été consentie lors de l’acquisition ou de la réparation d’un bien meuble, une remise en état couverte par la garantie, toute période d’immobilisation d’au moins sept jours vient s’ajouter à la durée de la garantie qui restait à courir. Cette période court à compter de la demande d’intervention de l’acheteur ou de la mise à disposition pour réparation du bien en cause, si cette mise à disposition est postérieure à la demande d’intervention.

                En aucun cas la génération automatique de ce document peut remplacer le travail d’un avocat ou tout expert dans le domaine, il s’agit d’une aide à la rédaction et bonne base pour débuter.

                Le partage des CGV sur votre site web est de votre responsabilité, c’est à vous d’adapter les points particuliers selon votre domaine.

            </div>


            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions_legales/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos mentions légales et CGU{% endblock %}

{% block body %}

              <h1 class=\"mt-3 mb-4\">Nos mentions légales et CGU</h1>
              <div class=\"container\">
                <h2>Définitions</h2>
                <p><b>Client :</b> tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.<br>
                <b>Prestations et Services :</b> <a href=\"https://www.live-event.com\">https://www.live-event.com</a> met à disposition des Clients :</p>

                <p><b>Contenu :</b> Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>

                <p><b>Informations clients :</b> Ci après dénommé « Information (s) » qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par <a href=\"https://www.live-event.com\">https://www.live-event.com</a> pour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>


                <p><b>Utilisateur :</b> Internaute se connectant, utilisant le site susnommé.</p>
                <p><b>Informations personnelles :</b> « Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
                <p>Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données sensibles » ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

                <h2>1. Présentation du site internet.</h2>
                <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet <a href=\"https://www.live-event.com\">https://www.live-event.com</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
                </p><p><strong>Propriétaire</strong> :  SAS Live Event Capital social de 1000€  – 91, rue Nationale, Immeuble Le Plaza 59000 lille<br>
                              
                <strong>Responsable publication</strong> : Mortreu Adam – adam.mortreu1@gmail.com<br>
                Le responsable publication est une personne physique ou une personne morale.<br>
                <strong>Webmaster</strong> : Devos William – william.decospro@gmail.com<br>
                <strong>Hébergeur</strong> : ovh – 2 rue Kellermann 59100 Roubaix 1007<br>
                <strong>Délégué à la protection des données</strong> : Adam Mortreu – adam.mortreu1@gmail.com<br>
                </p>

                <div ng-bind-html=\"linkHTML\"><p>Ce modèle de mentions légales est proposé par le <a href=\"https://fr.orson.io/1371/generateur-mentions-legales\" title=\"générateur gratuit de mentions légales pour un site internet\">générateur gratuit de mentions légales pour un site internet</a></p></div>



                <h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

                <p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. 
                Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>

                <p>L’utilisation du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> sont donc invités à les consulter de manière régulière.</p>

                <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
                Le site web <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est mis à jour régulièrement par <a href=\"https://www.live-event.com\">https://www.live-event.com</a> responsable. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>

                <h2>3. Description des services fournis.</h2>

                <p>Le site internet <a href=\"https://www.live-event.com\">https://www.live-event.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’efforce de fournir sur le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

                <p>Toutes les informations indiquées sur le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

                <h2>4. Limitations contractuelles sur les données techniques.</h2>

                <p>Le site utilise la technologie JavaScript.

                Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour
                Le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

                <p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> et l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>

                <h2>5. Propriété intellectuelle et contrefaçons.</h2>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.
                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : <a href=\"https://www.live-event.com\">https://www.live-event.com</a>.</p>

                <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

                <h2>6. Limitations de responsabilité.</h2>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> agit en tant qu’éditeur du site. <a href=\"https://www.live-event.com\">https://www.live-event.com</a>  est responsable de la qualité et de la véracité du Contenu qu’il publie. </p>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a>.
                Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. <a href=\"https://www.live-event.com\">https://www.live-event.com</a> se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

                <h2>7. Gestion des données personnelles.</h2>

                <p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679). </p>

                <h3>7.1 Responsables de la collecte des données personnelles</h3>

                <p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : Live Event. <a href=\"https://www.live-event.com\">https://www.live-event.com</a>est représenté par Devos, son représentant légal</p>

                <p>En tant que responsable du traitement des données qu’il collecte, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité.
                Chaque fois que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> traite des Données Personnelles, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> prend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles <a href=\"https://www.live-event.com\">https://www.live-event.com</a> les traite.</p>
                 
                <h3>7.2 Finalité des données collectées</h3>
                 
                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> est susceptible de traiter tout ou partie des données : </p>

                <ul>
                  
                <li>pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur : données de connexion et d’utilisation du Site, facturation, historique des commandes, etc. </li>
                 
                <li>pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé) </li>
                 
                <li>pour améliorer la navigation sur le Site : données de connexion et d’utilisation </li>
                 
                <li>pour mener des enquêtes de satisfaction facultatives sur <a href=\"https://www.live-event.com\">https://www.live-event.com</a> : adresse email </li>
                <li>pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email</li>


                </ul>

                <p><a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>
                 
                <h3>7.3 Droit d’accès, de rectification et d’opposition</h3>
                 
                <p>
                Conformément à la réglementation européenne en vigueur, les Utilisateurs de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> disposent des droits suivants : </p>
                 <ul>

                <li>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite </li>
                 
                <li>droit de retirer à tout moment un consentement (article 13-2c RGPD) </li>
                 
                <li>droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD) </li>
                 
                <li>droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD) </li>
                 
                <li>droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD) </li>
                 
                <li>droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui <a href=\"https://www.live-event.com\">https://www.live-event.com</a> devra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné</li>
                 </ul>

                <p>Dès que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> a connaissance du décès d’un Utilisateur et à défaut d’instructions de sa part, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’engage à détruire ses données, sauf si leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une obligation légale.</p>
                 
                <p>Si l’Utilisateur souhaite savoir comment <a href=\"https://www.live-event.com\">https://www.live-event.com</a> utilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter <a href=\"https://www.live-event.com\">https://www.live-event.com</a> par écrit à l’adresse suivante : </p>
                 
                Live Event – DPO, Adam Mortreu <br>
                91, rue Nationale, Immeuble Le Plaza 59000 lille.
                 
                <p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> corrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport). </p>

                <p>
                Les demandes de suppression de Données Personnelles seront soumises aux obligations qui sont imposées à <a href=\"https://www.live-event.com\">https://www.live-event.com</a> par la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> peuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).</p>
                 
                <h3>7.4 Non-communication des données personnelles</h3>

                <p>
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’interdit de traiter, héberger ou transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client. Pour autant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> reste libre du choix de ses sous-traitants techniques et commerciaux à la condition qu’il présentent les garanties suffisantes au regard des exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).</p>

                <p>
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> s’engage à prendre toutes les précautions nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne soient pas communiquées à des personnes non autorisées. Cependant, si un incident impactant l’intégrité ou la confidentialité des Informations du Client est portée à la connaissance de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, celle-ci devra dans les meilleurs délais informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ne collecte aucune « données sensibles ».</p>

                <p>
                Les Données Personnelles de l’Utilisateur peuvent être traitées par des filiales de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> et des sous-traitants (prestataires de services), exclusivement afin de réaliser les finalités de la présente politique.</p>
                <p>
                Dans la limite de leurs attributions respectives et pour les finalités rappelées ci-dessus, les principales personnes susceptibles d’avoir accès aux données des Utilisateurs de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> sont principalement les agents de notre service client.</p>
                
                <div ng-bind-html=\"rgpdHTML\"></div>


                <h2>8. Notification d’incident</h2>
                <p>
                Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue. 
                Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.</p>
                <p>
                Aucune information personnelle de l'utilisateur du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a>.</p>

                <h3>Sécurité</h3>

                <p>
                Pour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles de Santé, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> utilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe. </p>
                 
                <p>
                Lors du traitement des Données Personnelles, <a href=\"https://www.live-event.com\">https://www.live-event.com</a>prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p>
                 
                <h2>9. Liens hypertextes « cookies » et balises (“tags”) internet</h2>
                <p>
                Le site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>. Cependant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.
                <p></p>

                <h3>9.1. « COOKIES »</h3>
                 <p>
                Un « cookie » est un petit fichier d’information envoyé sur le navigateur de l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et l’heure d’accès. Les Cookies ne risquent en aucun cas d’endommager le terminal de l’Utilisateur.</p>
                 <p>
                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est susceptible de traiter les informations de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les recherches effectuées. Ces informations permettent à <a href=\"https://www.live-event.com\">https://www.live-event.com</a> d’améliorer le contenu du Site, de la navigation de l’Utilisateur.</p>
                 <p>
                Les Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être enregistré dans son terminal. <a href=\"https://www.live-event.com\">https://www.live-event.com</a> informe l’Utilisateur que, dans ce cas, il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.</p>
                 <p>
                Si l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur est informé que sa navigation et son expérience sur le Site peuvent être limitées. Cela pourrait également être le cas lorsque <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal, les paramètres de langue et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.</p>
                 <p>
                Le cas échéant, <a href=\"https://www.live-event.com\">https://www.live-event.com</a> décline toute responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services éventuellement proposés par <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour <a href=\"https://www.live-event.com\">https://www.live-event.com</a> d’enregistrer ou de consulter les Cookies nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de Cookies.</p>
                 <p>
                À tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses souhaits en matière de Cookies. <a href=\"https://www.live-event.com\">https://www.live-event.com</a> pourra en outre faire appel aux services de prestataires externes pour l’aider à recueillir et traiter les informations décrites dans cette section.</p>
                 <p>
                Enfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de <a href=\"https://www.live-event.com\">https://www.live-event.com</a> ou dans son application mobile et si l’Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation sur le Site Internet ou l’application mobile de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur vos terminaux (ordinateur, tablette, téléphone portable).</p>
                 <p>
                Ces types de cookies ne sont déposés sur vos terminaux qu’à condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l’application mobile de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>. À tout moment, l’Utilisateur peut néanmoins revenir sur son consentement à ce que <a href=\"https://www.live-event.com\">https://www.live-event.com</a> dépose ce type de cookies.</p>
                 
                <h3>Article 9.2. BALISES (“TAGS”) INTERNET</h3>
                 

                <p>

                <a href=\"https://www.live-event.com\">https://www.live-event.com</a> peut employer occasionnellement des balises Internet (également appelées « tags », ou balises d’action, GIF à un pixel, GIF transparents, GIF invisibles et GIF un à un) et les déployer par l’intermédiaire d’un partenaire spécialiste d’analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l’adresse IP de l’Utilisateur) dans un pays étranger.</p>
                 
                <p>
                Ces balises sont placées à la fois dans les publicités en ligne permettant aux internautes d’accéder au Site, et sur les différentes pages de celui-ci. 
                 </p>
                <p>
                Cette technologie permet à <a href=\"https://www.live-event.com\">https://www.live-event.com</a> d’évaluer les réponses des visiteurs face au Site et l’efficacité de ses actions (par exemple, le nombre de fois où une page est ouverte et les informations consultées), ainsi que l’utilisation de ce Site par l’Utilisateur. </p>
                 <p>
                Le prestataire externe pourra éventuellement recueillir des informations sur les visiteurs du Site et d’autres sites Internet grâce à ces balises, constituer des rapports sur l’activité du Site à l’attention de <a href=\"https://www.live-event.com\">https://www.live-event.com</a>, et fournir d’autres services relatifs à l’utilisation de celui-ci et d’Internet.</p>
                 <p>
                </p><h2>10. Droit applicable et attribution de juridiction.</h2>  
                 <p>
                Tout litige en relation avec l’utilisation du site <a href=\"https://www.live-event.com\">https://www.live-event.com</a> est soumis au droit français. 
                En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de </p>


                <h3>CONDITIONS GENERALES DE VENTE</h3>
 
                Entre la Société Live Event,
                22 AVENUE DES TILLEULS,
                au Capital Social de 1000
                immatriculée au Registre du Commerce et des Sociétés de PARIS,
                sous le numéro SIRET 123456789
                représentée par Adam Mortreu
                en qualité de gérant, dûment habilité aux fins des présentes.
                La société peut être jointe par email en cliquant sur le formulaire de contact accessible via la page d’accueil du site. Ou directement en utilisant l’adresse

                Ci-après le « Vendeur » ou la « Société ». D’une part, Et la personne physique ou morale procédant à l’achat de produits ou services de la société, Ci-après, « l’Acheteur », ou « le Client » D’autre part, Il a été exposé et convenu ce qui suit :

                PREAMBULE

                Le Vendeur est éditeur de Produits et Services de  festival à destination de consommateurs, commercialisés par l’intermédiaire de ses sites Internet (www.live-envent.com). La liste et le descriptif des biens et services proposés par la Société peuvent être consultés sur les sites susmentionnés.

                Article 1 : Objet

                Les présentes Conditions Générales de Vente déterminent les droits et obligations des parties dans le cadre de la vente en ligne de Produits ou Services proposés par le Vendeur.
                

                Article 2 : Dispositions générales

                Les présentes Conditions Générales de Vente (CGV) régissent les ventes de Produits ou de Services, effectuées au travers des sites Internet de la Société, et sont partie intégrante du Contrat entre l’Acheteur et le Vendeur. Elle sont pleinement opposable à l’Acheteur qui les a accepté avant de passer commande. Le Vendeur se réserve la possibilité de modifier les présentes, à tout moment par la publication d’une nouvelle version sur son site Internet. Les CGV applicables alors sont celles étant en vigueur à la date du paiement (ou du premier paiement en cas de paiements multiples) de la commande. Ces CGV sont consultables sur le site Internet de la Société à l’adresse suivante : www.live-envent.com.
                La Société s’assure également que leur acceptation soit claire et sans réserve en mettant en place une case à cocher et un clic de validation. Le Client déclare avoir pris connaissance de l’ensemble des présentes Conditions Générales de Vente, et le cas échéant des Conditions Particulières de Vente liées à un produit ou à un service, et les accepter sans restriction ni réserve.
                Le Client reconnaît qu’il a bénéficié des conseils et informations nécessaires afin de s’assurer de l’adéquation de l’offre à ses besoins.
                Le Client déclare être en mesure de contracter légalement en vertu des lois françaises ou valablement représenter la personne physique ou morale pour laquelle il s’engage.
                Sauf preuve contraire les informations enregistrées par la Société constituent la preuve de l’ensemble des transactions.

                Article 3 : Prix

                Les prix des produits vendus au travers des sites Internet sont indiqués en Euros hors taxes et précisément déterminés sur les pages de descriptifs des Produits. Ils sont également indiqués en euros toutes taxes comprises (TVA + autres taxes éventuelles) sur la page de commande des produits, et hors frais spécifiques d’expédition. Pour tous les produits expédiés hors Union européenne et/ou DOM-TOM, le prix est calculé hors taxes automatiquement sur la facture. Des droits de douane ou autres taxes locales ou droits d’importation ou taxes d’état sont susceptibles d’être exigibles dans certains cas. Ces droits et sommes ne relèvent pas du ressort du Vendeur. Ils seront à la charge de l’acheteur et relèvent de sa responsabilité (déclarations, paiement aux autorités compétentes, etc.). Le Vendeur invite à ce titre l’acheteur à se renseigner sur ces aspects auprès des autorités locales correspondantes.La Société se réserve la possibilité de modifier ses prix à tout moment pour l’avenir. Les frais de télécommunication nécessaires à l’accès aux sites Internet de la Société sont à la charge du Client. Le cas échéant également, les frais de livraison.

                Article 4 : Conclusion du contrat en ligne

                Conformément aux dispositions de l’article 1127-1 du Code civil, le Client doit suivre une série d’étapes pour conclure le contrat par voie électronique pour pouvoir réaliser sa commande :; Information sur les caractéristiques essentielles du Produit ; – Choix du Produit, le cas échéant, de ses options – Indication des coordonnées essentielles du Client (identification, email, adresse…) ; – Acceptation des présentes Conditions Générales de Vente – Vérification des éléments de la commande (formalité du double clic) et, le cas échéant, correction des erreurs. Avant de procéder à sa confirmation, l’Acheteur a la possibilité de vérifier le détail de sa commande, son prix, et de corriger ses éventuelles erreur, ou annuler sa commande. La confirmation de la commande emportera formation du présent contrat. – Ensuite, suivi des instructions pour le paiement, paiement des produits, puis livraison de la commande. Le Client recevra confirmation par courrier électronique du paiement de la commande, ainsi qu’un accusé de réception de la commande la confirmant. Il recevra un exemplaire .pdf des présentes conditions générales de vente.
                Le client disposera pendant son processus de commande de la possibilité d’identifier d’éventuelles erreurs commises dans la saisie des données et de les corriger. La langue proposé pour la conclusion du contrat est la langue française.
                Les modalités de l’offre et des conditions générales de vente sont renvoyées par email à l’acheteur lors de la commande et archivées sur le site web du Vendeur. Le cas échéant, les règles professionnelles et commerciales auxquelles l’auteur de l’offre entend se soumettre sont consultables dans la rubrique « règles annexes » des présentes CGV, consultables sur le site du Vendeur à l’adresse suivante : www.live-envent.com
                L’archivage des communications, de la commande, des détails de la commande, ainsi que des factures est effectué sur un support fiable et durable de manière constituer une copie fidèle et durable conformément aux dispositions de l’article 1360 du code civil. Ces informations peuvent être produits à titre de preuve du contrat.
                Pour les produits livrés, la livraison se fera à l’adresse indiquée par le Client. Aux fins de bonne réalisation de la commande, le Client s’engage à fournir ses éléments d’identification véridiques. Le Vendeur se réserve la possibilité de refuser la commande, par exemple pour toute demande anormale, réalisée de mauvaise foi ou pour tout motif légitime.

                Article 5 : Produits et services

                Les caractéristiques essentielles des biens, des services et leurs prix respectifs sont mis à disposition de l’acheteur sur les sites Internet de la société, de même, le cas échéant, que le mode d’utilisation du produit. Conformément à l’article L112-1 du Code la consommation, le consommateur est informé, par voie de marquage, d’étiquetage, d’affichage ou par tout autre procédé approprié, des prix et des conditions particulières de la vente et de l’exécution des services avant toute conclusion du contrat de vente. Dans tous les cas, le montant total dû par l’Acheteur est indiqué sur la page de confirmation de la commande. Le prix de vente du produit est celui en vigueur indiqué au jour de la commande, celui-ci ne comportant par les frais de ports facturés en supplément. Ces éventuels frais sont indiqués à l’Achteur lors du process de vente, et en tout état de cause au moment de la confirmation de la commande. Le Vendeur se réserve la possibilité de modifier ses prix à tout moment, tout en garantissant l’application du prix indiqué au moment de la commande. Lorsque les produits ou services ne sont pas exécuté immédiatement, une information claire est donnée sur la page de présentation du produit quant aux dates de livraison des produits ou services. Le client atteste avoir reçu un détail des frais de livraison ainsi que les modalités de paiement, de livraison et d’exécution du contrat, ainsi qu’une information détaillée relative à l’identité du vendeur, ses coordonnées postales, téléphoniques et électroniques, et à ses activités dans le contexte de la présente vente. Le Vendeur s’engage à honorer la commande du Client dans la limite des stocks de Produits disponibles uniquement. A défaut, le Vendeur en informe le Client ; si la commande a été passée, et à défaut d’accord avec le Client sur une nouvelle date de livraison, le Vendeur rembourse le client. Les informations contractuelles sont présentées en détail et en langue française. Les parties conviennent que les illustrations ou photos des produits offerts à la vente n’ont pas de valeur contractuelle. La durée de validité de l’offre des Produits ainsi que leurs prix est précisée sur les sites Internet de la Société, ainsi que la durée minimale des contrats proposés lorsque ceux-ci portent sur une fourniture continue ou périodique de produits ou services. Sauf conditions particulières, les droits concédés au titre des présentes le sont uniquement à la personne physique signataire de la commande (ou la personne titulaire de l’adresse email communiqué).

                Article 6 : Conformité

                Conformément à l’article L.411-1 du Code de la consommation, les produits et les services offert à la vente au travers des présentes CGV répondent aux prescriptions en vigueur relatives à la sécurité et à la santé des personnes, à la loyauté des transactions commerciales et à la protection des consommateurs. Indépendamment de toute garantie commerciale, le Vendeur reste tenu des défauts de conformité et des vices cachés du produit.
                Conformément à l’article L.217-4, le vendeur livre un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l’emballage, des instructions de montage ou de l’installation lorsque celleci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité.
                Conformément aux dispositions légales en matière de conformité et de vices cachés (art. 1641 c. civ.), le Vendeur rembourse ou échange les produits défectueux ou ne correspondant pas à la commande. Le remboursement peut être demandé de la manière suivante : dépôt d’une plainte à l’adresse

                Article 7 : Clause de réserve de propriété

                Les produits demeurent la propriété de la Société jusqu’au complet paiement du prix.

                Article 8 : Modalités de livraison

                Les produits sont livrés à l’adresse de livraison qui a été indiquée lors de la commande et dans les délais indiqués. Ces délais ne prenent pas en compte le délai de préparation de la commande. Lorsque le Client commande plusieurs produits en même temps ceux-ci peuvent avoir des délais de livraison différents acheminés selon les modalités suivantes : livraison via un ou plusieurs colis. En cas de retard d’expédition dépôt d’une plainte à l’adresse . En cas de retard de livraison, le Client dispose de la possibilité de résoudre le contrat dans les conditions et modalités définies à l’Article L 138-2 du Code de la consommation. Le Vendeur procède alors au remboursement du produit et aux frais « aller » dans les conditions de l’Article L 138-3 du Code de la consommation. Le Vendeur met à disposition un point de contact téléphonique (coût d’une communication locale à partir d’un poste fixe) indiqué dans l’email de confirmation de commande afin d’assurer le suivi de la commande. Le Vendeur rappelle qu’au moment où le Client pend possession physiquement des produits, les risques de perte ou d’endommagement des produits lui sont transférés. Il appartient au Client de notifier au transporteur toute réserves sur le produit livré.

                Article 9 : Disponibilité et présentation

                En cas d’indisponibilité d’un article pour une période supérieure à 30 jours ouvrables, vous serez immédiatement prévenu des délais prévisibles de livraison et la commande de cet article pourra être annulée sur simple demande. Le Client pourra alors demander un avoir pour le montant de l’article ou son remboursement intégral et l’annulation de la commande.

                Article 10 : Paiement

                Le paiement est exigible immédiatement à la commande, y compris pour les produits en précommande. Le Client peut effectuer le règlement par carte de paiement ou chèque bancaire. Les cartes émises par des banques domiciliées hors de France doivent obligatoirement être des cartes bancaires internationales (Mastercard ou Visa).Le paiement sécurisé en ligne par carte bancaire est réalisé par notre prestataire de paiement. Les informations transmises sont chiffrées dans les règles de l’art et ne peuvent être lues au cours du transport sur le réseau. Une fois le paiement lancé par le Client, la transaction est immédiatement débitée après vérification des informations. Conformément aux dispositions du Code monétaire et financier, l’engagement de payer donné par carte est irrévocable. En communiquant ses informations bancaires lors de la vente, le Client autorise le Vendeur à débiter sa carte du montant relatif au prix indiqué. Le Client confirme qu’il est bien le titulaire légal de la carte à débiter et qu’il est légalement en droit d’en faire usage. En cas d’erreur, ou d’impossibilité de débiter la carte, la Vente est immédiatement résolue de plein droit et la commande annulée.

                Article 11 : Délai de rétractation

                Conformément aux dispositions de l’article L 221-5 du Code de la consommation, l’Acheteur dispose du droit de se rétracter sans donner de motif, dans un délai de quatorze (14) jours à la date de réception de sa commande. Le droit de rétractation peut être exercé en contactant la Société de la manière suivante : dépôt d’une plainte à l’adresse . Nous informons les Clients que conformément aux dispositions des articles L. 221-18 à L. 221-28 du Code de la consommation, ce droit de rétractation ne peut être exercé pour tout article dont un processus de fabrication ou d’acheminement est en cours. En cas d’exercice du droit de rétractation dans le délai susmentionné, le prix du ou des produits achetés et les frais d’envoi seront remboursés, les frais de retour restant à la charge du Client. Les retours des produits sont à effectuer dans leur état d’origine et complets (emballage, accessoires, notice…) ; ils doivent si possible être accompagnés d’une copie du justificatif d’achat. Conformément aux dispositions légales, vous pouvez demander le formulaire-type de rétractation à nous adresser à l’adresse suivante : dépôt d’une plainte à l’adresse . Procédure de remboursement : la procédure de remboursement peut s’effectuer après une enquête sur le ou les produits achetés, plus de détailsdépôt d’une plainte à l’adresse

                Article 12 : Garanties

                Conformément à la loi, le Vendeur assume les garanties suivantes : de conformité et relative aux vices cachés des produits. Le Vendeur rembourse l’acheteur ou échange les produits apparemment défectueux ou ne correspondant pas à la commande effectuée. La demande de remboursement doit s’effectuer de la manière suivante : dépôt d’une plainte à l’adresse
                Le Vendeur rappelle que le consommateur : – dispose d’un délai de 2 ans à compter de la délivrance du bien pour agir auprès du Vendeur – qu’il peut choisir entre le remplacement et la réparation du bien sous réserve des conditions prévues par les dispositions susmentionnées. apparemment défectueux ou ne correspondant – qu’il est dispensé d’apporter la preuve l’existence du défaut de conformité du bien durant les six mois suivant la délivrance du bien. – que, sauf biens d’occasion, ce délai sera porté à 24 mois à compter du 18 mars 2016 – que le consommateur peut également faire valoir la garantie contre les vices cachés de la chose vendue au sens de l’article 1641 du code civil et, dans cette hypothèse, il peut choisir entre la résolution de la vente ou une réduction du prix de vente (dispositions des articles 1644 du Code Civil). Garanties complémentaires : _____ (décrire vos garanties complémentaires)

                Article 13 : Réclamations et mediation

                Le cas échéant, l’Acheteur peut présenter toute réclamation en contactant la société au moyen des coordonnées suivantes dépôt d’une plainte à l’adresse . Conformément aux dispositions des art. L. 611-1 à L. 616-3 du Code de la consommation, le consommateur est informé qu’il peut recourir à un médiateur de la consommation dans les conditions prévues par le titre Ier du livre VI du code de la consommation. En cas d’échec de la demande de réclamation auprès du service client du Vendeur, ou en l’absence de réponse dans un délai de deux mois, le consommateur peut soumettre le différent à un médiateur qui tentera en toute indépendance de rapprocher les parties en vue d’obtenir une solution amiable.

                Article 14 : résolution du contrat

                La commande peut être résolue par l’acheteur par lettre recommandée avec demande d’avis de réception dans les cas suivants : — livraison d’un produit non conforme aux caractéristiques de la commande ; — livraison dépassant la date limite fixée lors de la commande ou, à défaut de date, dans les trente jours suivant le paiement ; — de hausse du prix injustifiée ou de modification du produit. Dans ces cas, l’acheteur peut exiger le remboursement de l’acompte versé majoré des intérêts calculés au taux légal à partir de la date d’encaissement de l’acompte.

                Article 15 : Droits de propriété intellectuelle

                Les marques, noms de domaines, produits, logiciels, images, vidéos, textes ou plus généralement toute information objet de droits de propriété intellectuelle sont et restent la propriété exclusive du vendeur. Aucune cession de droits de propriété intellectuelle n’est réalisée au travers des présentes CGV. Toute reproduction totale ou partielle, modification ou utilisation de ces biens pour quelque motif que ce soit est strictement interdite.

                Article 16 : Force majeure

                L’exécution des obligations du vendeur au terme des présentes est suspendue en cas de survenance d’un cas fortuit ou de force majeure qui en empêcherait l’exécution. Le vendeur avisera le client de la survenance d’un tel évènement dès que possible.

                Article 17 : Nullité et modification du contrat

                Si l’une des stipulations du présent contrat était annulée, cette nullité n’entraînerait pas la nullité des autres stipulations qui demeureront en vigueur entre les parties. Toute modification contractuelle n’est valable qu’après un accord écrit et signé des parties. Article 18 : Protection des données personnelles Conformément au Règlement 2016/679 du 27 avril 2016 relatif à la protection des personnes physiques à l’égard du traitement des données à caractère personnel et à la libre circulation de ces données, le Vendeur met en place un traitement de données personnelles qui a pour finalité la vente et la livraison de produits et services définis au présent contrat. L’Acheteur est informé des éléments suivants : – l’identité et les coordonnées du responsable du traitement et, le cas échéant, du représentant du responsable du traitement : le Vendeur, tel qu’indiqué en haut des présentes CGV ; – les coordonnées du délégué à la protection des données : ……. – la base juridique du traitement : l’exécution contractuelle – les destinataires ou les catégories de destinataires des données à caractère personnel, s’ils existent  : le responsable du traitement, ses services en charge du marketing, les services en charge de la sécurité informatique, le service en charge de la vente, de la livraison et de la commande, les sous-traitant intervenants dans les opérations de livraison et de vente ainsi que toute autorité légalement autorisée à accéder aux données personnelles en question – aucun transfert hors UE n’est prévu – la durée de conservation des données : le temps de la prescription commerciale – la personne concernée dispose du droit de demander au responsable du traitement l’accès aux données à caractère personnel, la rectification ou l’effacement de celles-ci, ou une limitation du traitement relatif à la personne concernée, ou du droit de s’opposer au traitement et du droit à la portabilité des données – La personne concernée a le droit d’introduire une réclamation auprès d’une autorité de contrôle – les informations demandées lors de la commande sont nécessaires à l’établissement de la facture (obligation légale) et la livraison des biens commandés, sans quoi la commande ne pourras pas être passée. Aucune décision automatisée ou profilage n’est mis en oeuvre au travers du processus de commande.

                Article 18 : Droit applicable et clauses

                Toutes les clauses figurant dans les présentes conditions générales de vente, ainsi que toutes les opérations d’achat et de vente qui y sont visées, seront soumises au droit français. La nullité d’une clause contractuelle n’entraîne pas la nullité des présentes conditions générales de vente.

                Article 19 : Information des consommateurs

                Aux fins d’information des consommateurs, les dispositions du code civil et du code de la consommation sont reproduites ci-après : Aricle 1641 du Code civil : Le vendeur est tenu de la garantie à raison des défauts cachés de la chose vendue qui la rendent impropre à l’usage auquel on la destine, ou qui diminuent tellement cet usage que l’acheteur ne l’aurait pas acquise, ou n’en aurait donné qu’un moindre prix, s’il les avait connus. Aricle 1648 du Code civil : L’action résultant des vices rédhibitoires doit être intentée par l’acquéreur dans un délai de deux ans à compter de la découverte du vice. Dans le cas prévu par l’article 1642-1, l’action doit être introduite, à peine de forclusion, dans l’année qui suit la date à laquelle le vendeur peut être déchargé des vices ou des défauts de conformité apparents.
                Article L. 217-4 du Code de la consommation : Le vendeur livre un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l’emballage, des instructions de montage ou de l’installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité.
                Article L. 217-5 du Code de la consommation : Le bien est conforme au contrat : 1° S’il est propre à l’usage habituellement attendu d’un bien semblable et, le cas échéant : – s’il correspond à la description donnée par le vendeur et possède les qualités que celui-ci a présentées à l’acheteur sous forme d’échantillon ou de modèle ; – s’il présente les qualités qu’un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant, notamment dans la publicité ou l’étiquetage ; 2° Ou s’il présente les caractéristiques définies d’un commun accord par les parties ou est propre à tout usage spécial recherché par l’acheteur, porté à la connaissance du vendeur et que ce dernier a accepté.
                Article L. 217-12 du Code de la consommation : L’action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien.
                Article L. 217-16 du Code de la consommation : Lorsque l’acheteur demande au vendeur, pendant le cours de la garantie commerciale qui lui a été consentie lors de l’acquisition ou de la réparation d’un bien meuble, une remise en état couverte par la garantie, toute période d’immobilisation d’au moins sept jours vient s’ajouter à la durée de la garantie qui restait à courir. Cette période court à compter de la demande d’intervention de l’acheteur ou de la mise à disposition pour réparation du bien en cause, si cette mise à disposition est postérieure à la demande d’intervention.

                En aucun cas la génération automatique de ce document peut remplacer le travail d’un avocat ou tout expert dans le domaine, il s’agit d’une aide à la rédaction et bonne base pour débuter.

                Le partage des CGV sur votre site web est de votre responsabilité, c’est à vous d’adapter les points particuliers selon votre domaine.

            </div>


            
{% endblock %}
", "mentions_legales/index.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\mentions_legales\\index.html.twig");
    }
}
