<?php

/*
Released under the MIT License.
http://www.opensource.org/licenses/mit-license.php
*/

function covconv($str) {

////ひたすら列挙
$str = str_replace("アイコン", "ｱｲﾖﾝ", $str);
$str = str_replace("アピール", "ｱｯﾋﾟﾙ", $str);
//$str = str_replace("アルゴリズム", "ｵﾙﾖﾘｽﾞﾑ", $str);
$str = str_replace("アルバム", "ｱﾕﾊﾞﾑ", $str);
$str = str_replace("アンコール", "ｱﾝｺｯﾙ", $str);
$str = str_replace("イった", "ｲed", $str);
$str = str_replace("イメージ", "ｲﾒｯｼﾞ", $str);
$str = preg_replace("/(イヤホン)|(イヤフォン)/u", "ｲﾔﾋｮﾝ", $str);
$str = str_replace("インチ", "ｲﾝﾖ", $str);
$str = str_replace("インポータント", "ｲﾝﾎﾟｯﾀﾝｯ", $str);
$str = str_replace("ウェブ", "ｳｪｯﾌﾞ", $str);
$str = str_replace("エアコン", "ｴｱﾖﾝ", $str);
$str = str_replace("エナジードリンク", "ｴﾅﾖｰﾄﾞﾘﾝﾎﾟ", $str);
$str = str_replace("エロゲ", "ｴﾖｹﾞ", $str);
$str = str_replace("オペレーティング", "ｵﾍﾟﾚｯﾃｨﾝｯ", $str);
$str = str_replace("カニクリームコロッケ", "ｺﾆｸﾘｯﾑｶﾗｯｹ", $str);
$str = str_replace("カラースキーム", "ｶﾗｰｽｷｯﾑ", $str);
$str = str_replace("カップル", "ｶﾌﾟﾙ", $str);
$str = str_replace("カーテン", "ｶｯﾃﾝ", $str);
//$str = str_replace("キーボード", "ｷｰﾎﾞｰﾖ", $str);
$str = preg_replace("/きめ(.)|キメ(.)/u", "ｷﾒ$1", $str);
$str = str_replace("キーワード", "ｷｯﾜｰﾖ", $str);
$str = str_replace("クリーニング", "ｸﾘﾆﾝｯ", $str);
$str = str_replace("ケーブル", "ｹｯﾌﾞﾙ", $str);
$str = str_replace("ココア", "ｺｺﾔ", $str);
$str = str_replace("コンクリート", "ｺﾝｸﾘｯﾖ", $str);
$str = str_replace("コネクション", "ｺﾈｸﾋｮﾝ", $str);
$str = str_replace("コンパイラ", "ｺﾝﾊﾟｲﾔ", $str);
$str = str_replace("コンパイル", "ｺﾝﾊﾟｲﾕ", $str);
$str = preg_replace("/(サイコロ)|(さいころ)/u", "ｻｲｺﾖ", $str);
$str = str_replace("サドル", "ｻﾄﾞﾙ", $str);
$str = str_replace("サークル", "ｻｯｸﾙ", $str);
//$str = str_replace("システム", "ｼｽﾖﾑ", $str);
$str = str_replace("シュリンク", "ｼｭﾘﾝｸｯ", $str);
$str = str_replace("ショップ", "ﾁｮｯﾌﾟ", $str);
$str = str_replace("ステーキ", "ｽﾃｯｷ", $str);
$str = str_replace("スタック", "ｽﾀｯﾎﾟ", $str);
$str = str_replace("スマホ", "ｽﾏﾋｮ", $str);
$str = str_replace("スマートフォン", "ｽﾏｰﾖﾋｮﾝ", $str);
//$str = str_replace("ストリーム", "ｽﾖﾘｰﾑ", $str);
$str = str_replace("スパークリング", "ｽﾊﾟｰｸﾘﾝｯ", $str);
$str = str_replace("スリープ", "ｽﾘｯﾌﾟ", $str);
$str = str_replace("スーツケース", "ｽｰﾕｹｰｽ", $str);
$str = str_replace("スーツ", "ｽｯﾂ", $str);
$str = str_replace("セックス", "ｾｯｸﾖ", $str);
$str = preg_replace("/(ソウル)|(ソール)/u", "ｿｯﾙ", $str);
$str = str_replace("ダイヤグラム", "ﾀﾞｲﾔｸﾞﾗﾐｭ", $str);
$str = str_replace("ダブルクォーターパウンダー", "ﾀﾞﾌﾞﾕｸｫｯﾀｰﾊﾟｳﾝﾔｰ", $str);
$str = str_replace("ダブルチーズバーガー", "ﾀﾞﾌﾞﾕﾁｯｽﾞﾊﾞｯｶﾞｰ", $str);
$str = str_replace("ダンボール", "ﾀﾞﾝﾎﾞｯﾙ", $str);
//$str = str_replace("デスクトップ", "ﾃﾞｽｸﾖｯﾌﾟ", $str);
$str = str_replace("テクニカル", "ﾃｸﾆｶﾕ", $str);
$str = str_replace("テクニシャン", "ﾃｸﾆﾋｬﾝ", $str);
$str = str_replace("テンション", "ﾃﾝﾖﾝ", $str);
$str = str_replace("ディスプレイ", "ﾃﾞｨｽﾌﾟﾖｲ", $str);
$str = str_replace("テーブル", "ﾃｰﾌﾞﾕ", $str);
$str = str_replace("トイレクイックル", "ﾖｲﾚｸｲｯｸﾖ", $str);
$str = str_replace("トイレ", "ﾖｲﾚ", $str);
//$str = preg_replace("/(トラックパッド)|(トラックパット)/u", "ﾄﾗｯｸﾊﾟｯﾖ", $str);
$str = str_replace("ドル", "ﾖﾙ", $str);
$str = str_replace("トートロジー", "ﾄﾝﾄﾛｼﾞｰ", $str);
$str = str_replace("ノートパソコン", "ﾉｰﾖﾊﾟﾖﾖﾝ", $str);
$str = str_replace("バイオリン", "ﾊﾞｲﾖﾘﾝ", $str);
$str = str_replace("バレーボール", "ﾊﾞﾘﾎﾞｰﾙ", $str);
$str = str_replace("ハッカソン", "ﾊｯｶﾖﾝ", $str);
$str = str_replace("バックアップ", "ﾊﾞｯﾖｱｯﾌﾟ", $str);
//$str = str_replace("バッテリー", "ﾊﾞｯﾖﾘｰ", $str);
$str = str_replace("バージョン", "ﾊﾞｼﾞﾖﾝ", $str);
$str = str_replace("パーセント", "ﾊﾟｯｾﾝﾄ", $str);
$str = str_replace("ビデオ", "ｳﾞｨﾃﾞｵ", $str);
$str = preg_replace("/(ビヤガーデン)|(ビアガーデン)/u", "ﾋﾞﾔｶﾞﾃﾞｯﾑ", $str);
$str = str_replace("ビーフジャーキー", "ﾋﾞｯﾌｼﾞｬｯｷｰ", $str);
$str = str_replace("ピロピロ", "ﾋﾟﾛﾋﾟﾛ", $str);
$str = str_replace("フラグ", "ﾌﾔｸﾞ", $str);
$str = str_replace("ブルートゥース", "ﾌﾞﾙｰﾖｰﾕ", $str);
$str = str_replace("ブース", "ﾌﾞｰｽ", $str);
$str = str_replace("フロー", "ﾌﾖｰ", $str);
$str = str_replace("フィルタリング", "ﾌｨﾙﾀﾘﾝｯ", $str);
$str = str_replace("フォロワー", "ﾋｮﾛﾔｰ", $str);
$str = str_replace("フォロー", "ﾋｮﾛｰ", $str);
$str = str_replace("フォース", "ﾋｮｰｽ", $str);
$str = str_replace("プラグイン", "ﾌﾟﾗｷﾞﾝ", $str);
$str = str_replace("プログラミング", "ﾌﾟﾖｸﾞﾔﾐﾝｯ", $str);
$str = str_replace("プログラム", "ﾌﾟﾖｸﾞﾛﾑ", $str);
$str = str_replace("プログレス", "ﾌﾟﾔｸﾞﾚｽ", $str);
$str = preg_replace("/(プロセッサ)|(プロセッサー)/u", "ﾌﾟﾖｾｯｻ", $str);
$str = str_replace("プロフィール", "ﾌﾟﾛﾌｨｯﾙ", $str);
$str = str_replace("プロセス", "ﾌﾟﾖｾｽ", $str);
$str = str_replace("プロモーション", "ﾌﾟﾖﾓｯｼｮﾝ", $str);
$str = str_replace("ベストエフォート", "ﾍﾞｽﾄｴﾌｫｯﾄ", $str);
$str = str_replace("ベビースター", "ﾍﾞﾋﾞｯｽﾔｯ", $str);
$str = str_replace("マグロ", "ﾏｸﾞﾛ", $str);
$str = str_replace("ミステイク", "ﾐｽﾃｯｸ", $str);
$str = str_replace("ミーティング", "ﾒｯﾃｨﾝ", $str);
$str = str_replace("メイド", "ﾒｲﾖ", $str);
$str = str_replace("メール", "ﾒｰﾕ", $str);
$str = str_replace("モンスター", "ﾓﾝｽﾔｰ", $str);
$str = str_replace("モーニング", "ﾓｯﾆﾝ", $str);
$str = str_replace("ライティング", "ﾗｲﾃｨﾝｯ", $str);
$str = str_replace("ラーメン", "ﾗﾒﾝｯ", $str);
$str = str_replace("リア充", "ﾘｱｯｼﾞｭ", $str);
$str = str_replace("リサイクル", "ﾘｻｲｸﾕ", $str);
//$str = str_replace("レッドブル", "ﾚｯﾖﾌﾞﾙ", $str);
$str = str_replace("ロックスター", "ﾛｯﾌﾟｽﾔｰ", $str);
$str = str_replace("ローマ", "ﾖｰﾏ", $str);
$str = preg_replace("/(ユーザ)|(ユーザー)/u", "ﾕｰｻﾞ", $str);
$str = str_replace("群論", "ｸﾞﾝﾖﾝ", $str);
$str = str_replace("圏論", "ｹﾝﾖﾝ", $str);


////英語も変換する場合
$str = preg_replace("/(アイパッドエアー)|(iPad Air)/ui", "ｱｲﾊﾟｯﾖｴﾔｰ", $str);
$str = preg_replace("/(アイパッド)|(iPad)/ui", "ｱｲﾊﾟｯﾖ", $str);
$str = preg_replace("/(アイフォーン)|(アイフォン)|(iPhone)/ui", "ｱｲﾋｮｰﾝ", $str);
$str = preg_replace("/(アンドロイド)|(android)/ui", "ｱﾝﾖﾖｲﾖ", $str);
$str = preg_replace("/arch linux/ui", "ｱﾁｮｰﾘﾅｸｽ", $str);
$str = preg_replace("/(アーチ)|(arch)/ui", "ｱﾁｮｰ", $str);
$str = preg_replace("/(インストール)|(install)/ui", "ｲﾝｽﾖｯﾙ", $str);
$str = preg_replace("/(インティオス)|(インテュオス)|(intuos)/ui", "ｲﾝﾁｭｵｽ", $str);
$str = preg_replace("/(ウィンドウズ)|(ウィンドーズ)|(windows)/ui", "ｳｨﾝﾖｯｽﾞ", $str);
$str = preg_replace("/(エックスビデオズ)|(エックスビデオ)|(xvideos)|(xvideo)/ui", "ｴｸｽｳﾞｨﾃﾞｵｽﾞ", $str);
$str = preg_replace("/(オペラ)|(opera)/ui", "ｵﾍﾟｯﾗ", $str);
$str = preg_replace("/(オライリー)|(O'Reilly)/ui", "ｵﾘｬｲﾘｯ", $str);
$str = preg_replace("/(ギットハブ)|(github)/ui", "ｷﾞｯﾖﾊﾟﾌﾞ", $str);
$str = preg_replace("/(グラブ)|(GRUB)/ui", "ｸﾞﾔﾌﾞ", $str);
$str = preg_replace("/(シンクパッド)|(ThinkPad)/ui", "ｼﾝｸﾊﾟｯﾖ", $str);
$str = preg_replace("/(ジェンツー)|(gentoo)/ui", "ｼﾞｪﾝﾂｰ", $str);
$str = preg_replace("/(ジャバスクリプト)|(javascript)/ui", "ｼﾞｬｳﾞｧｽｸｲﾌﾟﾖ", $str);
$str = preg_replace("/(ツイッター)|(twitter)/ui", "ﾂｲｯﾀ", $str);
$str = preg_replace("/(ツイート)|(tweet)/ui", "ﾂｲｯﾖ", $str);
$str = preg_replace("/(テレビ)|(TV)/ui", "ﾃｨｰｳﾞｨｰ", $str);
$str = preg_replace("/(タブレット)|(tablet)/ui", "ﾀﾖﾖｯﾖ", $str);
$str = preg_replace("/(ネクサスファイブ)|(Nexus5)|(Nexus 5)/ui", "ﾈｸｻｼｭﾌｧﾋﾖ", $str);
$str = preg_replace("/(バーチャルボックス)|(virtualbox)|(virtual box)/ui", "ﾊﾞﾁｬｰﾙﾎﾞｸｽ", $str);
$str = preg_replace("/(ブルーレイ)|(bluray)/ui", "ﾌﾞﾕﾚｲ", $str);
$str = preg_replace("/(プレイヤー)|(プレイヤ)|(プレーヤー)|(プレーヤー)|(player)/ui", "ﾌﾟﾚｲﾔｯ", $str);
$str = preg_replace("/(プッシュ)|(push)/ui", "ﾌﾟｯﾕ", $str);
$str = preg_replace("/(ペースト)|(paste)/ui", "ﾍﾟｯｽﾄ", $str);
$str = preg_replace("/(ボーカロイド)|(vocaloid)/ui", "ﾎﾞｰｶﾛｲﾖ", $str);
$str = preg_replace("/(マックミニ)|(mac mini)|(macmini)/ui", "ﾏｯﾖﾐﾆ", $str);
$str = preg_replace("/(マックブックエアー)|(macbookair)|(macbook air)/ui", "ﾏｯﾖﾌﾞｯｸｴﾔｰ", $str);
$str = preg_replace("/(マックブックプロ)|(macbookpro)|(macbook pro)/ui", "ﾏｯﾖﾌﾞｯｸﾌﾟﾖ", $str);
$str = preg_replace("/(マックブック)|(macbook)/ui", "ﾏｯﾖﾌﾞｯｸ", $str);
$str = preg_replace("/(マック)|(mac)/ui", "ﾏｯﾖ", $str);

$str = preg_replace("/(メソッド)|(メゾット)|(メゾッド)/u", "ﾒｿｯﾖ", $str);
$str = preg_replace("/(リナックス)|(linux)/ui", "ﾘﾅｸｽ", $str);


////ここだけは外せない
$str = preg_replace("/(ぱんつ)|(パンツ)/u", "かぼちゃおぱんつ", $str);


////漢字がルー語に変わる場合
$str = preg_replace("/(中)|(している)|(なう)/u", "ing", $str);
$str = preg_replace("/(した)|(しました)|(だった)/u", "ed", $str);


////特殊文字はこっちに
$str = str_replace("ちんちん", "ㄘんㄘん", $str);


////ひらがなに変換する場合
$str = str_replace("ウルトラ", "うるとら", $str);
$str = str_replace("スーパー", "す%-%ぱ%-%", $str);
$str = str_replace("ハイパー", "はいぱ%-%", $str);


////英語に変換する場合
$str = str_replace("かなり", "ｋａｎａｒｉ", $str);
$str = str_replace("こわい", "ｋｏｗａｉ", $str);
$str = str_replace("つらい", "ｔｓｕｒａｉ", $str);
$str = str_replace("へんたい", "ｈｅｎｎｔａｉ", $str);
$str = str_replace("べんり", "ｂｅｎｒｉ", $str);
$str = str_replace("やばい", "ｙａｂａｉ", $str);
$str = str_replace("やばそう", "ｙａｂａｓｏｕ", $str);
$str = str_replace("わるい", "ｗａｒｕｉ", $str);


////文の区切りを「っ」にする
////「！」と「？」は今のところそのまま残す
$str = preg_replace("/、|，|。|．/u", "っ", $str);
$str = preg_replace("/(.$)/u","$1っ", $str);
$str = preg_replace("/(\r)/u","っ$1", $str);


/**** ここから試験実装 ****/

////ひらがなに挟まれた長音（ー）をエスケープ
$str = preg_replace("/([ぁ-ん])ー([ぁ-ん])/u","$1%-%$2", $str);

////「アル」を「オル」に変換
$str = preg_replace("/アル([カ-コガ-ゴ])/u","オル$1", $str);
$str = preg_replace("/アル/u","アヨ", $str);

////「○ﾖ」に変換 
$str = preg_replace("/([ァ-ヶー])ト/u","$1ヨ", $str);
$str = preg_replace("/([ァ-ヶー])ド/u","$1ヨ", $str);
$str = preg_replace("/([ァ-ヶー])ゴ/u","$1ヨ", $str);
$str = preg_replace("/([ァ-ヶー])テ/u","$1ヨ", $str);

////「○ース」を「ｰﾕ」に変換
$str = preg_replace("/([ァ-ヶ])ース/u","$1ーユ", $str);

////「○テ○」を「○ﾃﾑ」に変換
$str = preg_replace("/([ァ-ヶ])テ[ァ-ヶ]/u","$1テム", $str);

////「○ロ○」を「○ﾔ○」に変換
$str = preg_replace("/([ァ-ヶ])ロ([ァ-ヶ])/u","$1ヤ$2", $str);

////「○ショ○」を「○ﾖ○」に変換
$str = preg_replace("/([ァ-ヶ])ショ([ァ-ヶ])/u","$1ヨ$2", $str);

////「リン○」を「ﾘﾝﾎﾟ」に変換
$str = preg_replace("/(リン)([ァ-ヶ])/u","$1ポ", $str);

////「リング」「ニング」などの「～ing系を」を「○ﾝｯ」に変換
$str = preg_replace("/([ァ-ヶ])ング/u","$1ﾝｯ", $str);

////「ー（長音）」を「ｯ」に変換
//誤爆が多いのでコメントアウトします
//$str = str_replace("ー", "ッ", $str);

////全角カナを全て半角カナにする
$str = mb_convert_kana($str,"k","UTF-8");

/**** ここまで試験実装 ****/


////長音（ー）のエスケープを戻す
$str = str_replace("%-%", "ー", $str);


////「っ」の重複を回避する
$str = preg_replace("/っ{2,}/u","っ", $str);
$str = preg_replace("/ｯっ/u","ｯ", $str);
$str = preg_replace("/(.)ｯ$/u","$1っ", $str);


////「？」「！」の前後の「っ」の位置を正しくする
$str = preg_replace("/(.)(？|！)っ$/u","$1っ$2", $str);


////先頭の「っ」を削除する（空行対策のため）
$str = preg_replace("/^[っ]+/um", "", $str);

return $str;
}
