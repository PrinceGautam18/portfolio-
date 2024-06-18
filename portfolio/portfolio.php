
<?php

session_start();


?>






<!DOCTYPE html>
<html>
    <Head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-decive-width, initial-scale-1.0">
        <link rel="stylesheet" href="Style/homeStyle.css">
        <Title>portfolio</Title>

        <!-- animated div and scrolling -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <style >
     
        </style>
        <!--  swiper css -->
      
        <link rel="stylesheet" href="Style/swiper-bundle.min.css">

        <!-- FONT-AWASOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </Head>
    <body>
        <!-- HEADER DESIGN -->
        
        <header class="header">
            <a href="#" class="logo">Portfolio</a>
            <i class="fa-solid fa-bars" id="menu-icon"></i>
            <nav class="navbar">
                <a href="#" class="active">Home</a>
                <a href="about.php">About</a>
                <a href="#skill">Skill</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>

        <!-- HOME SECTION -->
        <section class="home" id="home">
            <div class="home-content">
                <h3>Hi, myself</h3>
                <h1 >Prince Gautam</h1>
                <h3>I'm a <span class="auto-type"> Software Designer</span></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsam, quos similique consequatur sapiente adipisci pariatur laudantium totam vero repudiandae tempore eligendi rerum est minima. Corporis quae ea reprehenderit laudantium?</p>
           <div class="social-media">
            <a href="https://www.facebook.com/princejaicop.jaicop.7/about"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/_myself_prince__/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://x.com/Prince_Gautam18"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://github.com/PrinceGautam18"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/prince-gautam-928a561b3"><i class="fa-brands fa-linkedin"></i></a>

           </div>
           <a href=".//PRINCE_Resume.pdf" Download class="cv-btn">Download CV</a>
          </div>
              
            <div class="home-img">
                <img src="./p.png" alt="home image">
            </div>
        </section>


        <!-- ABOUT-SECTION -->

        <section class="about" id="about" data-aos="fade-up">
            <div class="about-img" data-aos="fade-right">
                <img src="./prince-img.jpg" alt="">
            </div>
            <div class="about-content" data-aos="fade-left">
                <h1 class="heading">ABOUT <span>Me</span></h1>
                <h3>Frontend Developer</h3>
                <p>Lorem ipsum dolorsdfjhsfj sdsifihjdfd iuhsjdffjkj khdsdf fkdffjkdsdffh jssffjksksddff iuhdsfj insonfssdfkj  sdfklj ksdfdsdsd fksjk dsj d jhd nkk lthe sisnt my mane is the gaset of sthe aw sit amet consectetur adipisicing elit. Modi id impedit eveniet molestias quis quia sed asperiores mollitia! Voluptatibus rerum reprehenderit modi voluptate eveniet error quidem dolor minima. Dolores, porro.</p>
                <a href="#" class="read-more-btn">Read More</a>
          
            </div>
        </div>
        
        </section>

    <!-- PROJECTS SELECTION DESIGN -->
    <section class="projects" id="projects">
    <h2 class="heading" data-aos="fade-down">My <span>Projects</span></h2>
    
    <div class="project-container" data-aos="zoom-in">
        <div class="project-box">
            
          <div class="project-img">
            <img
              src=".//ludo.jpg" alt=""/>
            
          </div>

         <h1>Ludo Game</h1>
         <p>Android App</p>
         <a href="#" class="btn"> Github</a>
         
        </div>
        <div class="project-box">
            
           
            <div class="project-img">
                <img
                  src=".//calculator.jpg" alt=""/>
                
              </div>
  
            <h1>Calculators</h1>
            <p>Using css javascript</p>
            <a href="https://github.com/PrinceGautam18/calculator_css_html" class="btn"> Github</a>
            
          </div>
          <div class="project-box">
            
            <div class="project-img">
              <img
                src=".//chatapp.jpg" alt=""/>
              
            </div>
  
           <h1>ChatApp</h1>
           <p>Using css, javascript, websocket</p>
           <a href="https://github.com/PrinceGautam18/chat-app_using..websocket_node.js" class="btn"> Github</a>
           
          </div>
          <div class="project-box">
            
            <div class="project-img">
              <img
                src=".//musicplayer.jpg" alt=""/>
              
            </div>
  
           <h1>Music Player</h1>
           <p>Using css javascript</p>
           <a href="https://github.com/PrinceGautam18/musicPlayer-javascript" class="btn"> Github</a>
           
          </div>
          <div class="project-box">
            
            <div class="project-img">
              <img
                src=".//foodwbsite.jpg" alt=""/>
              
            </div>
  
           <h1>website</h1>
           <p>Using css, php , mysql</p>
           <a href="#" class="btn"> Github</a>
           
          </div>
       
       
       
       </div>
    </section>
    <!-- SKILL SECTION -->

<section class="skill" id="skill">
    <h2 class="heading" data-aos="fade-down">My<span>Skills</span></h2>
  <div class="skill-container" data-aos="zoom-in">
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//java.png" alt="">
       </div>
       <h1>Java</h1>
    </div>
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//php.png" alt="">
       </div>
       <h1>Php</h1>
    </div>

    <div class="skill-box">
        <div class="skill-img">
          <img src=".//c++.png" alt="">
       </div>
       <h1>C++</h1>
    </div>
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//js.png" alt="">
       </div>
       <h1>javaScript</h1>
    </div>
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//html.png" alt="">
       </div>
       <h1>HTML</h1>
    </div> <div class="skill-box">
        <div class="skill-img">
          <img src=".//css.png" alt="">
       </div>
       <h1>Css</h1>
    </div>
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//react.png" alt="">
       </div>
       <h1>React</h1>
    </div>
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//nodejs.png" alt="">
       </div>
       <h1>NodeJs</h1>
    </div>
    <div class="skill-box">
        <div class="skill-img">
          <img src=".//mysql.png" alt="">
       </div>
       <h1>MySql</h1>
    </div>
  </div>
    </section>
       <!-- contact SECTION -->

<section class="contact" id="contact" data-aos="flip-left">
    <form action="insert_message_data.php" method="post">
    <h2 class="heading">Contact <span>Me!</span></h2>
       <div class="contact-container">
       <div class="user-details">
       <div class="input-box">
        <input type="text" class="input-field" placeholder="First Name" name="firstName" required>
        <input type="text" class="input-field" placeholder="Last Name" name="lastName">
      
       </div>
    <div class="input-box">
         <input type="email"class="input-field"  placeholder="Email" name="email" required>
        <input type="text"class="input-field"  placeholder="Mobile No." name="mobile" required>
       
    </div>
    
    <textarea id="" class="sms-field" cols="30" rows="10" placeholder="Write your message....." name="message" required></textarea>
    <div class="submit-btn">

   <button class="submit" name="submit">Message Send</button>
  </div>
   </div>
   
  </div>
</form>

    </section>

        <!-- testimonial SECTION -->

     <section class="swiper mySwiper container">
       <h2 class="heading">Testi<span>monial</span> </h2>
        <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div class="testi-content">
               <div>
                  <img src=".//p.png" alt="">
                  <div class="name"><h1>Prince Gautam</h1></div>
                  <div class="job">software developer</div>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
       
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam suscipit modi. Sit fuga voluptates placeat asperiores nisi dolorem. Exercitationem ex excepturi porro numquam accusantium alias eligendi voluptas, assumenda inventore.</p>
                     <p><i class="fa-solid fa-quote-left quote"></i></p>
              </div>
  
            </div>
         </div>
         <div class="swiper-slide">
            <div class="testi-content">
               <div>
                  <img src=".//durgesh.jpg" alt="">
                  <div class="name"><h1>Durgesh Yadav</h1></div>
                  <div class="job">software developer</div>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
       
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam suscipit modi. Sit fuga voluptates placeat asperiores nisi dolorem. Exercitationem ex excepturi porro numquam accusantium alias eligendi voluptas, assumenda inventore.</p>
                     <p><i class="fa-solid fa-quote-left quote"></i></p>
              </div>
  
            </div>
         </div>
         <div class="swiper-slide">
            <div class="testi-content">
               <div>
                  <img src=".//vishal.jpg" alt="">
                  <div class="name"><h1>Vishal Gautam</h1></div>
                  <div class="job">Artist</div>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
       
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam suscipit modi. Sit fuga voluptates placeat asperiores nisi dolorem. Exercitationem ex excepturi porro numquam accusantium alias eligendi voluptas, assumenda inventore.</p>
                     <p><i class="fa-solid fa-quote-left quote"></i></p>
              </div>
  
            </div>
         </div>
         <div class="swiper-slide">
            <div class="testi-content">
               <div>
                  <img src=".//sachin.jpg" alt="">
                  <div class="name"><h1>Sachin Yadav</h1></div>
                  <div class="job">software developer</div>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
       
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam suscipit modi. Sit fuga voluptates placeat asperiores nisi dolorem. Exercitationem ex excepturi porro numquam accusantium alias eligendi voluptas, assumenda inventore.</p>
                     <p><i class="fa-solid fa-quote-left quote"></i></p>
              </div>
  
            </div>
         </div>
         <div class="swiper-slide">
            <div class="testi-content">
               <div>
                  <img src=".//rameshwar.jpg" alt="">
                  <div class="name"><h1>Rameshwar Vishwkarma</h1></div>
                  <div class="job">Artist</div>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
       
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam suscipit modi. Sit fuga voluptates placeat asperiores nisi dolorem. Exercitationem ex excepturi porro numquam accusantium alias eligendi voluptas, assumenda inventore.</p>
                     <p><i class="fa-solid fa-quote-left quote"></i></p>
              </div>
  
            </div>
         </div>
      </div> <!-- swiper wrapper end -->
  
 </div>
 <div class="swiper-button-next forword-arrow"></div>
          <div class="swiper-button-prev forword-arrow"></div>
          <div class="swiper-pagination pagination"></div>
</section>


       <!-- FOOTER DESIGN -->
      
      <footer class="footer-container">
         <div class="footer-box">
         <div>
           <div class="links">
            <a href="https://www.facebook.com/princejaicop.jaicop.7/about"><i class="fa-brands fa-facebook facebook"></i></a>
            <a href="https://www.instagram.com/_myself_prince__/"><i class="fa-brands fa-instagram instagram"></i></a>
            <a href="https://x.com/Prince_Gautam18"><i class="fa-brands fa-x-twitter twitter"></i></a>
            <a href="https://github.com/PrinceGautam18"><i class="fa-brands fa-github github"></i></a>
            <a href="https://www.linkedin.com/in/prince-gautam-928a561b3"><i class="fa-brands fa-linkedin linkedin"></i></a>
           </div>
            <div class="copyright">
                <p >Copyright 2024 Portfolio All rights reserved</p>
            </div>

           </div>
          
         </div>
        
      </footer>



       <!-- swiper js -->
     <script src="js/swiper-bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     <script>
         var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
     </script>
<!-- auto typing word js -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var type=new Typed(".auto-type",{
        strings:["Android Developer","Backend Developer", "Frontend Developer" ],
        typeSpeed:50,
        backSpeed:50,
        
    })
  
</script>

  <!-- animated div and scrolling  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(
    {
      offset:200,
      duration:1000,
    });
  </script>     
    </body>
</html>