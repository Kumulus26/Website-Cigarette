<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cigarettes_db";

// Crée une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit();
}

// Récupère les données envoyées en POST
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['type']) || !isset($data['brand']) || !isset($data['quantity'])) {
    echo json_encode(['error' => 'Données manquantes']);
    exit();
}

$type = $conn->real_escape_string($data['type']);
$brand = $conn->real_escape_string($data['brand']);
$quantity = intval($data['quantity']);

// Vérifie que les entrées sont valides
if (empty($type) || empty($brand) || $quantity <= 0) {
    echo json_encode(['error' => 'Données invalides fournies']);
    $conn->close();
    exit();
}

// Récupère le prix du paquet de la marque de cigarette depuis la base de données
$sql = "SELECT price, cigarettes_per_pack FROM prices WHERE type='$type' AND brand='$brand'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $price_per_pack = $row['price'];
    $cigarettes_per_pack = $row['cigarettes_per_pack'];

    $packs_per_day = $quantity / $cigarettes_per_pack;
    $dailyCost = $packs_per_day * $price_per_pack;
    $weeklyCost = $dailyCost * 7;
    $monthlyCost = $dailyCost * 30;
    $yearlyCost = $dailyCost * 365;
    $lifeCost = $yearlyCost * 50;

    echo json_encode([
        'dailyCost' => $dailyCost,
        'weeklyCost' => $weeklyCost,
        'monthlyCost' => $monthlyCost,
        'yearlyCost' => $yearlyCost,
        'lifeCost' => $lifeCost
    ]);
} else {
    echo json_encode(['error' => 'Prix non trouvé pour la marque sélectionnée']);
}

$conn->close();
?>
