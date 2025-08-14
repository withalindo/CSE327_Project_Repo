<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requested Books</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/requestedBooks.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>
    <!-- Background -->
    <div class="background">
        <div id="overlay" class="overlay"></div>
    </div>

    <!-- Menu Bar -->
    <div class="menuBar" onclick="openNav()">
        <div class="menuImage"></div>
    </div>

    <!-- Side Navigation -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a href="../FrontEnd/requestedBooksF.php" class="active">
            <button class="requestsButton">
                Requested Books
            </button>
        </a>

        <a href="../FrontEnd/adminStockF.php">
            <button class="stockButton">
                Book Stock
            </button>
        </a>

        <a href="../FrontEnd/updatePanelF.php">
            <button class="update morebutton">
                Update Books</button>
            </a>

        <a href="../FrontEnd/addBooksF.php">
            <button class="add morebutton">
                Add Books
            </button>
        </a>

        <a href="../FrontEnd/landingF.php">
            <button class="logoutButton">
                Log Out
            </button>
        </a>    

    </div>

    <!-- Requested Books Table -->
    <div class="stockSpace">
        <table>
            <thead class="table-header">
                <tr>
                    <th>Request ID</th>
                    <th>Book Name</th>
                    <th>Book ISBN</th>
                    <th>Author Name</th>
                    <th>User Name</th>
                    <th>Status</th>
                    <th>Request Timestamp</th>
                   
                    
                </tr>
            </thead>

            <tbody class="table-body">
                <?php include '../BackEnd/requestedBooks.php'; ?>
            </tbody>
        </table>
        
    </div>

    
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
            document.getElementById("overlay").style.display = "block";
        }
  
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("overlay").style.display = "none";
        }
    </script>
</body>
</html>

<!-- Stil have some work in this page. -->