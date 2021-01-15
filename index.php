<?php
/**
 * Created By Phpstorm.
 * User: leo
 * Date: 2021/1/9
 * Time: 11:54 下午
 */

define('BASEDIR', __DIR__);

include BASEDIR.'/src/Loader.php';
spl_autoload_register('\\src\\Loader::autoload');

//1单列模式
//$obj1 = src\Single::getInstance();
//$obj2 = src\Single::getInstance();
//var_dump($obj1);
//var_dump($obj2);

//2简单工厂模式
//$obj = src\SimpleFactory::createRedis();
//var_dump($obj);
//抽象工厂模式
//$obj1 = (new src\ProductFactory)->createShippableProduct();
//$obj2 = (new src\ProductFactory)->createDigitalProduct();
//静态工厂模式
//$obj = (new src\StaticFactory())::factory('number');

//3注册模式
//$register = new src\Register();
//$key = 'redis';
//$object = src\SimpleFactory::createRedis();
//$register::set($key, $object);
//var_dump($object);
//var_dump($register::get($key));

//4适配器模式
//$db = new src\adapter\MySQL();
//$db = new src\adapter\MySQLi();
//$db = new src\adapter\PDO();
//$db->connect('localhost', 'root', 'root', 'test');
//$db->query('show databases');
//$db->close();

//5策略模式
//$test = ['a', 'b', 'c'];
//$output = new src\Output(new src\strategy\Json()); //输出json
//$output = new src\Output(new src\strategy\Serialize()); //输出序列化
//var_dump($output->renderOutput($test));

//6观察者模式
//$email = new src\observer\Email();
//$message = new src\observer\Message();
//$obj = new src\Order();
//$obj->attach($email);
//$obj->attach($message);
//$obj->notify();

//7原型模式
//$prototype = new src\Prototype();
//$obj1 = clone $prototype;
//$obj2 = clone $prototype;

//8装饰器模式
//$obj = new src\Person('自己');
//$tShirt = new src\decorator\TShirt();
//$overcoat = new src\decorator\Overcoat();
//$tShirt->decorate($obj);
//$overcoat->decorate($tShirt);
//$overcoat->display();

//9迭代器模式
//$data = [2,3,4,6];
//$it = new src\SimpleIterator($data);
//foreach ($it as $k => $v) {
//    print "键值对 -- key $k: value $v\n";
//}






