<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Website HTML and CSS | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a class="logo" href="#">Course<span>.</span></a>
        <ul class="menu-links">
          <span id="close-menu-btn" class="material-symbols-outlined">close</span>
          <li><a href="index.php">Home</a></li>
          <li><a href="sign.php">Login</a></li>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>

    <section class="hero-section">
      <div class="content">
        <h2>Trainee</h2>
        <p>
         - Course: "Introduction to Coffee Basics" on Coffee Skills Program
        </p>
        <button>Enroll Now</button>
      </div>
    </section>

    <section class="hero-section2">
      <div class="content">
        <h2>Barista</h2>
        <p>
          - Course: "Barista Training and Techniques" on Udemy
        </p>
        <button>Enroll Now</button>
      </div>
    </section>

    <section class="hero-section3">
      <div class="content">
        <h2>Manager</h2>
        <p>
          - Course: "Coffee Shop Management" on LinkedIn Learning
        </p>
        <button>Enroll Now</button>
      </div>
    </section>

    <section class="hero-section">
      <div class="content">
        <h2>Supervisor</h2>
        <p>
          - Course: "Leadership in Hospitality" on Coursera by ESSEC
        </p>
        <button>Enroll Now</button>
      </div>
    </section>

    <section class="hero-section">
      <div class="content">
        <h2>HR </h2>
        <p>
          - Course: "Human Resources in the Hospitality Industry" on edX 
        </p>
        <button>Enroll Now</button>
      </div>
    </section>

    

    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");

      hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
    
  </body>
</html>
