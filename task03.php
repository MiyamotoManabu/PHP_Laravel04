<?php
//課題3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

//作成した関数
function arrmulti($arr){//仮引数に$arrを指定
    $a = 1;
    for($i = 0; $i < count($arr); $i++){
    $a *= $arr[$i];
    }
    return $a;
}

//作成した関数に配列array(1,3,5,7,9)を渡して、要素をすべてかけた結果を返すか確認
echo arrmulti(array(1,3,5,7,9));
echo "\n";
?>