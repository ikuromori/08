SQLのデータベースに登録・削除・表示を行うプログラムを作成。

ユーザはLINEbotから登録と表示が可能。

管理者はGoogle　chromeよりmaintain.phpにアクセスすることで表示、削除が可能。

添付しているscreenshotを参照。

●LINEアカウント名
「診察券登録bot」（QRコードはアップロードしてます）

●管理者画面
https://ikuromori.sakura.ne.jp/09.SAKURA/maintain.php


やったこと

１　LINE公式アカウントの作成

２　さくらレンタルサーバーにSQLとPHPファイルを置いた

３　LINEbotをWebhookしてをさくらレンタルサーバに置いている該当プログラムと連携
https://ikuromori.sakura.ne.jp/09.SAKURA/index.php

ポイント　
LIFFフォームでLINEからユーザーのメッセージを均一化できるようにしてある

改善点
・LINEのアカウントと名前は本当は直接送るのではなく、トークン使用して送りたい

感想
本当は各IDごと（患者ごと）の血圧手帳や体重記録などを作成したかったが、各IDごとのデータベースの構築をどうすればよいのかが不明
laravelで勉強できるものなのか？

各IDごとのQRコードを（google apisなどを使って）動的に発行して、LINEの個人情報の表示をQRコードで発行して、よみとりができるようにしたい
