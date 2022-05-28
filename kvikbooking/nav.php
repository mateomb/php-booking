<?php
function getNav()
{
    echo '<nav class="navbar navbar-expand-lg navbar-light">';
    echo '        <a class="navbar-brand color-brand" href="home.php">Kvik Booking</a>';
    echo '        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
    echo '            <span class="navbar-toggler-icon "></span>';
    echo '        </button>';
    echo '        <div class="collapse navbar-collapse" id="navbarSupportedContent">';
    echo '            <ul class="navbar-nav ml-auto">';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="home.php">Home</a>';
    echo '                </li>';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="allapartments.php">Apartments</a>';
    echo '                </li>';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="addApartment.php">Add apartments</a>';
    echo '                </li>';
    echo '                <li class="nav-item">';
    echo '                    <a class="nav-link" href="logout.php">Log Out</a>';
    echo '                </li>';
    echo '            </ul>';
    echo '        </div>';
    echo '    </nav>';
}
