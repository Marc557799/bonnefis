<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bonnefis-2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8888' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^-9R2ph+.}xmfqfe~$$X=~8m^aIa{gf@SvZdPg<>#L5z!Vs*YKki;W`f=^Ab9;`I' );
define( 'SECURE_AUTH_KEY',  'IG)0e20U/]vFZs,~)>dDsbaGo=HpAphQ)%!?a,/*t+&*l.iDH#c@W-omEX=!9EIw' );
define( 'LOGGED_IN_KEY',    '=8Grbp54X-Ty*&nUA]}DDF,AQXH3*=`O(Y>N6j3)&KUd{wP83u+RuFxI:FOVK{Ga' );
define( 'NONCE_KEY',        '$ZL&WrY|zbtoIBGH/.P]kUhMw40}bU/(#iJQL[a]gwIk;4:.N&I,pj7aZk}#}W/+' );
define( 'AUTH_SALT',        '1i35UceLxdZ}Vx7>|p4o#%|U CxO)n<!Jyh0FYos/-Wj/1rn-AJ2_R 7be2PZZ&H' );
define( 'SECURE_AUTH_SALT', '?hmU5s9%x&try^+]z]8syU]XP8f(gUEDHhW_)t1W~Eb]3NcRJ>HyReUo:9&)xSab' );
define( 'LOGGED_IN_SALT',   'Z2} FJXemBmLM|`<VDG2<a/Q-rd!fGWh~`De1_  0ZqV+WB:Vwj8b`4P7~yUE &,' );
define( 'NONCE_SALT',       '6*|D_=<{hr|QY3x=.$o{nJbfe</4g&1g`.WD/LD!lz&s$2~@{WX[?e@n7_e8`,(+' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
