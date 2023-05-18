<!DOCTYPE html>
<html lang="en">
<head>
  <title>bestSeller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="register.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    #book {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #book td, #book th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #book tr:nth-child(even){background-color: #f2f2f2;}
    
    #book tr:hover {background-color: #ddd;}
    
    #book th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #060606;
      color: white;
    }
    </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <script>
 function Book(title, author, genre) {
        this.title = title;
        this.author = author;
        this.genre = genre;
        
      }

    
      let topBooks = [
    new Book("Da Vinci Code,The", "Brown, Dan", "Crime, Thriller & Adventure"),
    new Book("Harry Potter and the Deathly Hallows", "Rowling, J.K.", "Children's Fiction"),
    new Book("Harry Potter and the Philosopher's Stone", "Rowling, J.K.", "Children's Fiction"),
    new Book("Harry Potter and the Order of the Phoenix", "Rowling, J.K.", "Children's Fiction"),
    new Book("Fifty Shades of Grey", "James, E. L.", "Romance & Sagas"),];
  
 
function addBook(){

let btnAdd = document.getElementById("btn");
let t=document.getElementById("title").value;
let a=document.getElementById("author").value;
let g=document.getElementById("genre").value;
topBooks.push(new Book(t,a,g));

}
function displayBooks() {
  $.ajax({
    url: 'display_books.php',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      let topBooks = response.topBooks;
      let tableBody = document.querySelector("#peopleTable tbody");
      tableBody.innerHTML = "";

      for (let book of topBooks) {
        let row = tableBody.insertRow();
        let titleCell = row.insertCell



      function search(topBooks){

const found1 = topBooks.find(element => element.title=== document.getElementById("searchName").value);
const found2 = topBooks.find(element => element.author === document.getElementById("searcAuthor").value);

  if(found1 != undefined && found2 != undefined){alert("The book is found :)")}
  else{        alert("The book is not found !")
}
}



    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip(); 
        
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
      
            // Prevent default anchor click behavior
            event.preventDefault();
      
            // Store hash
            var hash = this.hash;
      
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      })
      </script>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#myPage">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">HOME</a></li>
          <li><a href="Books.html">Books</a></li>
          <li><a href="Register.html">Register</a></li>
          <li><a href="funpage.html">Game</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="BestSellerBooks.html">Best sellers</a></li>
              <li><a href="BestNonFictionBooks.html">Best nonfiction</a></li>
            </ul>
          </li>
          <li><a href="calculations.html">cart</a></li>

          <li><a href="Contact.html">Contact</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
 
     
    <br><br> <br>
        <h1 style="color: #ddd;">The Top 5 Best Selling Books</h1>
        <pre>

    Here is the list of the top 5 best selling books, but to find more you can 
    visit this link:
    <a href="https://www.theguardian.com/news/datablog/2012/aug/09/best-selling-books-all-time-fifty-shades-grey-compare">The best 100 books ever!</a>
        </pre>
        <table id="peopleTable" border="solid" style="color: #ddd; border-color: #ddd;border-width: 5px; margin:5pt;">
          <thead>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Genre</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
        <form action=""><input type="button" value="press" onclick="displayBooks(topBooks)"></form>

        <div class="login-page">
          <div class="form">
            <div class="login">
              <div class="login-header">
                <h3>Add A Book</h3>
                <p>Please enter the book info here.</p>
              </div>
            </div>
            <form class="login-form">
              <input type="text" placeholder="Book name" id="title" required/>
              <input type="text" placeholder="author" id="author" required/>
              <input type="text" placeholder="genre" id="genre" required/>
              <input type="button" value="Add" onclick="addBook()" id="btn">              
            </form>
          </div>
        </div>


        <div class="login-page2">
          <div class="form">
            <div class="login">
              <div class="login-header">
                <h3>Search</h3>
                <p>Please enter the book info here.</p>
              </div>
            </div>
            <form class="login-form">
              <input type="text" placeholder="Book name" id="searchName" required/>
              <input type="text" placeholder="author" id="searcAuthor" required/>
              <input type="button" value="search" onclick="search(topBooks)" id="btn2">              
            </form>
          </div>
        </div>
        <pre>



        <form class="login-form" action="add_book.php" method="POST">
       <input type="text" placeholder="Book name" name="title" required/>
      <input type="text" placeholder="Author" name="author" required/>
      <input type="text" placeholder="Genre" name="genre" required/>
          <input type="submit" value="Add" id="btn">              
     </form>
     <form class="login-form" action="search_books.php" method="POST">
  <input type="text" placeholder="Book name" name="searchName" required/>
  <input type="text" placeholder="Author" name="searchAuthor" required/>
  <input type="submit" value="Search" id="btn2">              
</form>




































          
        </pre>
        <footer class="text-center">
            <a class="up-arrow" href="index.html" data-toggle="tooltip" title="TO TOP">
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Glance</p> 

    
          </footer>
</body>
</html>