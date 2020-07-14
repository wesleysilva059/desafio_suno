<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')QyK^0R/RTc;4+$U(JXb9)l 6q2ABczg+#<R;Ve0F`*RxS1#v,k_H!>M9pG5I?Q ' );
define( 'SECURE_AUTH_KEY',  'oONcD&YT1`690iZ3x@`X{OfB:?Ls}jdWMzV=Ye* /#}x5rQ]X,^7Snn=rXL};DPo' );
define( 'LOGGED_IN_KEY',    'SKfS/x)#4==*%T*Ztd+ilzDAq+@0ae[U{:}npW[$fn1/BJ0C6dYxTl(#J?S9rgN!' );
define( 'NONCE_KEY',        'n ntFh{;qYi&9C<Y@9f+WSER3),%|iqN,=^<A*^<ieKJ:Ov8>z7)/.MlSboNq[fN' );
define( 'AUTH_SALT',        '0?9~ 0VLsryq0#K`v{G}+tC~,tK?%mo]=~3c8iX; HL_L;Ks,X6E^ii1MiYe5@ &' );
define( 'SECURE_AUTH_SALT', 'ER9&QbGdio)|k7T~I|:KKD-Tvx:tIIfkg,^g>|U^SoGel#]4Q#_XT mYtwoeHPo|' );
define( 'LOGGED_IN_SALT',   ' 1o6?1}xl=Nq_p14b+1wT_Ea.$1(NK7&/G?>nOZU.Z}6`r0r-{pxQT(63*$(Pi|y' );
define( 'NONCE_SALT',       '-s_8A_AsPtWyei/>}?atC2[u**X{UQ->I#GXOBD7?Eu7F!`i3m&?(nwm]yGH]y?h' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
