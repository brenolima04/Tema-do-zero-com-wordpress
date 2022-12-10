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
define( 'DB_NAME', 'alura-intercambios' );

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
define( 'AUTH_KEY',         '%ncQZ~Dbcua?zJ{=ZL3JghH4M)C@20PZJ<Pwo*Uyg>V[Auvno}Ke)8(jh}t!lRH?' );
define( 'SECURE_AUTH_KEY',  'N_;pvc~z>EptE~:L8&s?.lWBT3t/5I2,Ew<FjjjXqu`?Z~UY|tz^0*e+Wa`W 1L[' );
define( 'LOGGED_IN_KEY',    'mNODYp>Lt}%ayh@G2Nkk5qOEU]upAw~uPLP.KKH=C<:)j:4O_`5MSgf{i:*)8CYX' );
define( 'NONCE_KEY',        '4BS,.m3+%R/P11=&OpbGeNM7eA|<S3N)FvO1k>EV A>X!?!y3-cFAzW=#CzVOIf!' );
define( 'AUTH_SALT',        'Nr`cck^?vQjoG%IQvk9b?WqY .HYl.cJY[W|g$H9C9d{8%p.Gl/f]&oG%!]SzWaE' );
define( 'SECURE_AUTH_SALT', 'hNUV)s gZO C%7%9K5H!H.SvXw>V;_I([efs#|!$Ly*FG*O2+6>-RV)_NQJi_0ux' );
define( 'LOGGED_IN_SALT',   'v]11jYAmzYGyuIp:gx<DN)?7s] :S~1SRpJn!G~Gp5<VP vp%.q[Ch[y)6afC</=' );
define( 'NONCE_SALT',       '*A,~VtbZ+@GAW4;#w!Ukx)%XJQ?*~n%fTs*)MJ2g8l6@(`6{Rw?]WB?d>1Owi]L*' );

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
