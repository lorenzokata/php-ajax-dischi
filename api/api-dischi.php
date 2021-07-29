<?php
include '../db/dischi.php';

header('Content-Type: application/json');
echo json_encode($dischi);