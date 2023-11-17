<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'databasevaleriocorda.it' );

/** Nome utente del database */
define( 'DB_USER', 'mamp' );

/** Password del database */
define( 'DB_PASSWORD', '2diligence$' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gnx-,n}2BtZ-#]/eHqP(#Y=*$BqR)CA;@rRS4aWHg<MEf* r5|f]yR:!W0Nc5Sy6' );
define( 'SECURE_AUTH_KEY',  '2f{.qb,MN!_oR7i_27t_uWay,tFW>9V-lzl*buL3bA)Ybp(qslJcVL] [Q=H5tX$' );
define( 'LOGGED_IN_KEY',    '~)[9>`ulP{U`AuqS[l^`Y?l+~I<4A@#()~m2kE*,H+_moJ>yM;,Br&kBd7wt]Gy6' );
define( 'NONCE_KEY',        ']Do<!a(evSx0C3Hqjhh5sz#Vh*J~{1^3F3@@^h60;W9|_%j$Z#8vC])_^3t<}J:S' );
define( 'AUTH_SALT',        ':XTu/{w:{C- zZI~L*?9SMMDpM+`>3[oce%c?Sut:PiQU`pdjCd%rPZY/T{mrXrZ' );
define( 'SECURE_AUTH_SALT', 'nbS9#GY/l-Aa&eQ{0_(&LTq,r~l#a;zN2qA}f#^O3qEvNT,3Jdn.?c`CMj?75MW]' );
define( 'LOGGED_IN_SALT',   '6C#P2k{4MV3rsR%_Eqg@2t3!HH.m+z%GHnbH0/<XDv[+~27nLSq[mhFv7:T(=[Ts' );
define( 'NONCE_SALT',       'D5mKe;it_3B] 9,r~+y=$hI%|As,QqfanTq,YItbz&4b~rv2hxt SC*IeV@ :SnV' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
