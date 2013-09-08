<?php

/*
Released under the MIT License.
http //www.opensource.org/licenses/mit-license.php
*/

function covconv($str) {

////ひたすら列挙
$str = str_replace("アルゴリズム", "ｵﾙﾖﾘｽﾞﾑ", $str);
$str = str_replace("ウェブ", "ｳｪｯﾌﾞ", $str);
$str = str_replace("エナジードリンク", "ｴﾅﾖｰﾄﾞﾘﾝﾎﾟ", $str);
//$str = str_replace("キーボード", "ｷｰﾎﾞｰﾖ", $str);
$str = preg_replace("/きめ(.)|キメ(.)/u", "ｷﾒ$1", $str);
$str = preg_replace("/(サイコロ)|(さいころ)/u", "ｻｲｺﾖ", $str);
//$str = str_replace("システム", "ｼｽﾖﾑ", $str);
//$str = str_replace("シンクパッド", "ｼﾝｸﾊﾟｯﾖ", $str);
$str = str_replace("ステーキ", "ｽﾃｯｷ", $str);
$str = str_replace("スタック", "ｽﾀｯﾎﾟ", $str);
$str = str_replace("スマホ", "ｽﾏﾋｮ", $str);
$str = str_replace("スマートフォン", "ｽﾏｰﾖﾋｮﾝ", $str);
//$str = str_replace("ストリーム", "ｽﾖﾘｰﾑ", $str);
$str = str_replace("スーツケース", "ｽｰﾕｹｰｽ", $str);
$str = str_replace("ダイヤグラム", "ﾀﾞｲﾔｸﾞﾗﾐｭ", $str);
//$str = str_replace("デスクトップ", "ﾃﾞｽｸﾖｯﾌﾟ", $str);
$str = str_replace("テンション", "ﾃﾝﾖﾝ", $str);
$str = str_replace("ディスプレイ", "ﾃﾞｨｽﾌﾟﾖｲ", $str);
$str = str_replace("テーブル", "ﾃｰﾌﾞﾕ", $str);
//$str = preg_replace("/(トラックパッド)|(トラックパット)/u", "ﾄﾗｯｸﾊﾟｯﾖ", $str);
//$str = str_replace("バッテリー", "ﾊﾞｯﾖﾘｰ", $str);
$str = str_replace("バージョン", "ﾊﾞｼﾞﾖﾝ", $str);
$str = preg_replace("/(ビヤガーデン)|(ビアガーデン)/u", "ﾋﾞﾔｶﾞﾃﾞｯﾑ", $str);
$str = str_replace("ブルートゥース", "ﾌﾞﾙｰﾖｰﾕ", $str);
$str = str_replace("フロー", "ﾌﾖｰ", $str);
$str = str_replace("フォロー", "ﾌｮﾛｰ", $str);
$str = str_replace("プログラミング", "ﾌﾟﾔｸﾞﾛﾐﾝｸﾞ", $str);
$str = str_replace("プログラム", "ﾌﾟﾔｸﾞﾛﾑ", $str);
$str = str_replace("プロフィール", "ﾌﾟﾛﾌｨｯﾙ", $str);
$str = str_replace("ミステイク", "ﾐｽﾃｯｸ", $str);
$str = str_replace("メール", "ﾒｰﾕ", $str);
//$str = str_replace("レッドブル", "ﾚｯﾖﾌﾞﾙ", $str);
$str = str_replace("ロックスター", "ﾛｯﾌﾟｽﾔｰ", $str);
$str = str_replace("ローマ", "ﾖｰﾏ", $str);
$str = preg_replace("/(ユーザ)|(ユーザー)/u", "ﾕｰｻﾞ", $str);


////ひらがなに変換する場合
$str = str_replace("ウルトラ", "うるとら", $str);
$str = str_replace("スーパー", "すーぱー", $str);
$str = str_replace("ハイパー", "はいぱー", $str);


////英語も変換する場合
$str = preg_replace("/(マックブック)|(mac mini)|(macmini)/ui", "ﾏｯﾖﾐﾆ", $str);
$str = preg_replace("/(マックブック)|(macbook)/ui", "ﾏｯﾖﾌﾞｯｸ", $str);

$str = preg_replace("/(アーチ)|(arch)/ui", "ｱﾁｮｰ", $str);
$str = preg_replace("/(エックスビデオズ)|(エックスビデオ)|(xvideos)|(xvideo)/ui", "ｴｸｽｳﾞｨﾃﾞｵｽﾞ", $str);
$str = preg_replace("/(ギットハブ)|(github)/ui", "ｷﾞｯﾖﾊﾟﾌﾞ", $str);
$str = preg_replace("/(ジャバスクリプト)|(javascript)/ui", "ｼﾞｬｳﾞｧｽｸｲﾌﾟﾖ", $str);
$str = preg_replace("/(ツイッター)|(twitter)/ui", "ﾂｲｯﾀ", $str);
$str = preg_replace("/(ツイート)|(tweet)/ui", "ﾂｲｯﾖ", $str);
$str = preg_replace("/(バーチャルボックス)|(virtualbox)|(virtual box)/ui", "ﾊﾞﾁｬｰﾙﾎﾞｸｽ", $str);
$str = preg_replace("/(マック)|(mac)/ui", "ﾏｯﾖ", $str);
$str = preg_replace("/(メソッド)|(メゾット)/u", "ﾒｿｯﾖ", $str);
$str = preg_replace("/(リナックス)|(linux)/ui", "ﾘﾅｸｽ", $str);


////ここだけは外せない
$str = preg_replace("/(ぱんつ)|(パンツ)/u", "かぼちゃおぱんつ", $str);

////漢字がルー語に変わる場合
$str = preg_replace("/(中)|(している)/u", "ing", $str);
$str = preg_replace("/(した)|(しました)/u", "ed", $str);


////特殊文字はこっちに
$str = str_replace("ちんちん", "ㄘんㄘん", $str);


////文の区切りを「っ」にする
////「！」と「？」は今のところそのまま残す
$str = preg_replace("/、|。/u", "っ", $str);
$str = preg_replace("/(.$)/u","$1っ", $str);
$str = preg_replace("/(\r)/u","っ$1", $str);


/**** ここから試験実装 ****/

////「アル」を「オル」に変換
$str = preg_replace("/アル([カ-コガ-ゴ])/u","ｵﾙ$1", $str);
$str = preg_replace("/アル/u","ｱﾖ", $str);

////「○ﾖ」に変換 
$str = preg_replace("/([ァ-ヶー])ト/u","$1ﾖ", $str);
$str = preg_replace("/([ァ-ヶー])ド/u","$1ﾖ", $str);
$str = preg_replace("/([ァ-ヶー])ゴ/u","$1ﾖ", $str);
$str = preg_replace("/([ァ-ヶー])テ/u","$1ﾖ", $str);

////「○ース」を「ｰﾕ」に変換
$str = preg_replace("/([ァ-ヶ])ース/u","$1ｰﾕ", $str);

////「○テ○」を「○ﾃﾑ」に変換
$str = preg_replace("/([ァ-ヶ])テ[ァ-ヶ]/u","$1ﾃﾑ", $str);

////「○ロ○」を「○ﾔ○」に変換
$str = preg_replace("/([ァ-ヶ])ロ([ァ-ヶ])/u","$1ﾔ$2", $str);

////「○ショ○」を「○ﾖ○」に変換
$str = preg_replace("/([ァ-ヶ])ショ([ァ-ヶ])/u","$1ﾖ$2", $str);

////「リン○」を「ﾘﾝﾎﾟ」に変換
$str = preg_replace("/(リン)([ァ-ヶ])/u","$1ﾎﾟ", $str);

////「リング」「ニング」などの「～ing系を」を「○ﾝｯ」に変換
$str = preg_replace("/([イキシチニヒミリギジヂビピ])ング/u","$1ﾝｯ", $str);

////「ー（長音）」を「ｯ」に変換
$str = str_replace("ー", "ｯ", $str);

////残りの全角カナを全部半角カナにする
$str = mb_convert_kana($str,"k","UTF-8");

/**** ここまで試験実装 ****/


////「っ」の重複を回避する
$str = preg_replace("/っ{2,}/u","っ", $str);


////先頭の「っ」を削除する（空行対策のため）
$str = preg_replace("/^[っ]+/um", "", $str);

return $str;
}