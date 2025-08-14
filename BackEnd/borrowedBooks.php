<?php

include "connectDB.php";

$user_name = trim($_POST['user_name'] ?? '');

if (empty($user_name)) {
    echo "<tr><td colspan='4' style='text-align:center;color:red;'>Please enter a username.</td></tr>";
    exit;
}


$stmtUser = $conn->prepare("SELECT user_id FROM users WHERE user_name = ?");
$stmtUser->bind_param("s", $user_name);
$stmtUser->execute();
$stmtUser->bind_result($user_id);
$stmtUser->fetch();
$stmtUser->close();

if (!$user_id) {
    echo "<tr><td colspan='4' style='text-align:center;color:red;'>User not found. Please check the username.</td></tr>";
    exit;
}


$sql = "
    SELECT 
        issued_books.book_id, 
        books.book_name, 
        issued_books.issue_date, 
        issued_books.status
    FROM issued_books
    INNER JOIN books ON issued_books.book_id = books.book_id
    WHERE issued_books.user_id = ?
";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        $status = $row['status'] == 0 ? "Borrowed" : "Returned";

        echo "<tr>
                <td>{$row['book_id']}</td>
                <td>{$row['book_name']}</td>
                <td>{$row['issue_date']}</td>
                <td>{$status}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4' style='text-align:center;'>No borrowed books found for this user.</td></tr>";
}

$stmt->close();
$conn->close();
?>