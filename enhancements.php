<?php
    include("header2.inc")
    ?>

  <body>
  <?php
    include("menu.php")
    ?>
    <?php
    menu(5);
    ?>

    <!-- Background -->
    <div id="Clouds-enhancement" class="back">
      <div class="Cloud Foreground back"></div>
      <div class="Cloud Background back"></div>
      <div class="Cloud Foreground back"></div>
      <div class="Cloud Background back"></div>
      <div class="Cloud Foreground back"></div>
      <div class="Cloud Background back"></div>
      <div class="Cloud Background back"></div>
      <div class="Cloud Foreground back"></div>
      <div class="Cloud Background back"></div>
      <div class="Cloud Background back"></div>
    </div>
    <!-- End of Background -->
    <div>
      <section id="Enhancements">
        <div class="jobs-header bounce-in">
          <h2>Enhancements Used</h2>
          <p>
            Efforts have been made to going beyond the classwork and <br />
            learn something beyond our scope of knowledge. The used enhancements
            <br />
            have been listed below and link to the pertaining enhancements has
            been given.
          </p>
        </div>
        <div class="jobs-img">
          <img
            class="header-img"
            src="./images/enhancements.gif"
            alt="Enhancements image"
          />
        </div>

        <hr />

        <div id="bootstrap" class="bounce-in">
          <h1 class="enhancements-used">Used Bootstrap</h1>
          <img
            class="bootstrap-img"
            src="./images/Bootstrap_logo.png"
            alt="Bootstrap_logo"
          />
          <p>
            Bootstrap has been used to improve the User Experience by adding
            Carousals, Cards and Navigation Bar. The
            <a href="https://getbootstrap.com/">Bootstrap Library</a> has been
            used to implement such features.
          </p>
          <ul>
            <li>
              The <a href="#navigation-bar">Navigation Bar</a> has been used to
              navigate throughout the website.
            </li>
            <li>
              The <a href="./index.php#leaders">Carousals</a> have been used to
              display the images of the company directors and heads.
            </li>
            <li>
              The <a href="./jobs.php#job-positions">Cards</a> have been used
              to display the Job Positions Available to Apply for.
            </li>
            <li>
              Last but not least,
              <a href="./jobs.php#job-positions">Collapse</a> functionality has
              been used in the "jobs" page so as to decrease the cluster of
              un-necessary information for everyone. Please click on the
              particular Card to see the Job description related to it.
            </li>
          </ul>
        </div>

        <div id="animation" class="bounce-in">
          <h1 class="enhancements-used">Used Animations</h1>
          <img
            class="enhancements-used-img"
            src="./images/animation_logo.gif"
            alt="Animation_logo"
          />
          <p>
            Animations have been implemented to make the User Experience more
            exiting and engaging. These are declared in the styles.css file.
            Please try to refresh the pages to have a look at the animations.
          </p>
          <ul>
            <li>
              Oracle being a leading company in Cloud field a special reference
              has been given to that using the
              <a href="#Clouds-enhancement">Moving Clouds </a> animation. This
              has been implemented from
              <a href="https://codepen.io/shshaw/full/DxJka/">this Page</a>.
            </li>
            <li>
              The
              <a href="https://codepen.io/codeams/pen/IuGxn">Bounce in</a>
              animation has been used in the
              <a href="./index.php#about-us">Table</a> and
              <a href="./jobs.php#job-positions">Cards</a>.
            </li>
            <li>
              The <a href="#navigation-bar">Slide </a> animation have been used
              to give a dynamic effect of the navigation-bar brand.
            </li>
            <li>
              The
              <a href="https://codepen.io/ma_suwa/pen/eYdZVML">Animate-drop</a>
              animation has been used to highlight
              <a href="./jobs.php#Job-Description">Apply Now</a> .
            </li>
            <li>
              The
              <a href="https://codepen.io/AbubakerSaeed/pen/abzWqPb"
                >Block Revealing Effect
              </a>
              has been used in the jobs page.
            </li>
          </ul>
        </div>
      </section>
    </div>
    <?php
    include("footer.inc")
    ?>
    
  </body>
</html>
