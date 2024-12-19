<?php

  //1. 変数A,Bを用意し、それぞれに数値を代入します。
  //どちらの変数が大きいかを判別し、大きい方の変数名を表示してください
  echo "問１";
  echo "<br>";
  
  $A = 10;
  $B = 100;

  if($A < $B){
    echo '$B';
  } else{
    echo '$A';
  }

  echo "<br>";
  echo "<br>";

  //2. 奇数か偶数化を判別するプログラムを作ってください。。
  echo "問２";
  echo "<br>";
  
  $C = 3;

  if($C % 2 == 0){
    echo "偶数です";
  } else {
    echo "奇数です";
  }

  echo "<br>";
  echo "<br>";

  //3. ０から１００の点数を変数に代入し、成績判定するプログラムを作成してください。
  echo "問３";
  echo "<br>";
  

  $point = mt_rand(0,100);

  echo "点数：" . $point . "点";
  echo "<br>";

  if($point == 100) {
    echo "評定：AA";
  } else if($point >= 90){
    echo "評定：A";
  } else if($point >= 80){
    echo "評定：B";
  } else if($point >= 70){
    echo "評定：C";
  } else if($point >= 60){
    echo "評定：D";
  } else {
    echo "評定：E";
  }
  
  echo "<br>";
  echo "<br>";


  //4. ある整数を変数に代入し、正の数か負の数かゼロのいずれかを判定するプログラムを作成してください。
  echo "問４";
  echo "<br>";
  
  $index = mt_rand(-2,2);

  echo "整数の値：" . $index;
  echo "<br>";

  if($index > 0){
    echo "整数は「正の数」です";
  } else if($index == 0){
    echo "整数は「ゼロ」です";
  } else {
    echo "整数は「負の数」です";
  }

  echo "<br>";
  echo "<br>";

  //5. 年齢を入力し、下記条件によってバスの料金を出力するプログラムを作成してください。
  //０から５才 -> 無料
  //６才から１２才 -> ２００円
  //１３才から７０才 -> ５００円
  //７０才より上 -> 無料
  echo "問５";
  echo "<br>";

  if( !empty($_POST['age']) || $_POST['age'] == 0){
    $age = intval($_POST['age']);
  } else {
    $age = "";
  }
  

  ?>
  <form method="post" action="lesson2.php">
    <input type="text" name="age" value="<?php echo $age ?>" size="30"><br>
    <input type="submit" value="送信">
  </form>
<?php

  echo "<br>";

  if(0 <= $age && $age <= 5){
    echo "バス料金は、無料です";
  } else if(6 <= $age && $age <= 12){
    echo "バス料金は、２００円となります。";
  } else if(13 <= $age && $age <= 70){
    echo "バス料金は、５００円となります。";
  } else if(70 <= $age){
    echo "バス料金は、無料です";
  }



  echo "\n";

?>