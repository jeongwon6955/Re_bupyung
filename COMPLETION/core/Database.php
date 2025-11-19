<?php
class Database {
    protected function connect() {
        return new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "");
    }
}