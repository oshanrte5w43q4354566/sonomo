<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment website</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="dash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <!--email-->
    <div class="navbar" id="up">
      <div id="Phone">
        <a> Call us for Online Oder:+94 112 567029 </a> 
      </div>
      <div id="em">
        <a>Email : sonomobookshop@gmail.com</a> 
      </div>
      <div id="as">
        <a>Advanced Search</a>
      </div>
    </div>  
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar1">
      <a class="navbar-brand" href="#">Sonomo <br>Bookshop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto" id="naba">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>
        </ul>
      </div>  
    </nav>

    <!-- Display book details -->
    <section>
        <h5 id="bl" class="text-center">Book List</h5>
        <br>
        <div id="addbtn">
          <button onclick="window.location.href='addbook.html';" class="btn" id="addbook1">Add Book</button>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                  <th>Book ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
            </thead>
            <!-- Php code for book shows -->
            <tbody>
                <?php
                $host = "Localhost";
                $username = "root";
                $password = "";
                $database = "Assignment";
                 
                $conn = mysqli_connect($host, $username, $password, $database);
                 
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sqlget= "SELECT * FROM `book details`";
                $result = $conn->query($sqlget);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[bookID]</td>
                        <td>$row[bookname]</td>
                        <td>$row[author]</td>
                        <td>$row[price]</td>
                        <td>$row[quantity]</td>
                    </tr>";
                  }
                } 
                
                else {
                  echo "<tr><td colspan='5'>No books available</td></tr>";
                }
                ?>
                
            </tbody>
        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

