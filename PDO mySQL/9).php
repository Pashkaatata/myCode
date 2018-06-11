<?php
//Создаем бд с с помощью PHP Data Objects
$serverName = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$serverName;dbname=testDB,$username,$password");//подключение к бд
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CEREATE DATBSE testDB";//создание бд

    $sql = "CREATE TABLE Events(id INT (30) NOT NULL,caption VARCHAR (30) NOT NULL)";//создаем таблицы
    $sql = "CREATE TABLE Bids(id INT (30) NOT NULL,id_event INT (30) NOT NULL,name VARCHAR (30) NOT NULL,email VARCHAR (30) NOT NULL,price FLOAT (30) NOT NULL)";

    $conn->exec($sql);



}
catch(PDOException $e){
    echo $sql . $e->getMessage();
}
$conn = null;
?>
<?php
//миграция бд
try {
    $conn = new PDO("mysql:host=$serverName;dbname=testDB,$username,$password");//подключение к бд
    $conn->beginTransaction();//выключение автоматической фиксации
    $conn->exec("INSERT INTO Events(id, caption) VALUES ('1', 'Atlas Weekend 2017'), ('2', 'Грин Грей(Green Grey)')");//заливка инфы
    $conn->exec("INSERT INTO Bids (id, id_event, name, email, price) VALUES ('1', '1', 'Василий', 'vas@gmil.com', 100), ('2', '1', 'Николай', 'nk@gmil.com', 150)");

    $conn->commit();//завершение транзакции
}
catch(PDOException $e){
    $conn->rollBack();//возвращение к фиксации
}
?>

<?php
//запрос с самой высокой ценой заявки
$sql="SELECT price FROM `Bids` WHERE price>100";

if (result->num_rows>0){
    while ($row = $result->fetch_assoc() !=false){
        echo  $row["price"];
    }
}
$result = $conn->query($sql);
?>
<?php
//запрос выберает название мероприятия по которому нет заявок
$sql="SELECT caption FROM `Events` WHERE price<1";

if (result->num_rows>0){
    while ($row = $result->fetch_assoc() !=false){
        echo  $row["caption"];
    }
}
$result = $conn->query($sql);
?>

<?php
//запрос выберает название мероприятия по которому больше 3-х заявок
$sql="SELECT caption FROM `Events` WHERE id_ivent>3";

if (result->num_rows>0){
    while ($row = $result->fetch_assoc() !=false){
        echo  $row["caption"];
    }
}
$result = $conn->query($sql);
?>
<?php
//запрос выберает название мероприятия по которому больше всего заявок
$sql="SELECT caption FROM `Events` WHERE id_ivent>5 ORDER BY id ASC";

if (result->num_rows>0){
    while ($row = $result->fetch_assoc() !=false){
        echo  $row["caption"];
    }
}
$result = $conn->query($sql);
?>
