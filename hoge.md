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




## 画面を移動する
- form
  - action
  - typeがsubmitのボタンをクリックすると移動
  - GETかPOSTを選択できる
    - methodで選択する
- aタグ
  - href
  - 要素をクリック移動する
  - GET
## データ送信
データの受け取り
$_POST[]
  - POST送信されたデータが連想配列形式で保存される
  - keyは送り元のinput(textarea)のname属性
  - valueはinputのvalue(ユーザー入力内容)
$_GET[]
  - GET送信されたデータが連想配列形式で保存される
スーパーグローバル変数
- 自分定義する必要がない変数