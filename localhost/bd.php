<?php

function connect()
{
    $mysqli = new mysqli('localhost', 'root', '', 'digital-electronics');

    if ($mysqli->connect_errno) {
        echo "Извините, возникла проблема на сайте";
        echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
        echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
        echo "Ошибка: " . $mysqli->connect_error . "\n";
        exit;
    }
    return $mysqli;
}

function getAll($table)
{
    $mysqli = connect();
    $items = [];

    $sql = 'SELECT * FROM ' . $table;

    if (!$result = $mysqli->query($sql)) {
        echo "Извините, возникла проблема в работе сайта.";
        echo "Ошибка: Наш запрос не удался и вот почему: \n";
        echo "Запрос: " . $sql . "\n";
        echo "Номер_ошибки: " . $mysqli->errno . "\n";
        echo "Ошибка: " . $mysqli->error . "\n";
        exit;
    }

    if ($result->num_rows === 0) {
        // Упс! в запросе нет ни одной строки!
        echo "Мы не смогли найти совпадение, простите. Пожалуйста, попробуйте еще раз.";
        exit;
    }

    while ($res = $result->fetch_assoc()) {
        $items[] = $res;
    }
    return $items;
}

function getOne($table, $id)
{
    $mysqli = connect();
    $items = [];

    $sql = 'SELECT * FROM ' . $table . ' WHERE id = ' . $id;

    if (!$result = $mysqli->query($sql)) {
        echo "Извините, возникла проблема в работе сайта.";
        echo "Ошибка: Наш запрос не удался и вот почему: \n";
        echo "Запрос: " . $sql . "\n";
        echo "Номер_ошибки: " . $mysqli->errno . "\n";
        echo "Ошибка: " . $mysqli->error . "\n";
        exit;
    }

    if ($result->num_rows === 0) {
        // Упс! в запросе нет ни одной строки!
        echo "Мы не смогли найти совпадение, простите. Пожалуйста, попробуйте еще раз.";
        exit;
    }
    return $result->fetch_assoc();
}

function add($data)
{
    $mysqli = connect();

    $query = "INSERT INTO orders VALUES (NULL, '" . $data['name'] . "', '" . $data['adress'] . "','" . $data['phone'] . "' , '" . $data['orderItemId'] . "', '" . $data['orderItemType'] . "', '" . $data['orderItemAmount'] . "', '" . $data['pay_type'] . "')";

    $mysqli->query($query);
}

function addReview($data)
{
    $mysqli = connect();

    $query = "INSERT INTO reviews VALUES (NULL, '" . $data['name'] . "', '" . $data['text'] . "',CURRENT_TIMESTAMP , '" . $data['email'] . "')";

    $mysqli->query($query);

}

