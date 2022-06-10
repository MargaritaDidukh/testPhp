<?php

namespace didukh\framework\models;

use didukh\framework\DB;

class Model
{
    protected $pdo;
    protected $table='categories';
    protected $pKey = 'id';

    public function __construct()
    {
        $this->pdo = DB::instance();
    }

    public function findAll()
    {
        $table = htmlspecialchars($this->table);
        $sql = "SELECT * FROM $table";
        return $this->pdo->query($sql);
    }

//    public function where($key, $simbol, $search)
//    {
//        $table = htmlspecialchars($this->table);
//
//        $key = htmlspecialchars($key);
//        $simbol = htmlspecialchars($simbol);
//        $search = htmlspecialchars($search);
//
//        $str = $key.$simbol. "'" . $search . "'";
//
//        $sql = "SELECT * FROM $table WHERE $str";
//        return $this->pdo->query($sql);
//    }

    public function insertOne(array  $array): array
    {
        $table = htmlspecialchars($this->table);
        $key = implode(',', array_keys($array));
        $values = sprintf("'%s'", implode("','", $array));
        $sql = "INSERT INTO  $table ($key) values($values)";
        return $this->pdo->query($sql);
    }
    public function updateOne(array  $array, array  $condition): array
    {
        $table = htmlspecialchars($this->table);
        $res = '';
        foreach ($array as $key => $value) {
            $res .= $key . " = '" . $value ."', ";
        }
        foreach ($condition as $key => $value) {
            $cond = $key . " = '" . $value . "'";
        }
        $res = substr($res, 0, -2);
        $sql = "UPDATE $table SET $res WHERE $cond";
        return $this->pdo->query($sql);
    }
    public function deleteOne( string $condit, $value): array
    {
        $table = htmlspecialchars($this->table);
//        foreach ($condition as $key => $value) {
//            $cond = $key . " = '" . $value . "'";
//        }
        $sql = "DELETE FROM $table WHERE $condit = $value ";
        return $this->pdo->query($sql);
    }
    public function likeOne(string $param, string $condition): array
    {
        $table = htmlspecialchars($this->table);
        $sql ="SELECT * FROM $table WHERE $param LIKE '$condition'";
        return $this->pdo->query($sql);
    }
    public function whereIn(string $param, array $condition): array
    {
        $table = htmlspecialchars($this->table);
        $condition = sprintf("'%s'", implode("','", $condition));
        $sql ="SELECT * FROM $table WHERE $param IN ($condition)";
        return $this->pdo->query($sql);
    }
    public function orderBy(array $condition, string $sort): array
    {
        $table = htmlspecialchars($this->table);
        if (count($condition) > 1) {
            $cond = implode(',', $condition);
        } else {
            $cond = $condition[0];
        }
        $sql ="SELECT * FROM $table ORDER BY $cond $sort";
        return $this->pdo->query($sql);
    }
    public function join(string $joinWith, string $request, string $kindJoin): array
    {
        $table = htmlspecialchars($this->table);
        $on = $table . '.' . $request . '=' . $joinWith . '.' . $request;
        $sql ="SELECT * FROM $table $kindJoin JOIN $joinWith ON $on";
        return $this->pdo->query($sql);
    }
}
