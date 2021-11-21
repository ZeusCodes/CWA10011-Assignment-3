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
            src="./images/JSenhancements.gif"
            alt="Enhancements image"
          />
        </div>

        <hr />

        <div id="Timer-en" class="bounce-in">
          <h1 class="enhancements-used">Applied Timer</h1>
          <img
            class="enhancements-used-img"
            src="./images/countdown-img.gif"
            alt="Timer_img"
          />
          <p>
            A timer has been implemented in the apply form section using
            JavaScript. This has been done so as to prevent the user from making
            mistakes or from leaving the form half-filled for later.
          </p>

          <ul>
            <li>
              The <a href="./apply.php#timeLeft">Timer</a> has been applied on
              expiration of which the user will be redirected to the Home Page.
            </li>
            <li>
              After the countdown finishes the form will be reset. The user can
              also use the Reset Form Button to remove all existing information.
            </li>
            <li>
              The timer throws an alert when only 1 minute is left to complete
              and the countdown turns red.
            </li>
            <li>
              <dl>
                <dt>Implementation</dt>
                <dd>
                  To implement this I had to subtract the time of loading the
                  browser from the Current Time. For this the 'Date' class has
                  been used.
                  <br />
                  Once the timer runs out, implemented using if statements, the
                  user is redirected to the Home page and the form is reset.
                  Which means the user will now have to refill complete the
                  form.
                  <br />
                </dd>
              </dl>
            </li>
          </ul>
        </div>

        <div id="Slider-en" class="bounce-in">
          <h1 class="enhancements-used">Used Slider</h1>
          <img
            class="enhancements-used-img"
            src="./images/slider-img.gif"
            alt="Animation_logo"
          />
          <p>
            A Slider has been used in the Apply Page to indicate how much of the
            form has been filled. This way the user can be sure if there is a
            space that is left blank or not. This has been done with the help of
            JavaScript.
          </p>
          <ul>
            <li>
              A <a href="./apply.php#completionSlider">Slider </a> is used in
              the Form page to indicate % completion of the form. Although no
              styling has been used, the styling can be done using
              <a href="https://www.cssportal.com/style-input-range/"
                >this Page</a
              >.
            </li>
            <li>
              The Slider increases every-time a field in the form is filled. It
              has been programmed to remain full when the form is pre-filled
              using session storage.
            </li>
            <li>
              On reset the slider too resets to zero. One important aspect is
              that when the Reference Number was pre-filled the slider was
              filled accordingly.
            </li>
            <li>
              Additionally, the
              <a href="./apply.php#otherSkills">otherSkills </a> textarea can
              only be activated when the "OtherSkills" checkbox is ticked. On
              un-checking the checkbox the textarea value will disappear.
            </li>
            <li>
              <dl>
                <dt>Implementation</dt>
                <dd>
                  To implement the slider I had to change the value of the
                  slider every-time a field was filled in the form.
                  <br />
                  If the form is pre-filled the slider is adjusted accordingly
                  and on reset the value has been set to zero.
                  <br />
                </dd>
              </dl>
            </li>
          </ul>
        </div>

        <div id="Dropdown-en" class="bounce-in">
          <h1 class="enhancements-used">Used Dropdown</h1>
          <img
            class="enhancements-used-img"
            src="./images/dropdown-img.gif"
            alt="Animation_logo"
          />
          <p>
            A dropdown menu has been created as there are two enhancements
            pages. This makes the website more professional and improves the
            user experience.
          </p>
          <ul>
            <li>
              A
              <a href="#dropDownLink">Dropdown </a> is used in the navigation
              bar to navigate between the two enhancements page. This has been
              implemented with the help of
              <a href="https://www.w3schools.com/howto/howto_js_dropdown.asp"
                >this Page</a
              >.
            </li>
            <li>
              The user can easily navigate to any page with a wastage of space
              in the navigation bar and without any compromise in the styling.
            </li>
            <li>
              <dl>
                <dt>Implementation</dt>
                <dd>
                  To implement the dropdown I had to toggle display-none and
                  normal.
                  <br />
                  When anywhere else on the screen is click the dropdown
                  disappears.
                  <br />
                </dd>
              </dl>
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