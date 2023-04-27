# Laravel 9 保持日誌整潔

引入 accentinteractive 的 laravel-logcleaner 套件來擴增保持日誌整潔，可配置想要保存的日誌總數。當到達此日誌數目時，在建立新的日誌前，它會刪除最舊的日誌。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __logcleaner:run__ 來執行修飾大型日誌檔案和刪除舊的日誌檔案。
```sh
$ php artisan logcleaner:run
```

----

## 畫面截圖
![](https://i.imgur.com/XgLg960.png)
> 可以定義日誌策略