<?php

namespace App\LinkList\Link;

class ListNode
{
    public  $data;

    public  $next;

    public function __construct(string $data)
    {
        $this->data = $data;
    }
}


class LinkedList implements \Iterator
{
    private $head = null;

    private $length = 0;

    private $currentNode;

    private $currentPosition;

    /**
     * @Description 数据插入最后 O(n)
     *
     *
     * @param $data
     */
    public function insert($data)
    {
        $node = new ListNode($data);

        if ($this->head === null) {
            $this->head = &$node;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $node;
        }

        $this->length ++;
        return true;
    }

    /**
     * @Description 在特点节点之后插入  O(n)
     *
     * @param $data
     * @param $query
     */
    public function insertBefore($data, $query)
    {
        $node = new ListNode($data);

        if ($this->head) {
            $previous = null;
            $currentNode = $this->head;

            while ($currentNode !== null) {
                if ($currentNode->data === $query) {
                    $node->next = $currentNode;
                    if (empty($previous)) {
                        $node->next = $currentNode;
                        $this->head = $node;
                    } else {
                        $previous->next = $node;
                    }
                    $this->length ++;
                    break;
                }

                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function insertAfter($data, $query)
    {
        $node = new ListNode($data);

        if ($this->head) {

        }

    }

    public function insertAtFirst($data)
    {

    }

    public function search($data)
    {

    }

    public function deleteFirst()
    {

    }

    public function deleteLast()
    {

    }

    public function delete($query)
    {

    }

    public function reverse()
    {

    }

    public function getNthNode()
    {

    }

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {

    }

    public function rewind()
    {

    }

    public function key()
    {

    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function getSize()
    {

    }

    public function display()
    {

    }

}