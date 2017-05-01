
<?php
//set my title
$title = 'PHP HW';
//set header
$header = '';
/*
 * include start structure
 */
include('Structure/Header.php');
?>


<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="../Assets/Max.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="color:white" >Max Walters</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Full-Stack Web Developer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Ft-Lauderdale, FL</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>max@devmw.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>954-613-1726</p>
          <hr>


          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
           <p>Microsoft Office</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%">100%</div>
          </div>
                <p>HTML & CSS</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%">100%</div>
          </div>
          <p>JavaScript</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>PHP</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>MySql</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
            <p>WordPress</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
        
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
      
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>INTERN • BROWARD COLLEGE </h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>JAN 2017 - MAY 2017</h6>
          <p>I was project manager of a great team assigned to renovate the computer science’s department website. We used WordPress and an array of other tools and plugins, including but not limited to GitHub, Migrate Db, Doodle, and Trello.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>PAPA JOHN'S PIZZA</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>AUG 2014 - JAN 2016</h6>
          <p>I was responsible for preparation, order entry, and delivery.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>TECHNICAL SUPPORT • TELEPERFORMANCE (ATT)</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>DEC 2014 - SEP 2015</h6>
          <p>I provided customer service for any calls that the previous customer service agents couldn't provide. We resolved anything from making a phone bill payment to a complete diagnostic, repair and replacement of the mobiles devices carried by ATT. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card-2 w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>BROWARD COLLEGE • COMPUTER PROGRAMMING and ANALYSIS.</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>JAN 2016 - MAY 2017</h6>
          <p>• A.S. <br>
          	 • Honor Roll.</p>
          <hr>
        </div>
        
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>



<?php
/*
 * include end structure
 */
include('Structure/Footer.php');


?>