POSTで送信されたデータは$_POSTっていうスーパーグローバル変数に連想配列形式で保存される


スーパーグローバル変数
ー自分で定義する必要がない変数
ーPHPで元々用意されている変数
ー複数ある
ーそれぞれ役割がある
ー$_POSTの役割
ーPOSTされたデータを連想配列形式で保存
 -key name 属性の値
 - value ユーザーが入力した内容

 ['okinawa' => 'FC琉球']


 GET と POST
 urlが変わる

 php?nickname =池田&email=入力内容＆content=dfaf
