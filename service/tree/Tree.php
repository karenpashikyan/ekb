<?php


class Tree extends AbstractTree
{
    private $tree;

    public function __construct(AbstractType $tree)
    {
        $this->tree = $tree;
        return $this;
    }

    public function show()
    {
        $users = (new User())->find()->all();
//        $requests = (new Request())->find()->all();
        $requests = (new Request())
            ->select('request.*')
            ->all();

        echo "<pre>";
        var_dump(count($requests));
        echo "</pre>";
    }
}