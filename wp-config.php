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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '&!<Qm08L#4fU$Qd@?CWnDyS)DTt}#<6JV9lu9Dd-3sqO!ZJh_iqTD[mA$YJfaR!,' );
define( 'SECURE_AUTH_KEY',  '3I1?0q<S=9VP.d`l ajn]%P?|,DC%[G0>Yi@:V>K$$y!_nP;@*Rpv(&!5//zPz<G' );
define( 'LOGGED_IN_KEY',    'i)czy8fZq5$nqT0im-?Rq4!J;b>%=K)4Usg[f56<~Am9){-M9]S`:ytfCgA%&s4s' );
define( 'NONCE_KEY',        'q}7r7(yB7UKNtZlyYc6dZT3nv.qIl{~HJEGfq.%HO~|mL` wLv1dx7VKVy3{d_EG' );
define( 'AUTH_SALT',        'YW#>ofC<%R+gzD& Xyy&-MhR$e-BNPsA P^gTcBCx?9{ }]_x3jtHkUti5x+-xmE' );
define( 'SECURE_AUTH_SALT', 'LHmEbG[j4f>.XVMozy7yfN,RfWM,-/Nj&SZN,f%n.lbjRV(7ZDHiT+-nOVkuCdMi' );
define( 'LOGGED_IN_SALT',   '8#FM[h]-@Jt1]NsDbZQY/FY0PaJD7le8N<3_OX_y%^Fx{v14hQ{d,Q,ZYq.b~DvF' );
define( 'NONCE_SALT',       'Alolfb[T:5fdG;D}/pxpoT#s,J)Q~@u+OPK:8.RdqtCWI&z;1P/Gp3vj6Gd($2g0' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
