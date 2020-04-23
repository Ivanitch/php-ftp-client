<?php

namespace Lazzard\FtpClient\Configuration;

/**
 * This constant specifies that the value of particular php directive in
 * your php.ini file will not be overrated, use this constant if you
 * want to use default directives values in your php.ini file.
 */
define(__NAMESPACE__ . '\NOT_CHANGE', 'directive_value_will_not_be_changed');

return [

    /**
     * Default FTP configuration setup.
     */
    "default" => [

        /**
         * The active mode it the default mode when connecting to
         * the ftp server using ftp_connect.
         */
        "passive"           => false,

        /**
         * Ftp runtime options default values was mentioned in
         * the php manual.
         *
         * https://www.php.net/manual/en/function.ftp-set-option.php
         */
        "timeout"           => 90,
        "autoSeek"          => true,
        "usePassiveAddress" => true,

        /**
         * Ftp default root folder.
         */
        "initialDirectory"  => '/',

        /**
         * Php resources limits.
         */
        "phpLimit"          => [

            "maxExecutionTime" => 55,

        ]
    ],

    "recommended" => [

    ]

];