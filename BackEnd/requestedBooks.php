<?php

include "../BackEnd/connectDB.php"; 


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "
    SELECT 
        br.request_id,
        b.book_name,
        b.book_isbn AS ISBN,
        a.author_name, -- Fetch author_name from authors table
        u.user_name AS sender_name,
        br.status,
        br.request_date
    FROM book_requests br
    INNER JOIN books b ON br.book_id = b.book_id
    INNER JOIN authors a ON b.author_id = a.author_id -- Join with authors table
    INNER JOIN users u ON br.user_id = u.user_id
    ORDER BY br.request_date DESC
";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='blue-text'>" . htmlspecialchars($row["request_id"]) . "</td>";
        echo "<td class='blue-text'>" . htmlspecialchars($row["book_name"]) . "</td>";
        echo "<td class='blue-text'>" . htmlspecialchars($row["ISBN"]) . "</td>";
        echo "<td class='blue-text'>" . htmlspecialchars($row["author_name"]) . "</td>"; // Display author_name
        echo "<td class='blue-text'>" . htmlspecialchars($row["sender_name"]) . "</td>";
        echo "<td class='blue-text'>" . htmlspecialchars($row["status"]) . "</td>";
        echo "<td class='blue-text'>" . htmlspecialchars($row["request_date"]) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No requests found</td></tr>";
}


$conn->close();
?>
<!-- Stil have some work on this page. -->