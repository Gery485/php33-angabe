<?php

require_once 'Database.php';
require_once 'DatabaseObject.php';

class Room implements DatabaseObject
{
    private static $tableName = 'zimmerverwaltung';

    public $id;
    public $nr;
    public $name;
    public $person;
    public $preis;
    public $balkon;

    public function create()
    {
        $conn = Database::connect();
        $stmt = $conn->prepare("INSERT INTO " . self::$tableName . " (nr, name, person, preis, balkon) VALUES (:nr, :name, :person, :preis, :balkon)");
        $stmt->execute([
            'nr' => $this->nr,
            'name' => $this->name,
            'person' => $this->person,
            'preis' => $this->preis,
            'balkon' => $this->balkon,
        ]);
        $this->id = $conn->lastInsertId();
        Database::disconnect();
        return $this->id;
    }

    public function update()
    {
        $conn = Database::connect();
        $stmt = $conn->prepare("UPDATE " . self::$tableName . " SET nr = :nr, name = :name, person = :person, preis = :preis, balkon = :balkon WHERE id = :id");
        $success = $stmt->execute([
            'nr' => $this->nr,
            'name' => $this->name,
            'person' => $this->person,
            'preis' => $this->preis,
            'balkon' => $this->balkon,
            'id' => $this->id,
        ]);
        Database::disconnect();
        return $success;
    }

    public static function get($id)
    {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM " . self::$tableName . " WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $row ? self::instantiate($row) : null;
    }

    public static function getAll()
    {
        $conn = Database::connect();
        $stmt = $conn->query("SELECT * FROM " . self::$tableName);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        return array_map([self::class, 'instantiate'], $rows);
    }

    public static function delete($id)
    {
        $conn = Database::connect();
        $stmt = $conn->prepare("DELETE FROM " . self::$tableName . " WHERE id = :id");
        $success = $stmt->execute(['id' => $id]);
        Database::disconnect();
        return $success;
    }

    private static function instantiate($row)
    {
        $room = new self();
        $room->id = $row['id'];
        $room->nr = $row['nr'];
        $room->name = $row['name'];
        $room->person = $row['person'];
        $room->preis = $row['preis'];
        $room->balkon = $row['balkon'];
        return $room;
    }
}
