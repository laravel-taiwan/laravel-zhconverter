<?php

namespace Seta0909\LaravelZhconverter;

class LaravelZhconverter
{
    public static function translate($words, $type)
    {
        $translated = '';

        for ($i = 0; $i < mb_strlen($words); $i++) {
            $word = mb_substr($words, $i, 1, "utf-8");
            if ($type == 'CN') {
                $translated .= isset(ZhConversion::$zh2Hans[$word])
                    ? ZhConversion::$zh2Hans[$word]
                    : $word;
            } else {
                $translated .= isset(ZhConversion::$zh2Hant[$word])
                    ? ZhConversion::$zh2Hant[$word]
                    : $word;
            }
        }

        return $translated;
    }
}
