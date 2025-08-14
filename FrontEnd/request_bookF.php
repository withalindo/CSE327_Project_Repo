<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Request</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/request.css" />
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet" />
  </head>
  <body>
    <form action="../BackEnd/request_book.php" method="post">
      <a href="../FrontEnd/userDashBoard.php" id="backButton">BACK</a>

      <input
        type="text"
        id="bookName"
        name="bookName"
        placeholder="Full Book Name"
        required
      />
      <input
        type="text"
        id="ISBN"
        name="ISBN"
        placeholder="ISBN Number of The Book (Can be found online)"
        required
      />
      <input
        type="text"
        id="authorName"
        name="authorName"
        placeholder="Full Name of the Author"
        required
      />
      <input
        type="text"
        id="Sender_name"
        name="Sender_name"
        placeholder="Sender Name"
        required
      />

      <input type="submit" id="submitRequestButton" value="SUBMIT" />
    </form>
  </body>
</html>