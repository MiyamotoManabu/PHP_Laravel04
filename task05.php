<?php
/*課題5 次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

・strip_tags
・array_push
・array_merge
・time, mktime
・date
*/

//(1)strip_tags

//strip_tagsの使い方調査結果
/*
削除したいHTMLタグを含む文字列を引数に指定すると、HTMLタグを除いた文字列を返す関数
第2引数に指定したHTMLタグは取り除かれない。
*/

//strip_tagsを実際に使用し、表示する
$result = strip_tags("<h1>タイトル</h1><ol><li>リンゴ</li><li>ミカン</li><li>イチゴ</li><ol></h1>", "<ol>");
echo "(1)strip_tags\n" . $result;
echo "\n\n";

//(2)array_push

//array_pushの使い方調査結果
/*
配列の最後に1つ以上の要素を追加できる。
array_push(追加先の配列,追加する値1,追加する値2,…)と使用する。
*/

//array_pushを実際に使用し、表示する
$fruits = array("いちご", "みかん", "りんご");
array_push($fruits, "アボガド" ,"ブドウ");
echo "(2)array_push\n";
print_r($fruits);
echo "\n";

//(3)array_merge

//array_mergeの使い方調査結果
/*
配列と配列を結合することができる
array array_merge ( array $配列 [, 追加する配列 $... ] )と使用する。
*/

//array_mergeを実際に使用し、表示する

//①通常の配列の場合
$animal1 = ["犬", "猿", "鳥"];
$animal2 = ["クジラ", "イルカ", "シャチ"];
$animal3 = ["アザラシ", "アシカ" ,"オットセイ"];
$animal_merge1 = array_merge($animal1, $animal2, $animal3);
echo "(3)array_merge(通常の配列を連結させた場合)\n";
print_r($animal_merge1);
echo "\n";

//②連想配列の場合
$animal1 = [
    0 => "シャコ",
    1 => "カエル",
    2 => "ドジョウ"
    ];
    
$animal2 = [
    0 => "うなぎ",
    1 => "あなご",
    2 => "ひらめ"
    ];
    
$animal3 =[
    0 => "えび",
    1 => "たい",
    2 => "まぐろ"
    ];
$animal_merge2 = array_merge($animal1, $animal2, $animal3);
echo "(3)array_merge(連想配列を連結させた場合)\n";
print_r($animal_merge2);
echo "\n";

//(4)time, mktime

//time,mktimeの使い方調査結果
/*①time
現在の日時や指定した日時のUnixタイムスタンプ(1970年1月1日からの経過時間)を表示する。
*/

//timeを実際に使用し、表示する。
echo "(4-1)time\n";
//現在のタイムスタンプを取得する。
echo "現在のタイムスタンプ：" . time();
echo "\n";//(改行)
//6日後のタイムスタンプを取得する。
$nweek = time() + (6 * 24 * 60 * 60);
echo "6日後のタイムスタンプ：" . $nweek;
echo "\n";

/*2②mktime
指定した日時のUnixタイムスタンプを指定する。
*/

//mktimeを実際に使用し、表示する。
echo "(4-2)mktime\n";
//2020年6月1日のタイムスタンプを取得する。
echo "2020年6月1日のタイムスタンプ:" . mktime(0, 0, 0, 6, 1, 2020);
echo "\n";

//(5)date

//dateの使い方調査結果
/*
timeやmktimeで取得した日時のフォーマットを指定する。
第1引数にフォーマットを指定し、第2引数にtime関数やタイムスタンプが設定された変数を指定する。
*/

//dateを実際に使用し、表示する。
echo "(5)date\n";
echo "現在の日時：" . date('Y/m/d', time());
echo "\n";
echo "2020年6月1日の日時：" . date('Y/m/d', mktime(0,0,0,6,1,2020));
echo "\n";
?>