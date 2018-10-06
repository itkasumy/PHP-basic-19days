<?php
    abstract class Manager {
        public function addGoods() {}

        abstract function addUser();
    }

    class Worker extends Manager {
        function addUser() {}
    }