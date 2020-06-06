<?php
//課題4 【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

/*問題文のプログラム
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }*/

//完成させたプログラム
function max_array($arr){
    $result = 0;
    foreach($arr as $a){
        if($result < $a){
            $result = $a;//繰り返し処理を一回回すごとに、配列の要素の大きさを比較する。
        }
    }
    return $result;//すべての要素の大きさを比較した結果、一番大きいものが$resultに代入されている。
}

//関数の引数に配列を代入して、関数を実行する。
echo max_array(array(1,3,5,7,9,13,10));
echo "\n"
?>