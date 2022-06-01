<?php
/**
 * File for vendor customization, you can change here paths or some behaviour,
 * which vendors such as Linux distributions might want to change.
 *
 * For changing this file you should know what you are doing. For this reason
 * options here are not part of normal configuration.
 */

declare(strict_types=1);

if (! defined('PHPMYADMIN')) {
    exit;
}

define('CONFIG_DIR', '/etc/phpmyadmin/');

return [
    /**
     * Path to vendor autoload file. Useful when you want to have vendor dependencies somewhere else.
     */
    'autoloadFile' => ROOT_PATH . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php',

    /**
     * Directory where cache files are stored.
     */
    'tempDir' => '/var/lib/phpmyadmin/tmp/',

    /**
     * Path to changelog file, can be gzip compressed.
     * Useful when you want to have documentation somewhere else, e.g. /usr/share/doc.
     */
    'changeLogFile' => ROOT_PATH . 'ChangeLog',

    /**
     * Path to license file. Useful when you want to have documentation somewhere else, e.g. /usr/share/doc.
     */
    'licenseFile' => ROOT_PATH . 'LICENSE',

    /**
     * Directory where SQL scripts to create/upgrade configuration storage reside.
     */
    'sqlDir' => ROOT_PATH . 'sql' . DIRECTORY_SEPARATOR,

    /**
     * Filename of a configuration file.
     */
    'configFile' => CONFIG_DIR . 'config.inc.php',

    /**
     * Filename of custom header file.
     */
    'customHeaderFile' => CONFIG_DIR . 'config.header.inc.php',

    /**
     * Filename of custom footer file.
     */
    'customFooterFile' => CONFIG_DIR . 'config.footer.inc.php',

    /**
     * Default value for check for version upgrades.
     */
    'versionCheckDefault' => false,

    /**
     * Path to files with compiled locales (*.mo)
     */
    'localePath' => ROOT_PATH . 'locale' . DIRECTORY_SEPARATOR,

    /**
     * Define the cache directory for routing cache and other cache files
     */
    'cacheDir' => ROOT_PATH . 'libraries' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR,

    /**
     * Suffix to add to the phpMyAdmin version
     */
    'versionSuffix' => '',
];

/**
 * TCPDF workaround. Avoid referring to nonexistent files (causes warnings when open_basedir is used).
 * This is defined to avoid the TCPDF code to search for a directory outside of open_basedir.
 * This value if not used but is useful, no header logic is used for PDF exports.
 *
 * @see https://github.com/phpmyadmin/phpmyadmin/issues/16709
 */
define('K_PATH_IMAGES', ROOT_PATH);
