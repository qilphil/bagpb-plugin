<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen mit dem Namen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'wp_bag');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', '');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j +Kt7aUz|0U2 zMB>Z/tFR6,AEO{&}I~P{imENR@ej1o(:s{`?As5X3ys;kxSe)');
define('SECURE_AUTH_KEY',  'EP`NoacuGQw|d,E!j5BhS@_Y+* p{Y$/Q9hzEy{H4@$2;rLilPge]E6Y<>#a~F/y');
define('LOGGED_IN_KEY',    '@Kd)TKTyj5M0cR,JEGMzR5M4jIi9Rnc}aBhsvGg.-~&L8^4%;D%IftMyT(E6uE9Y');
define('NONCE_KEY',        'Cf#FAL|VZ2S9o0KE7lwJtd?P]<WJ{p}C.}$(y9O~`Zt(0C [|V^m~-+1[u>_6i+N');
define('AUTH_SALT',        '(UN9srT6yath=H?*cW~WV*+q!Hr>x6kA#;e$kt<gu+p!.Iz#yy+,N#T o+/m$OHV');
define('SECURE_AUTH_SALT', 'IuV!Wr:8v)>6N}}y5-Hn?>/kcrQ5X@gU;l8 NIHdJ4ACXLgV9KWFgi/+E![^o+n>');
define('LOGGED_IN_SALT',   '+B=V3F%||29FqsB!/@>RXl10:[=m%^TCm;;;fVhE)xG8zz> )l&M}h[]P5#r?Fl_');
define('NONCE_SALT',       'q(!wqt.q!6|tMJ]V51rU6n}V`|:m?;X+SHqI,QZ>:`B6,B%@.xQLJM&0oc<GKK&l');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
