<?php

class ApartmentsDatabase
{

    function __construct()
    {
    }

    private $conn;

    function connect()
    {
        $this->conn = mysqli_connect('localhost', 'mxm9894', 'Competitor9=opprobrium', 'mxm9894');
        if (!$this->conn) {
            die("Failed to connect to database: " . mysqli_connect_error());
        }
    }

    function getConn()
    {
        return $this->conn;
    }

    function startSession($username)
    {
        session_start();
        $_SESSION["username"] = $username;
    }

    function authenticate()
    {
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: index.php");
        }
    }

    function adminCheck()
    {
        $query = "SELECT roleID FROM kvikusers WHERE username = \"" . $_SESSION['username'] . "\"";
        $result = $this->conn->query($query);
        $rows = $result->fetch_assoc();
        $row = $rows[0];
        if ($row["roleID"] == 1) {
            return false;
        } else {
            return true;
        }
    }

    function logout()
    {
        $this->authenticate();
        session_destroy();
        $this->authenticate();
    }

    function fetchApartmentExtra($id)
    {
        $query = "select * from kvikExtra where apartmentID = $id";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<ul class="list-group">';
                echo '<li class="list-group-item">Air Conditioning:' . $row["ac"];
                echo '<li class="list-group-item">Parking: ' . $row["parking"];
                echo '<li class="list-group-item">Wifi: ' . $row["wifi"];
                echo '<li class="list-group-item">Pets: ' . $row["pets"];
                echo '</ul>';
            }
        }
    }

    function fetchAllApartments()
    {
        $query = "select * from kvikApartments";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card margin-bottom-card">';
                echo '<img class="card-img-top" src="src/img/' . strtolower($row["img"]) . '.jpg" alt=' . strtolower($row["img"]) . '>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title text-center">' . $row["title"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                echo '<ul class="list-group">';
                echo '<li class="list-group-item">Price: $' . $row["price"];
                echo '</ul>';
                echo '<hr>';
                echo '<a href="description.php?id=' . $row["id"] . '" class="btn btn-primary">View more</a>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    function fetchAllApartmentsByCity($city)
    {
        $query = "select * from kvikApartments where city = '$city'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img class="card-img-top" src="src/img/' . strtolower($row["img"]) . '.jpg" alt=' . strtolower($row["img"]) . '>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["title"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                echo '<ul class="list-group">';
                echo '<li class="list-group-item">Price: $' . $row["price"];
                echo '</ul>';
                echo '<hr>';
                echo '<a href="description.php?id=' . $row["id"] . '" class="btn btn-primary">View more</a>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    function fetchApartmentByID($id)
    {
        $query = "select * from kvikApartments where id = $id";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img class="card-img-top" src="src/img/' . strtolower($row["img"]) . '.jpg" alt=' . strtolower($row["img"]) . '>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["title"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                $this->fetchApartmentExtra($id);
                echo '<li class="list-group-item">Price: $' . $row["price"];
                echo '<hr>';
                echo '<p>Owner: ' . $row["owner"] . '</p>';
                echo '<p>Address: ' . $row["address"] . ', ' . $row["city"] . ', ' . $row["country"] . '</p>';
                echo '<a href="checkout.php?id=' . $row["id"] . '" class="btn btn-primary">Checkout</a>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    function fetchApartmentCheckout($id)
    {
        $query = "select * from kvikApartments where id = $id";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img class="card-img-top" src="src/img/' . strtolower($row["img"]) . '.jpg" alt=' . strtolower($row["img"]) . '>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title text-center">' . $row["title"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                $this->fetchApartmentExtra($id);
                echo '<li class="list-group-item">Price: $' . $row["price"];
                echo '<hr>';
                echo '<p>Owner: ' . $row["owner"] . '</p>';
                echo '<p>Address: ' . $row["address"] . ', ' . $row["city"] . ', ' . $row["country"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    function fetchOneApartmentFromCity($city)
    {
        $query = "select * from kvikApartments where city = $city";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            $rows = $result->fetch_assoc();
            $row = $rows[1];
            echo '<div class="card">';
            echo '<img class="card-img-top" src="src/img/' . strtolower($row["img"]) . '.jpg" alt=' . strtolower($row["img"]) . '>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["title"] . '</h5>';
            echo '<p class="card-text">' . $row["description"] . '</p>';
            echo '<ul class="list-group">';
            echo '<li class="list-group-item">Price: $' . $row["price"];
            echo '</ul>';
            echo '<hr>';
            echo '<a href="description.php?id=' . $row["id"] . '" class="btn btn-primary">View more</a>';
            echo '</div>';
            echo '</div>';
        }
    }

    function postComment($apartmentID)
    {
        
    }

    function getComments($id)
    {
        $sql = "SELECT * FROM kvikComments where apartmentID = $id";
        $result = $this->conn->query($sql);
        $sqlUser = "SELECT kvikusers.username FROM kvikusers join kvikComments on kvikUsers.id = kvikComment.userID";
        $resultUser = $this->conn->query($sqlUser);
        while ($rows = $result->fetch_assoc()) {
            echo "<div class='container-comment margin-bottom-card'>";
            echo $rows['timestamp'] . '<br>';
            echo $rows['comment'] . '<br>';
            echo "</div>";
        } //End of while
    }
}
