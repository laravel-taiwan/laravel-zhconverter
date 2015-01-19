<?php
    namespace Seta0909\LaravelZhconverter;

    /**
     * Created by PhpStorm.
     * User: Seta
     * Date: 2015/1/19
     * Time: 上午 09:45
     */

    class LaravelZhconverter
    {
        private static $instance;
        protected static $cnCode = [];
        protected static $twCode = [];

        private static function getInstance()
        {
            if (!isset(self::$instance)) {
                require('ZhConversion.php');
                $class          = __CLASS__;
                self::$instance = new $class();
                self::$cnCode   = $zh2Hant;
                self::$twCode   = $zh2Hans;
            }
        }

        public static function translate($words, $type)
        {
            self::getInstance();
            $translated = '';
            for ($i = 0; $i < mb_strlen($words); $i++) {
                $word = mb_substr($words, $i, 1, "utf-8");
                if ($type == 'CN') {
                    $translated .= (isset(self::$twCode[$word])) ? self::$twCode[$word] : $word;
                } else {
                    $translated .= (isset(self::$cnCode[$word])) ? self::$cnCode[$word] : $word;
                }
            }
            return $translated;
        }
    }