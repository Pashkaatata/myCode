<?php
$mysqli = new mysqli ("\localhost", "root", "", "testBD");//подключаемсся к бд
$mysqli->query ("SET NAMES 'UTF8'");//кодировка

$mysqli = "CREATE TABLE Events(id INT (30) NOT NULL,caption VARCHAR (30) NOT NULL)";//создаем таблицы
$mysqli = "CREATE TABLE Bids(id INT (30) NOT NULL,id_event INT (30) NOT NULL,name VARCHAR (30) NOT NULL,email VARCHAR (30) NOT NULL,price FLOAT (30) NOT NULL)";
$mysqli->query("INSERT INTO Events(id, caption) VALUES ('1', 'Atlas Weekend 2017'), ('2', 'Грин Грей(Green Grey)')");//заливка инфы
$mysqli->query("INSERT INTO Bids (id, id_event, name, email, price) VALUES ('1', '1', 'Василий', 'vas@gmil.com', 100), ('2', '1', 'Николай', 'nk@gmil.com', 150)");
$mysqli->query("SELECT * FROM `Bids` WHERE price > 100");////запрос с самой высокой ценой заявки
$mysqli->query("SELECT * FROM `Events` WHERE price < 1");//запрос выберает название мероприятия по которому нет заявок
$mysqli->query("SELECT * FROM `Events` WHERE id_ivent>3");//запрос выберает название мероприятия по которому больше 3-х заявок
$mysqli->query("SELECT * FROM `Events` WHERE id_ivent>5 ORDER BY id ASC");//запрос выберает название мероприятия по которому больше всего заявок
function print_result ($result_set){
    while(($row = $result_set -> fetch_assoc()) != false){
        print_r ($row);//выводим на екран
    }
}

$mysqli->close ();//закрываем подключение