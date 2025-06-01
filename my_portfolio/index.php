
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
   <div class="div-header">
    <div class="div-nav">
      <nav>
         <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#fav">My Favorite</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#hob">My Hobbies</a></li>
            <li><a href="#contact">Contact Me</a></li>
         </ul>
    </div>
 </div>
<?php 
   $a = "Jobert";
   $b = "Cachuela";
   $c = "Adrino";
   $name = $a . " " . $b . " " . $c;
   $course = "Bachelor of Science in Computer Science";
   $usn = 23002970110;
   $addrs = "Tibagan,Tarlac City,Tarlac";
   $birth = "Tarlac City,Tarlac";

?>

<div class="home" id="home">
   <div class="about-pic">
      <img src="img/about-me.jpg">
      <h2><?php echo $name ?></h2>
   </div>
   <div class="about-me">
      
        <p>"Hi, my name is Jobert, and I'm a student at AMA Computer College Tarlac
         interested in the field of computer science,I am always energetic 
         and eager to learn new things"</p>
        <ul><h2>COURSE</h2>
         <li><?php echo $course ?> </li>
         <h2>STUDENTS ID</h2>
         <li><?php echo $usn ?> </li>
         <h2>ADDRESS</h2>
         <li><?php echo $addrs ?> </li>
         <h2>PLACE OF BIRTH</h2>
         <li><?php echo $birth ?> </li></ul>  
   </div>
</div>
<div class="fav" id="fav">
   <div><h1>MY FAVORITES: </h1>
      <div class="fav-container">
         <div class="fav-container1">
            <div class="fav-sport">SPORTS
               <h2>BASKETBALL
               <img src="img/basketball.jpg">
               </h2>
            </div>
            <div class="fav-game">GAMES
               <h2>DOTA 2
               <img src="img/dota2.webp">
               </h2>
            </div>
         </div>
         <div class="fav-container1">
            <div class="fav-food">FOODS
               <h2>MENUDO
               <img src="img/Menudo-recipe.jpg">
               </h2>
            </div>
            <div class="fav-pet">PET
               <h2>CAT
               <img src="img/cat.jpg">
               </h2>
               
            </div>
         </div>
      </div>
   </div>
</div>
<!--about---->
<div id="about">
   <div class="container-about">
      <div class="row">
         <div class="about-col-1">
         
         </div>
         <div class="about-colo-2">
            <h1 class="sub-title">About Me</h1>
            <p>
               Academically I am a student who likes to be mentally challenged and I enjoy both hands on projects as well as conventional learning. </p>

            <div class="tab-titles">
               <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
               <p class="tab-links" onclick="opentab('experience')">Experience</p>
               <p class="tab-links" onclick="opentab('education')">Educational</p>
            </div>
            <div class="tab-contents active-tab" id="skills">
               <ul>
                  <li><span>UI?UX</span><br>Designing Web/App interface</li>
                  <li><span>Web App Development</span><br>PHP/JAVASCRIPT/JAVA/C++/</li>
               </ul>
            </div>
            <div class="tab-contents" id="experience">
               <ul>
                  <li><span>Creating Portfolio</span><br>Designing Web/App interface</li>
                  <li><span>Creating Database</span><br>Web App Development</li>
               </ul>
            </div>
            <div class="tab-contents" id="education">
               <ul>
                  <li><span>PRIMARY</span><br>Tibagan,Elementary School</li>
                  <li><span>SECONDARY</span><br>Tibag High School</li>
                  <li><span>TERTIARY</span><br>AMAES</li>

               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

   <div class="hob" id="hob">
      <h1>MY HOBBIES:</h1>
      <div class="cntnr-hob">
         <div class="anime"><h2>WATCHING ANIME</h2>
            <p>Watching anime shows is a lot of fun.
               I know a lot of those who love anime are
               enjoying every episode that they watch. 
               Most of these anime episodes have a lot of humor.
                Anime characters can easily make fun of themselves
                since they can distort their faces well and also
                they can do most anything thanks to the wonderful
               and great hands of those behind their creation.
                When I am sad and alone, I just watch some anime 
                episodes and in time I just found my found enjoying 
                the moment and laughing in my room.
            </p> 
         </div>
         <div class="anime"><h2>PLAYING ONLINE GAMES</h2>
             <p>Games are an important part of our life. They teach us many valuable lessons, improve our cognitive functioning and offer several other benefits. Online gaming encourages social interaction as we connect with online friends and players. Competitive gaming, or esports, has become a major industry. Professional gamers and teams compete in tournaments watched by millions, creating a sense of community among fans.

               It might sound cliche but gaming also serves as a powerful educational tool. They enhance learning through engagement and interactivity, which can make difficult subjects more accessible. Some ‘Minecraft’ are used in classrooms to teach subjects such as mathematics, science, and engineering. They encourage creativity and logical thinking.
            </p>
         </div>
         <div class="anime"><h2>PRACTICING CODING</h2>
          <p>In the ever-evolving world of computer science, software engineering, and programming, staying on top of your game is not just a choice; it’s a necessity. Practicing coding challenges is one of the most effective ways to continuously improve your coding skills, problem-solving abilities, and overall proficiency.

            Whether you are a student, a job seeker, an experienced developer, or just a coding enthusiast, there are numerous reasons why investing time in coding challenges is not just a good idea but a pivotal step in your journey toward excellence. This comprehensive guide will explore why practicing coding challenges is essential, its benefits, and how to make the most of this powerful learning tool.
          </p>
         </div>

      </div>
   </div>
   
<div class="form-container" id="contact"><h1 class="contact">CONTACT ME!</h1>

   <form method="post" name="submit-to-google-sheet">
      <div class="input-row">
         <label>Name<em>*</em></label>
         <input type="text" name="userName" required>
      </div>
      <div class="input-row">
         <label>Email<em>*</em></label>
         <input type="email" name="userEmail" required>
      </div>
      <div class="input-row">
         <label>Phone<em>*</em></label>
         <input type="tell" name="userPhone" required>
      </div>
      <div class="input-row">
         <label>Message<em>*</em></label>
         <textarea name="userMessage" required></textarea>
      </div>
      <div class="input-row">
         <input type="submit" value="Submit">
      
         
         
       <span id="msg"></span>  
      </div>
   </form>
   
   <i class="icon"><a href="facebook.com" target="_blank"><img src="img/fb.avif"></a></i>
   <i class="icon"><a href="instagram.com" target="_blank"><img src="img/instagram.webp"></a></i>
   <i class="icon"><a href="twitter.com" target="_blank"><img src="img/twit.png"></a></i>
   <i class="icon"><a href="github.com" target="_blank"><img src="img/git.png"></a></i>
</div>

<div class="copyright">
   <p>Copyright © Jobert. </p>

   <script>
      var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link")
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab")
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}




  const scriptURL = 'https://script.google.com/macros/s/AKfycbyCsz6tA-69cGjdn26nUDCALg4zXD71faPOLfFW0Yo4tygwdJh_PfBIx3HPUzktYKY/exec'
  const form = document.forms['submit-to-google-sheet']
   const msg = document.getElementById("msg")
  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
         msg.innerHTML = "Message sent successfully"
         setTimeout(function(){
            msg.innerHTML = " "
         },5000)
         form.reset()
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>

</body>
</html>