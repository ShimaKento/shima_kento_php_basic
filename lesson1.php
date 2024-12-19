<?php

  //1. “Hello World”を変数に代入し、出力してください
  echo "問１";
  echo "<br>";
  $hello = "Hello World";
  echo $hello;
  //短い変数に長文を入れることで、後で書くコードを簡潔に出来ると考えられる。
  echo "<br>";
  echo "<br>";

  //2. “Welcome 〇〇”と表示してください
  //〇〇にはご自身の名前を格納し、Welcomeと変数を文字列結合して表示してください
  echo "問２";
  echo "<br>";
  $name = "Kento Shima";
  echo "Welcome " . $name;
  //繰り返し使用する固有名詞を格納することで、多くの文を効率的にコーディングできると考えられる。
  echo "<br>";
  echo "<br>";

  //3. 200円のりんごを3つ、100円のみかんを4つ買った際の合計金額を表示してください
  //ただし、各果物の単価と個数を変数に代入した上で、計算式を用いて表示してください
  echo "問３";
  echo "<br>";
  $apple = 200;
  $index1 = 3;
  $orange = 100;
  $index2 = 4;

  echo $apple * $index1 + $orange * $index2;
  //商品の値段と個数をデータベース化することにより、通販サイトなどの計算ツールの制作を効率化できると考えられる。
  echo "<br>";
  echo "<br>";


  //4. 配列に、red, blue, greenの3つの値を格納し、blueを表示してください
  //ただし、配列と添字を用いて表示してください
  echo "問４";
  echo "<br>";
  $colors = ["red","blue","green"];

  echo $colors[1];
  //phpの配列は、0番目が先頭の数字である。
  echo "<br>";
  echo "<br>";

  //5. 下記3名の情報が格納された連想配列を作成し、田中さんの年齢を表示してください
  //key, valueを意識して配列を作成してください。
  echo "問５";
  echo "<br>";
  $users = array(
    "sato" => array(
      "name" => "佐藤",
      "age" => "36才",
      "job" => "営業"
    ),
    "tanaka" => array(
      "name" => "田中",
      "age" => "23才",
      "job" => "事務"
    ),
    "yoshida" => array(
      "name" => "吉田",
      "age" => "54才",
      "job" => "社長"
    )
  );

  echo $users["tanaka"]["age"];
  //今回、人名の配列に３種類のキーを設定したが、キーの名称があることで変数の呼び出しを行う際に、変数[人名][年齢];という直感的な指示で欲しい情報を得られることが分かった。
  echo "\n";

?>