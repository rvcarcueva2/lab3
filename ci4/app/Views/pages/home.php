<!DOCTYPE html>
<html lang="en">

<body>
    <img src="background1.png" style="background-size: cover; position: absolute; width: 100%; height: 100vh;">
    <img src="logo.png" alt="Logo" width="100px" style="position: relative; float: left; margin-left: 50px;" >
<div class="sidebar">
  <ul>
  <div class="Menulist">
      <li style="--bg: #C40BD5;" class="active">
          <a href="#section1" >
              <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
              <div class="text">Home</div>
          </a>
      </li>
      <li style="--bg: #C40BD5;" class="active">
          <a href="#section2" >
              <div class="icon"><ion-icon name="person-outline"></ion-icon></div>
              <div class="text">About Me</div>
          </a>
      </li>
      <li style="--bg: #C40BD5;" class="active">
          <a href="#section3">
              <div class="icon"><ion-icon name="call-outline"></ion-icon> </div>
              <div class="text">Contacts</div>
          </a>
      
    </li>
      
  </div>
  
  
  
  
  </ul>
  
  </div>
  
  </div>
<!-- Home Page -->
<div id="section1" class="container-fluid bg-dark " style="height: 100vh; padding: 20px">
    <img src="logo.png" alt="Logo" width="80px" >
    <img id="picture" src="picture1.png" alt="Profile" width="300px">
    <div class="container" style="width: 130vh; height: 70vh; position: absolute; left:400px; bottom: 7%;">
        <h1>I'm Cel</h1>
        <h2>UI/UX Desinger</h2>
        <p style="color: rgb(167, 165, 165);">I'm a student who aspires to be a freelancer in the field of UI/UX Design. I focus on</p>
        <p style="color: rgb(167, 165, 165);">crafting clean and user-friendly mobile app mockup designs. If you're a small</p>
        <p style="color: rgb(167, 165, 165);">business or an organization that seeks an audience, we can work things out.</p>
        <ul>
            <li>Uses <strong>Figma</strong> and <strong>Proto.io</strong> application mockups</li>
            <li>Uses <strong>diagrams.net</strong> for making flowcharts</li>
            <li>Uses <strong>Miro</strong> for task tracking</li>
        </ul>
        <button class="btn" onclick="scrollToSection('section2')">MORE ABOUT ME</button>

    </div>
  
  
</div>


<!-- Personal Infos -->
<div id="section2" class="container-fluid" style="height: 100vh; padding: 20px;">
    <h1>Personal Infos</h1>
  <pre style="position: absolute; line-height: 0; overflow: hidden; margin: 60px;">
      
       <p style="color: rgb(167, 165, 165);">First Name: <span style="color: white;"><strong> Reycel John Emmanuel</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Last Name: <span style="color: white;"><strong> Carcueva</strong></span></p>
       <p style="color: rgb(167, 165, 165);">Freelance: <span style="color: greenyellow;"><strong> Available</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Location: <span style="color: white;"><strong>Taguig, Metro Manila</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Nationality: <span style="color: white;"><strong>Filipino</strong></span></p>
       <p style="color: rgb(167, 165, 165)">Language: <span style="color: white;"><strong>English, Filipino</strong></span></p>
    </p>
  </pre>
    <div id="video-container">
        <video id="background-video" autoplay muted loop><source src="video1.mp4" type="video/mp4">
    </div>
    
  

  <h2 style="position: absolute; top: 115%; left: 59%;">My Hobbies</h2>
  <div class="image-container">
    <img class="image-top"  src="picture2.png" alt="Image 1" >
    <img class="image-top-left" src="picture3.png" alt="Image 2">
    <img class="image-bottom" src="picture4.png" alt="Image 3">
    <img class="image-bottom-left"  src="picture5.png"  alt="Image 4" >
  </div>

    
  </div>
  
    
  </div>    

  
<!-- Social Links -->
  <div id="section3" class="container-fluid" style="height: 70vh; padding: 20px">
    <h1>Follow me </h1>
    <div class="mycontainer">
        
        <div style="margin: 5px;" >
            <img class="image-facebook" src="picture6.png" alt="Facebook" width="300px" onclick="openLink1()">
         
          </div>
          
          <div style="margin: 5px;" >
            <img class="image-instagram"src="picture7.png" alt="Facebook" width="300px" onclick="openLink2()" >
           
          </div>
          
          <div style=" margin: 5px;" >
            <img class="image-github" src="picture8.png" alt="Facebook" width="300px" onclick="openLink3()">
            
          </div>
        
        </div>
    </div>
  
</div>















<script>
   
  function scrollToSection(sectionId) {
      var section = document.getElementById(sectionId);
      if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
      }
  }


  document.querySelector('a[href="#section1"]').addEventListener('click', function() {
      scrollToSection('section1');
  });

  document.querySelector('a[href="#section2"]').addEventListener('click', function() {
      scrollToSection('section2');
  });
  document.querySelector('a[href="#section3"]').addEventListener('click', function() {
      scrollToSection('section3');
  });

  function openLink1() {
    window.open('https://www.facebook.com/reyceel16/', '_blank');
  }
  function openLink2() {
    window.open('https://www.instagram.com/reyceelll/', '_blank');
  }
  function openLink3() {
    window.open('https://github.com/rvcarcueva2/', '_blank');
  }


  
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
