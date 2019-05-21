<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 19-5-21
 * Time: 上午11:16
 */

namespace HelloWorld;

class HelloWorld {
    // 作者
    protected $author;

    /**
     * HelloWorld constructor.
     * @param string $author
     */
    public function __construct($author = 'wsc') {
        $this->author = $author;
    }

    /**
     * 执行方法
     * @return string
     */
    public function info() {
        $info = "Hello World ! \n";
        $info .= "\t--Power By ";
        $info .= $this->author . "\n";
        return $info;
    }

    /**
     * 浏览器友好的变量输出
     * @access public
     * @param  mixed $var 变量
     * @return null|string
     */
    public static function dump($var) {

        ob_start();
        var_dump($var);
        $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', ob_get_clean());

        $output = '<pre>' . $output . '</pre>';
        echo($output);
    }
}



