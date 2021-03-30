# Guitarist Memo
最近ギターのエフェクターなどの機材に関して見返せるものがあるといいなと思い、laravelの勉強も兼ねて作成しております。
自分のよく使っている機材情報を登録していつでも見れるようにできるといったアプリです。

## 使用技術
* Laravel 8.27, php 8.0.1
* Vagrant, Homestead
* AWS(S3)

## 実装機能一覧
* ユーザー情報の登録、編集
* 機材情報の登録、編集
* 画像の登録時にサイズ変換(Intervention-imageを使用)
* laravel/uiの導入
* validationの日本語化

## データベース図
![ER_Database](https://github.com/rei01saito/Effector/blob/images/Effector/ER_Database.png)

## URL
http://peaceful-taiga-50356.herokuapp.com/
