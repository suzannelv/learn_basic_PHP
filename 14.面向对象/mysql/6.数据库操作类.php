<?php
#加载数据库配置文件
include 'dbConfig.php';
class Model {
  #成员属性
  #链接资源
  public $link = null;
  #表名称
  public $tableName = '';

  #construct function
  public function __construct($tableName) {
    #连接到 MySQL 数据库
    $this->link = mysqli_connect(HOST, USER, PASS);
    var_dump($this->link);
    #选择数据库
    mysqli_select_db($this->link, DBNAME);
    #设置数据库链接字符集
    mysqli_set_charset($this->link, 'utf8');
    #初始化表名称
    $this->tableName = $tableName;

  }
  #获取所有数据的方法
  public function select() {
    #sql语句，假设存在名为shop_goods的数据库
    $sql = 'SELECT * FROM' . $this->tableName;
    #执行语句获取结果集
    $res=mysqli_query($this->link, $sql);
    #存放数据的数组
    $list = array();
    if(!empty($res)) {
      while ($row=mysqli_fetch_assoc($res)) {
        $list[]=$row;
      }
    }
    #释放结果集
    mysqli_free_result($res);
    return $list;
  }

  #根据主键比如ID进行数据的删除
  public function del($id){
    #sql语句
    $sql = 'DELETE FROM {$this->tableName} WHERE id={$id}';
    #执行sql语句
    mysqli_query($this->link, $sql);
    #返回影响函数
    return mysqli_affected_rows($this->link);
  }


  #destruct function
  public function __destruct() {
    #关闭数据库连接
    if(!empty($this->link))
      mysqli_close($this->link);
  }
}
$model = new Model('shop_goods');
#var_dump($model);
#获取所有的数据
$data = $model->select();
var_dump($data);

#删除制定的主键值
$r = $model->del(1);
var_dump($r);