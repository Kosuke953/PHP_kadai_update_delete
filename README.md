# PHP_kadai_update_delete

## ①課題内容（どんな作品か）
アカウントの登録画面を想定して、DBのレコードを変更・削除 授業で扱ったコードを利用して作成しました。

## ②工夫した点・こだわった点
### ファイルについて

ログイン画面　→ ホーム画面（未実装）　
↓　
新規登録画面（register.php）　
↓　
登録内容確認画面(insert.php)　
↓　
登録完了メッセージ画面(thanks.php)　
↓　
ログイン画面(login.php)　

アカウント登録の画面を想定して、いくつかファイルを遷移するようにしました。
その際に、画面遷移時も入力した内容を使用できるように＄_SESSIONを使用しました。
また、入力項目が空欄の場合には「入力してください」のメッセージが表示されるようにしました。

DBに登録されているものを表示する　select.php
DBに登録されているものを更新する　update.php
DBに登録されているものを削除する　delete.php
については、授業で使用したコードをそのまま使っております。

ただ、新規登録画面で、授業でやった方法とは違う方法をとったためかselect.phpが開かなくなってしまったため、
今後修正予定です。

### ③質問・疑問（あれば）
新規登録画面でデータ入力がない場合にエラーを表示させる際に、

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $form['username']=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    if($form['username'] === ""){
        $error['username'] = 'blank';
    }
    
このよ　うにPHPでエラー判定をし、登録ボタンをクリックした際に入力を判別する。
という流れをとっておりますが、入力がない場合にはそもそも登録ボタンを押せない状態にする（Javascript等で）方がUI的にもいいのかな？と思いました。
実務ではどのように作られることが多いのでしょうか？
もしわかればお伺いできると嬉しいです。

### ④その他（感想、シェアしたいことなんでも）
複数ファイルを跨いで作業を行うようにして行くと、各画面の統一感を出して行く必要も出てくるのでCSSフレームワーク使用していきたいと思いました。
