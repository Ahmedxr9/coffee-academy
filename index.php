<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Website HTML and CSS | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a class="logo" href="#">Coffee<span>.</span></a>
        <ul class="menu-links">
          <span id="close-menu-btn" class="material-symbols-outlined">close</span>
          <li><a href="index.php">Home</a></li>
          <li><a href="course.html">Course</a></li>
          <li><a href="profiles/index.html">Members</a></li>
          <li><a href="sign.php">Login</a></li>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>

    <section class="hero-section">
      <div class="content">
        <h2>Start Your Day With Fresh Coffee</h2>
        <p>
          Coffee is a popular and beloved beverage enjoyed by 
          people around the world.Awaken your senses with a steaming cup of liquid motivation.
        </p>
        <button>Start Now</button>
      </div>
    </section>

    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");

      // Toggle mobile menu on hamburger button click
      hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

      // Close mobile menu on close button click
      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
    
  </body>
</html>
