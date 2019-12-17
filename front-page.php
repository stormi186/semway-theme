<?php get_header();?>

<div id="hero">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php bloginfo('template_directory');?>/videos/city.mp4" type="video/mp4">
  </video>
  <div class="container headline-container">
    <div class="headline">
      <h1>Why hire me among other candidates?</h1>
    </div>
  </div>
</div>

<div id="about-me" aria-label="About me">
  <div id="about-me-text">
    <h1>About me</h1>
    <h4>I’m a software engineer with a keen interest in front-end and 
      back-end development and I am constantly learning new technologies and 
      at the same time polishing the skills I have already acquired. 
      In 2019 I have earned two certifications in Full Stack Development, 
      one from University of Helsinki and other from freeCodeCamp.</h4>
    <a href="mailto:jasna.misimovic@gmail.com">
      <button type="button" class="btn" aria-label="Hire me">Hire me</button></a>
  </div>
  <div id="about-me-picture">
    <img src="<?php bloginfo('template_directory');?>/images/ma.png" alt="laptop">
  </div>
</div>
<div id="my-skills" aria-label="About me">
  <h1>My skills</h1>
  <h4>Below is a quick overview of my main technical skill sets and technologies I use.</h4>
  <div class="my-skills-wrapper">
    <div class="technology one">
      <div class="icon"><i class="fa fa-code fa-3x"></i></div>
      <h3>JavaScript</h3>
    </div>
    <div class="technology two">
      <div class="icon"><i class="fa fa-code fa-3x"></i></div>
      <h3>React.js</h3>
    </div>
    <div class="technology three">
      <div class="icon"><i class="fa fa-code fa-3x"></i></div>
      <h3>Node.js</h3>
    </div>
    <div class="technology four">
      <div class="icon"><i class="fa fa-html5 fa-3x"></i></div>
      <h3>HTML5</h3>
    </div>
    <div class="technology five">
      <div class="icon"><i class="fa fa-css3 fa-3x"></i></div>
      <h3>CSS3</h3>
    </div>
    <div class="technology six">
      <div class="icon"><i class="fa fa-git fa-3x"></i></div>
      <h3>Git</h3>
    </div>
  </div>
</div>


<div id="where-are-we" aria-label="Where are we">
  <p>This interview is taking place at Rosenkrantz’ gate 16, 0160 Oslo right now.</p>
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="1400" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Rosenkrantz%E2%80%99%20gate%2016%2C%200160%20Oslo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
  </div>
</div>

<div id="my-projects" aria-label="My projects">
  <h1>My projects</h1>
  <div class="projects">
    <div class="project">
      <a href="https://codepen.io/stormi186/full/OeqNMP">
      <img src="<?php bloginfo('template_directory');?>/images/calculator.jpg" class="img-fluid" alt="javascript calculator"></a>
      <h4>JAVASCRIPT CALCULATOR</h4>
      <hr>
      <h5>Calculator made with HTML, CSS, JavaScript and React.js.</h5>
    </div>
    <div class="project">
      <a href="https://codepen.io/stormi186/full/NZZxJE">
      <img src="<?php bloginfo('template_directory');?>/images/pomodoro.jpg" class="img-fluid" alt="pomodoro clock"></a>
      <h4>POMODORO CLOCK</h4>
      <hr>
      <h5>Pomodoro clock made with HTML, CSS, JavaScript and React.js.</h5>
    </div>                    
    <div class="project">
      <a href="http://wings-of-hope.ba/?lang=en">
      <img src="<?php bloginfo('template_directory');?>/images/wings.jpg" class="img-fluid" alt="wings of hope website"></a>
      <h4>WINGS OF HOPE WEBSITE</h4>
      <hr>
      <h5>Website made using HTML, CSS and WordPress.</h5>
    </div>
  </div>
</div>

<div id="testimonials" aria-label="Testimonials">
  <h1>Testimonials</h1>
  <div class="testimonials-wrapper">
    <div class="testimony">
      <i class="fa fa-quote-right fa-3x" aria-hidden="true"></i>
      <blockquote>Jasna loved her job, and she treated each task with strong enthusiasm and great effort. 
        She takes on new challenges with a positive attitude and always goes above and beyond.</blockquote>
      <img src="<?php bloginfo('template_directory');?>/images/aco.png" alt="Aleksandar Obradovic">
      <h4>ALEKSANDAR OBRADOVIC</h4>
      <h5>Head Of Department For Media And Analytics</h5>
    </div>
    <div class="testimony">
      <i class="fa fa-quote-right fa-3x" aria-hidden="true"></i>
      <blockquote>She was very patient and enthusiastic. 
        Jasna is one of the most driven and dedicated individuals I have ever met.</blockquote>
      <img src="<?php bloginfo('template_directory');?>/images/maja.jpg" alt="Marija Saric">
      <h4>MARIJA SARIC</h4>
      h5>Director Of Foundation Of Wings Of Hope</h5>
    </div>                  
    <div class="testimony">
      <i class="fa fa-quote-right fa-3x" aria-hidden="true"></i>
      <blockquote>I found her to be consistently responsible and honest, 
        working with dedication as a student. She had a wonderful rapport with 
        both professors and student colleagues.</blockquote>
      <img src="<?php bloginfo('template_directory');?>/images/lejla.jpeg" alt="Lejla Banjanovic">
      <h4>LEJLA BANJANOVIC MEHMEDOVIC, PHD</h4>
      <h5>Associate Professor At University Of Tuzla</h5>
    </div>
  </div>
</div>

<?php get_footer();?>