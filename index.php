<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Heba Portfolio</title>
    <link rel="stylesheet" href="style.css" />
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <header class="header">

      <a href="Admin.php" class="logo">
        Heba <span>Al-Qadasi</span>
      </a>

      <i class="bx bx-menu" id="menu"></i>

      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#Services">Services</a>
        <a href="#project">Project</a>
        
        <a href="#contact">Contact</a>
      </nav>

      <button class="btn">Contact Me</button>

    </header>
        
    <section class="home" id="home">
      <div class="home-content">
        <h1>Hi, It's <span>Heba</span></h1>
        <h3>
          I'm a <span>Software Engineer</span>
        </h3>
        <p>
          Hello! I am Heba Al-Qadasi, a student of Information Technology at AR-Rasheed Smart University. 
          I enjoy web development and design. In this site, you can learn more about my projects and skills. 
          Thank you for visiting!
        </p>
        <div class="social-icons">
          <a href="https://github.com/hebaalqadasi" class="i1">
            <i class="bx bxl-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/heba-al-qadasi-74470132b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="i2">
            <i class="bx bxl-linkedin-square"></i>
          </a>
          <a href="https://www.facebook.com/heba.edreesalqadasi?mibextid=ZbWKwL" class="i3">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="https://www.instagram.com/heba_alqadasi2?igsh=NjBmd2ptc2l0MHp5" class="i4">
            <i class="bx bxl-instagram-alt"></i>
          </a>
        </div>
        <div class="btn-group">
          <a href="#" class="submit" id="b1">Hire</a>
          <a href="#contact" class="submit" id="b2">contact</a>
        </div>
      </div>
      
      <div class="img">
        <img src="6.jpg" alt="">
      </div>
    </section>

    <section class="about" id="about">
      <div class="about-img">
        <img src="6.jpg" alt="">
      </div>

      <div class="about-contant">
        <h2>About <span>Me</span></h2>
        <p>Hello! I am Heba Al-Qadasi, a student of Information Technology. I enjoy web development and design, and I have gained knowledge in programming languages and web technologies. 
          I am always looking to expand my skills through projects and collaboration. 
          Thank you for visiting my personal website! Feel free to reach out if you would like to know more about my work.
        </p>
        <a href="#" class="submit">Read More</a>
      </div>
    </section>

    <section class="Services" id="Services">
      <h2 class="heading">Services</h2>

      <div class="service-container">

        <div class="service-box">
          <div class="service-info">
            <i class='bx bx-code-alt'></i>
            <h4>Front-End Development</h4>
            <p class="ps">
              As a passionate Front-End Developer, I specialize in 
              creating visually appealing and user-friendly websites.
              My expertise lies in transforming design concepts into 
              interactive digital experiences that engage users.
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-info">
            <i class="bx bx-code"></i>
            <h4>Back-End Development</h4>
            <p class="ps">
              As a dedicated Back-End Developer, 
              I specialize in building robust and 
              efficient server-side applications that 
              power dynamic websites and applications. 
            </p>
          </div>
        </div>

        <div class="service-box">
          <div class="service-info">
            <i class='bx bx-code-curly'></i>
            <h4>Object-Oriented Programming</h4>
            <p class="ps">
              As an enthusiastic developer specializing in Object-Oriented Programming (OOP) using C#, 
              I focus on building scalable and maintainable software solutions. 
            </p>
          </div>
        </div>

      </div>
    </section>
    
    <section class="project" id="project">
    <div class="popup" id="popup">
          <h2 class="pop1">Dear User,</h2>
          <p class="pop2">We would like to inform you that the "Projects" section will be opened soon. Stay tuned for more updates!</p>
          <button class="btn">Ok</button>
        </div>
    </section>

    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me</span></h2>
      <form method="post" action="#" method="post">
        <div class="input-group">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="email" name="email" placeholder="Enter Your Email">
          </div>

          <div class="input-box">
            <input type="number" name="phone" placeholder="Enter Your Phone Number">
          </div>

        </div>

        <div class="input-group-2">
          <textarea name="massage" id="" placeholder="Enter Your Massage" cols="30" rows="5"></textarea>
          <input type="submit" name="send" value="Send" class="btn">
        </div>
        <?php
$con= new PDO("mysql:host=localhost;dbname=heba","root","");
if (isset($_POST['send'])) {
   
    $name=$_POST['name'];
    $massage=$_POST['massage'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];

    $login= $con->prepare("INSERT INTO user(name, massage, email, phone) VALUES(:name, :massage, :email, :phone)");
    $login->bindparam(':email',$email);
    $login->bindparam(':phone',$phone);
    $login->bindparam(':name',$name);
    $login->bindparam(':massage',$massage);
    $login->execute();
}
?>
      </form>
    </section>

    <footer class="footer">

      <div class="social-icons">
        <a href="https://github.com/hebaalqadasi" class="i1">
          <i class="bx bxl-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/heba-al-qadasi-74470132b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="i2">
          <i class="bx bxl-linkedin-square"></i>
        </a>
        <a href="https://www.facebook.com/heba.edreesalqadasi?mibextid=ZbWKwL" class="i3">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="https://www.instagram.com/heba_alqadasi2?igsh=NjBmd2ptc2l0MHp5" class="i4">
          <i class="bx bxl-instagram-alt"></i>
        </a>
      </div>

      <ul class="list">
        <li>
          <a href="#">FAQ</a>
        </li>
        <li>
          <a href="#Services">Services</a>
        </li>
        <li>
          <a href="#about">About Me</a>
        </li>
        <!-- <li>
          <a href="#project">Project</a>
        </li> -->
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>

      <p class="copyright">💜 Heba Al-Qadasi | All Right Reserved</p>
    </footer>

    <script src="script.js"></script>
  </body>
</html>