<?php
// phpinfo();
  $title = 'php apprentissage';
  $image = 'https://img.freepik.com/photos-gratuite/abstrait-colore-splash-3d-fond-generatif-fond-ai_60438-2509.jpg?w=996&t=st=1689105521~exp=1689106121~hmac=851d0768bf8b62d9f871ba089c43413da43d9ba74f11ba91faba6eba650b02ae';
  $content = '在上面的实例中，我们注意到，不必向 PHP 声明该变量的数据类型。PHP 会根据变量的值，自动把变量转换为正确的数据类型。在强类型的编程语言中，我们必须在使用变量前先声明（定义）变量的类型和名称。';
  $data = '11-07-2023';
  $class = 'php';

?>

<article>
  <header>
    <h1><?php 
    echo $title;
    ?>
    </h1>
    <img src="<?php echo $image?>" alt="">
    <p><?php echo $content ?></p>
  </header>
  <main>
    <?php 
      // $x = true;
      // var_dump($x);
      // $str = "hello php";
      // var_dump($str);
      // echo '<hr/>';

      // 1. créer un tableau vide
      echo 'Créer un tableau vide';
      echo '<br>';
      $arr = array();
      var_dump($arr);
      // ou
      $arrs = [];
      var_dump($arrs);

      // 2. 创建索引数组
      echo '2. 创建索引数组';
      echo '<br>';
      $arr = array(
        'a'=>'aa',
        'bb',
        'cc'
      );
      print_r($arr);
      echo $arr[1];

      echo 'my name is:' . $arr['a'];
      echo '<hr>';

      // 3, echo, print_r() et var_dump()
      echo 'print_r() et var_dump()';
      echo '<br>';
      $data = array('apple', 'banana', 'cherry');
      echo '<hr>';
      // 使用 echo 输出字符串
      echo "Hello, World!"; // 输出：Hello, World!
      echo '<hr>';
      // 使用 print_r 输出数组
      print_r($data);
      echo '<hr>';
      // 使用 var_dump 输出变量
      var_dump($data);
      echo '<hr>';


// 4.创建一个三维数组
    echo ' 4.创建一个三维数组';
    echo '<br>';
    $students = array(
        array(
            array('name' => 'John', 'age' => 20, 'grade' => 'A'),
            array('name' => 'Jane', 'age' => 22, 'grade' => 'B'),
        ),
        array(
            array('name' => 'Mike', 'age' => 21, 'grade' => 'B'),
            array('name' => 'Lisa', 'age' => 19, 'grade' => 'A'),
        ),
    );

  //   $students = [
  //     [
  //         ['name' => 'John', 'age' => 20, 'grade' => 'A'],
  //         ['name' => 'Jane', 'age' => 22, 'grade' => 'B'],
  //     ],
  //     [
  //         ['name' => 'Mike', 'age' => 21, 'grade' => 'B'],
  //         ['name' => 'Lisa', 'age' => 19, 'grade' => 'A'],
  //     ],
  // ];
  

    print_r($students);
    var_dump($students);
    echo $students[0][0]['name'] . $students[0][0]['age'];


      ?>


  </main>
</article>