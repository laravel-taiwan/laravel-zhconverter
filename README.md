Laravel 繁簡轉換
===============

# 安裝方式

1. 在 composer.json中加入 "seta0909/laravel-zhconverter": "*"
2. composer update
3. 在 config/app.php 中加入 'Seta0909\LaravelZhconverter\LaravelZhconverterServiceProvider'

# 使用方式

###簡轉繁
ZhConvert::translate('无疑，这个村子弥漫着一种懒散而颓废的感觉>，这种感觉让我觉得非常的难受，比曾经我见过的那个无限轮回的死村还难受，毕竟无限轮回还有破除的消，这村子里的这种气氛无疑就是一种绝望','TW');

###繁轉簡
ZhConvert::translate('我是一個不大會拒絕人的人，看著這個中年人>，或者是老年人吧，我覺得幾根兒煙也無可厚非，于是我把剩下的半包全部給了他，他接過煙，嘿嘿一笑，也不說聲謝謝，轉身就要走','CN');

# 注意事項

1. 目前只支援UTF-8

# 資料來源

繁簡字來源：http://www.mediawiki.org/wiki/MediaWiki
