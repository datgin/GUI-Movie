<?php
function getMovie($type){
    $sql = "";
    if ($type == "new") {
        $sql = "SELECT * FROM movie WHERE new = 'new'";
    } elseif ($type == "trangthai") {
        $sql = "SELECT * FROM movie WHERE trangthai = 'đang chiếu'";
    } elseif ($type == "sapchieu") {
        $sql = "SELECT * FROM movie WHERE trangthai = 'sắp chiếu'";
    } elseif ($type == "limit") {
        $sql = "SELECT * FROM movie ORDER BY id DESC LIMIT 5";
    }
    return getdb_All($sql);
}
function getMovieById($id){
    $sql = "SELECT * FROM movie WHERE id = $id";
    return getdb_One($sql);
}
