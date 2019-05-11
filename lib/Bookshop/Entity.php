<?php

namespace Bookshop;


class Entity {

    private $id;

    public function getId() {
        return $this->id;
    }

    public function __construct(int $id) {
        $this->id = intval($id);
    }

}