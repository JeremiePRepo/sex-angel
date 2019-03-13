<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'jeremiepzbdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'jeremiepzbdd');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Gspd8WQ9');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql51-79.perso');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XJI4+g1s`8rwT^+HeuI*gM?f]Rq;(5U,ukot[yjZ5 b,)A}RvOKnU*X?pe`bd&vG');
define('SECURE_AUTH_KEY',  '*-RH.|1CK}h]sxQ]o#)%+i6KN)$@!aCloXf-#7A;h,UaE}1TAKdR0Y+<rT}pmO>[');
define('LOGGED_IN_KEY',    'S^M0?#s+MGy*J)aj ay0##ptSAK)9YKtRZ_DJ}gdY,CXY+//}X}pgJ!/)&.6(+Lr');
define('NONCE_KEY',        'Xa(sB}9^y]t]D]4;;#EXNPM%Ku>#|I:Up<v{+(_!_$~ |V.HdxXSMMx#/g2{jn$e');
define('AUTH_SALT',        'G{{]<;eappXLos{_/)TNU?,%,;%(vf&CA<jy}G%M4pq !Zr:_]VobxWv)v}C*|HP');
define('SECURE_AUTH_SALT', '`Opa*=jAx/e`4-pVQ/3:4<3UspFk.Nv|2^1YN5aGf]p# +f1)Z9[=hOk6V!eCh]A');
define('LOGGED_IN_SALT',   'p9,5`kAwcav3-:9Kh;FvZ)s^rWa9fDDOK]zvg<9pHI!ZXZvKr8X=`4,d8.@_-UhB');
define('NONCE_SALT',       'mb|3;Ep||Y Ww8,i,3!COurOm?7Ix+(Wo`S#,GS*5-ca+JBj=T&?#^~7ZJTlY1jD');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'vhk_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

