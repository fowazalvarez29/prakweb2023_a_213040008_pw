<?php
function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'prakweb_2023_A_213040008');
    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
}
    return $rows;
}
?>