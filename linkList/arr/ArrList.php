<?php

namespace App\LinkList\Arr;

class ArrList
{
    const MAX_LENGTH = 100;

    private static $length = 0;

    private $array;

    public function __construct()
    {
        for ($i = 0; $i < self::MAX_LENGTH - 1; $i ++) {
            $this->array[$i] = null;
        }
    }

    /**
     * @Description 计算线性表长度
     * @return int
     */
    public function length()
    {
        return self::$length;
    }

    /**
     * @Description 获取第$index个数据
     *
     * @param $index
     * @return mixed|null
     */
    public function get($index)
    {
        if ($index <= self::$length ) {
            return $this->array[$index - 1];
        }
        return null;
    }

    /**
     * @Description 查找第一个 $x 值的元素
     *
     * @param int $x 查找元素
     * @return int|null
     */
    public function locate($x)
    {
        if (!empty($this->array)) {
            for ($i = 0; $i <= self::$length - 1; $i++) {
                if ($this->array[$i] == $x) {
                    return $i;
                }
            }
        }

        return null;
    }

    /**
     * @Description 数据插入，在第$i 个元素前面插入 $x
     *
     * @param $x
     * @param $i
     */
    public function insert($x, $i)
    {
        try {
            if (self::$length + 1 <= self::MAX_LENGTH) {

                if ($i == 1) {
                    $this->array[0] = $x;
                    self::$length ++;
                } else {

                    $index = $i - 1;

                    if (self::$length  >= $index) {
                        self::$length++;
                        for ($j = self::$length; $j >= $index; $j--) {
                            $this->array[$j] = $this->array[$j - 1];
                        }
                        $this->array[$index] = $x;
                    } else {
                        throw new \Exception("插入位置不正确");
                    }
                }

            } else {
                throw new \Exception("线性表已经满了");
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    /**
     * @Description 删除数据
     *
     * @param $i
     * @return mixed|null
     */
    public function delete($i)
    {
        try {
            if (!empty($this->array)) {
                if ($i < self::$length) {
                    $temp = $this->array[$i];
                    for ($j = $i; $j <= self::$length; $j++) {
                        $this->array[$j] = $this->array[$j + 1];
                    }
                    self::$length--;
                    return $temp;
                } else {
                    throw new \Exception("删除下标不合法");
                }
            } else {
                throw new \Exception("当前线性表为空");
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    /**
     * @Description 输出元素
     */
    public function dumpData()
    {
        echo "当前线性表长度:" . self::$length . "\n";
        if (self::$length > 0) {
            echo "包含的元素为:\n";
            for ($i = 0; $i < self::$length; $i++) {
                $message = sprintf("第%s个元素为%s\n", $i, $this->array[$i]);
                echo $message;
            }
        } else {
            echo "当前线性表没有元素\n";
        }
    }
}
