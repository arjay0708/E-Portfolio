<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- ====== Header / Navigation ====== -->
  <header>
    <nav class="navbar">
      <div class="logo">MyPortfolio</div>
      <ul class="nav-links">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- ====== Hero Section ====== -->
  <section class="hero" id="home">
    <div class="hero-content">
      <h1>Hello, I’m <span class="highlight">Amir Anwar</span></h1>
      <h2>Web Developer</h2>
      <p>I'm a web developer specializing in creating and designing beautiful, user-friendly websites.</p>
      <a href="#contact" class="btn">Contact Me</a>
    </div>
    <div class="hero-image">
      <!-- Replace with your own image -->
      <img src="/assets/arjay.png" alt="Profile Photo">
    </div>
  </section>

  <!-- ====== About Section ====== -->
  <section class="about" id="about">
    <h2>About Me</h2>
    <div class="about-container">
      <div class="about-image">
        <!-- Replace with your own image -->
        <img src="https://via.placeholder.com/300x300" alt="About Me">
      </div>
      <div class="about-text">
        <h3>Who I Am?</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu tellus semper sapien 
          egestas vehicula at sed est. Nullam in aliquet ex, eu dictum lorem.
        </p>
        <p>
          Curabitur nec ligula vitae massa euismod bibendum. Vivamus in orci neque. 
          Mauris tincidunt vulputate vehicula.
        </p>
        <a href="#" class="btn">Download Resume</a>
      </div>
    </div>
  </section>

  <!-- ====== Skills Section ====== -->
  <section class="skills" id="skills">
    <h2>Skills</h2>
    <div class="skills-container">
      <div class="skill-box">
        <h3>HTML</h3>
        <p>Expert in creating semantic and accessible markup.</p>
      </div>
      <div class="skill-box">
        <h3>CSS</h3>
        <p>Skilled in responsive layouts and modern styling techniques.</p>
      </div>
      <div class="skill-box">
        <h3>JavaScript</h3>
        <p>Experience with dynamic functionality and DOM manipulation.</p>
      </div>
      <!-- Add more skills as needed -->
    </div>
  </section>

  <!-- ====== Projects Section ====== -->
  <section class="projects" id="projects">
    <h2>Projects</h2>
    <div class="projects-container">
      <!-- Repeat project items as needed -->
      <div class="project-item">
        <img src="https://via.placeholder.com/350x200" alt="Project 1">
        <h3>Project Title 1</h3>
        <p>Short description about the project.</p>
      </div>
      <div class="project-item">
        <img src="https://via.placeholder.com/350x200" alt="Project 2">
        <h3>Project Title 2</h3>
        <p>Short description about the project.</p>
      </div>
    </div>
  </section>

  <!-- ====== Contact Section ====== -->
  <section class="contact" id="contact">
    <h2>Contact Me</h2>
    <p>Have a question or want to work together?</p>
    <form action="contact.php" method="POST" class="contact-form">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>

      <label for="message">Message</label>
      <textarea name="message" id="message" rows="5" required></textarea>

      <button type="submit" class="btn">Send</button>
    </form>
  </section>

  <!-- ====== Footer ====== -->
  <footer>
    <p>&copy; 2025 MyPortfolio. All Rights Reserved.</p>
  </footer>

</body>
</html>
