# README

## 概要
このプログラムは、PHPで作られたヘッダーコンポーネントのクラスです。
コンストラクタでタイトルを指定し、renderメソッドを呼び出すことでヘッダーコンポーネントが表示できます。

## クラス
### HeaderComponent
#### プロパティ
- `$title` : string型 タイトル
#### メソッド
##### `__construct($title)`
- 引数 : string型
- 戻り値 : なし
- 概要 : タイトルを設定します。
##### `render()`
- 引数 : なし
- 戻り値 : なし
- 概要 : ヘッダーコンポーネントを表示します。


## ディレクトリ構成
```
└──php-html-components
    ├──docker-compose.yml
    ├──nginx
    │   └──nginx.conf
    ├──php
    │   ├──Dockerfile
    │   └──php.ini
    └──www
        └──html
            ├──components
            │   ├──footer
            │   │   ├──component.php
            │   │   └──element.php
            │   ├──header
            │   │   ├──component.php
            │   │   └──element.php
            │   └──importComponents.php
            └──index.php
```

## 構成図
```mermaid
graph TD;
    root[php-html-components] --> docker-compose.yml;
    docker-compose.yml --> nginx;
    nginx --> nginx.conf;
    docker-compose.yml --> php;
    php --> Dockerfile;
    php --> php.ini;
    php --> www;
    www --> html;
    html --> components;
    components --> footer;
    footer --> component.php;
    component.php --> element.php;
    components --> header;
    header --> component.php;
    component.php --> element.php;
    header --> importComponents.php;
    html --> index.php;
```