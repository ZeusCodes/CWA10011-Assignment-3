<?php
    include("header.inc")
    ?>

  <body>
    <?php
    include("menu.php")
    ?>
    <?php
    menu(3);
    ?>

    <section id="Application-Form">
      <input
        id="completionSlider"
        type="range"
        min="1"
        max="111"
        step="10"
        value="0"
        disabled
      />
      <!-- action="https://mercury.swin.edu.au/it000000/formtest.php" -->
      <form 
        method="POST"
        action="processEOI.php"
        id="apply-form"
        novalidate="novalidate"
        >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1>Contact Information</h1>
            </div>
            <div class="col-lg-4">
              <h4 id="timeLeft">Submit In:</h4>
              <img id="timer" src="./images/clockImg.gif" alt="clockImg" />
              <h4 id="time">.</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label for="RefNum">Job Reference Number <span>*</span></label>
              <br />
              <input
                type="text"
                name="Job-Reference-Number"
                id="RefNum"
                pattern="[a-zA-z0-9]{5}"
                placeholder="Reference Number(5 Digits)"
                size="25"
                required
              />
              <br />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label for="FName">First Name <span>*</span></label> <br />
              <input
                type="text"
                name="First-Name"
                id="FName"
                pattern="[A-Za-z]{1,20}"
                placeholder="First Name"
                size="25"
                required
              />
            </div>
            <div class="col-lg-6">
              <label for="LName">Last Name <span>*</span></label> <br />
              <input
                type="text"
                name="Last-Name"
                id="LName"
                pattern="[A-Za-z]{1,20}"
                placeholder="Last Name"
                size="25"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label for="Email">Email-id<span>*</span></label> <br />
              <input
                type="email"
                name="Email-id"
                id="Email"
                placeholder="Email-id"
                required
              />
            </div>
            <div class="col-lg-6">
              <label for="PhNum">Phone Number<span>*</span></label> <br />
              <input
                type="text"
                name="PhNum"
                id="PhNum"
                pattern="[0-9 ]{8,12}"
                placeholder="PhNum"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h1>Personal Information</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label for="DOB">Date of Birth <span>*</span></label
              ><br />
              <input type="date" name="DOB" id="DOB" required />
              <span id="DOB-err"></span>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <legend>Gender<span>*</span></legend>
                <input
                  type="radio"
                  id="Male"
                  name="Gender"
                  value="Male"
                  required
                />Male
                <input
                  type="radio"
                  id="Female"
                  name="Gender"
                  value="Female"
                />Female
                <input
                  type="radio"
                  id="Indeterminate/Intersex/Unspecified"
                  name="Gender"
                  value="Indeterminate/Intersex/Unspecified"
                />Indeterminate/Intersex/Unspecified
              </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h1>Address</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label for="Address">Street Address<span>*</span></label
              ><br />
              <input
                type="text"
                name="Street-Address"
                id="Address"
                pattern="{3,40}"
                placeholder="Street Address"
                required
              />
            </div>
            <div class="col-lg-6">
              <label for="Town">Town/Suburb<span>*</span></label> <br />
              <input
                type="text"
                name="Town"
                id="Town"
                pattern="{3,40}"
                placeholder="Town/Suburb"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label for="State">State<span>*</span></label
              ><br />
              <select name="State" id="State" required>
                <option value="">Select</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
              </select>
            </div>
            <div class="col-lg-6">
              <label for="Postcode">Postcode<span>*</span></label
              ><br />
              <input
                type="text"
                name="Postcode"
                id="Postcode"
                pattern="[0-9]{4}"
                placeholder="Postcode"
                required
              />
              <span id="Postcode-err"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h1>Requirements <span>*</span></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6" id="SkillsChange">
              <label>Skills<span>*</span></label
              ><br />
              <input type="checkbox" name="skills[]" id="none" checked />None
              <br />
              <input
                type="checkbox"
                name="Skills[]"
                id="Java"
                value="Java"
              />Java <br />
              <input
                type="checkbox"
                name="Skills[]"
                id="Networking"
                value="Networking"
              />Networking <br />
              <input
                type="checkbox"
                name="Skills[]"
                id="DataStorage"
                value="Data storage fundamentals"
              />Data storage fundamentals <br />
              <input
                type="checkbox"
                name="Skills[]"
                id="Security"
                value=" Security foundations"
              />Security foundations <br />
              <input
                type="checkbox"
                name="Skills[]"
                id="Cloud"
                value="Cloud-specific patterns and technologies"
              />Cloud-specific patterns and technologies <br />
              <input
                type="checkbox"
                name="Skills[]"
                id="Communication"
                value="Communication"
              />Communication <br />
              <input
                type="checkbox"
                value="OtherSkills"
                id="OtherSkills"
                name="oth"
              />Others <br />
              <label for="otherSkills">Other Skills</label><br />
              <span id="Skills-err"></span>
              <textarea
                name="otherSkills"
                id="otherSkills"
                cols="30"
                rows="10"
              ></textarea>
              <!-- readonly -->
            </div>
            <div class="col-lg-6">
              <label for="Resume">Resume/CV <span>*</span></label> <br />
              <input type="file" name="Resume" id="Resume" />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <span id="Form-err"></span><br />
              <button type="submit" class="btn btn-primary">Apply</button>
            </div>
          </div>
        </div>
      </form>
      <button id="resetForm" value="Reset" class="btn btn-danger">
        Reset Form
      </button>
    </section>

    <?php
    include("footer.inc")
    ?>

    <script src="./scripts/apply.js"></script>
    
  </body>
</html>
