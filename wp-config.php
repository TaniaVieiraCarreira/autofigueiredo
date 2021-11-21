<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'autofigueiredo' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '~+E?R)[8[r;SgIr;)u3AWzi#AO=}IF(n4p8,@B<1nwh5pV9J%X1@o^p0Z~Nf!g5I' );
define( 'SECURE_AUTH_KEY', 'fYJREH0W5yy>w1Nm)R)W_yH<hAv2NonCN?9,-H*@VS7AnFyOSA]O`dEEwn]zBxc_' );
define( 'LOGGED_IN_KEY', '6T`&yf{H+hu``U^m.deeNB?##%ZbKUyW`(vY[wOX+5/p6:6Y7>+2I;fJEA#KCpI8' );
define( 'NONCE_KEY', 'W!O83}@|v~#y7+-!{3Huhsw}eYrO7<2H|y (KG={B*k=Ig% .]$F_;m5Uj{Hs|]p' );
define( 'AUTH_SALT', 'EIh.. HQk&;Ho}&d(Hn|4{oN/Gve:v=xZjwxy08V9c*X(&Brc=Uh)Ib+6a^3Pl>8' );
define( 'SECURE_AUTH_SALT', 'Ls$F!>iW/@T[MgcFD.b]m>YIABg*D7OR~lxlD|.lvCrCwR=^Umi_-Yw1f/QxAnUy' );
define( 'LOGGED_IN_SALT', 'fO~}W<7L_is8lEaicPpC:)mtI=oiLg)gWJ},2?amSIAD-&KAS<q6+j`]/IK%J&H;' );
define( 'NONCE_SALT', '-8}jIgG15H&oI`5Sz3_O+.DY=0|jL~FTU%$G9b&?<6pEm}fH.#LHX/PgvN{}s.)u' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'af_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
