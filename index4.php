<?php
$dsn = "mysql:host=localhost;dbname=guestbook;charset=utf8";
$user = "root";
$pass = "1234";
try {
    $connection = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
$limit = 2;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;
$query = "SELECT * FROM message ORDER BY message_time DESC LIMIT :limit OFFSET :offset";
$stmt = $connection->prepare($query);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
echo "<ul>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<li><strong>" . htmlspecialchars($row['user']) . ":</strong> " . htmlspecialchars($row['message_text']) . 
         " <em>(" . $row['message_time'] . ")</em></li>";
}
echo "</ul>";
$countQuery = "SELECT COUNT(*) AS total FROM message";
$countStmt = $connection->query($countQuery);
$totalRows = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];
$totalPages = ceil($totalRows / $limit);
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
?>
