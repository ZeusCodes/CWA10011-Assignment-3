<?php
    include("header.inc")
    ?>

  <body>
  <?php
    include("menu.php")
    ?>
    <?php
    menu(4);
    ?>

    <section id="About-Form">
      <div class="container bounce-in">
        <div class="row">
          <div class="col-lg-6">
            <h1>Education</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <dl>
              <dt>Course</dt>
              <dd>Bachelor of Computer Science</dd>
              <dt>Tutor</dt>
              <dd>Guangming Cui</dd>
              <dt>Lecturer</dt>
              <dd>Dr. Xuehong (Grace) Tao</dd>
            </dl>
          </div>
          <div class="col-lg-6">
            <img
              src="./images/logo.png"
              alt="Swinburne-img"
              class="swinburne-img"
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
            <figure>
              <img
                src="./images/pallab-paul.jpeg"
                alt="Pallab-img"
                class="profile-img"
              />
            </figure>
          </div>
          <div class="col-lg-6">
            <dl>
              <dt>Name</dt>
              <dd>Pallab Paul</dd>
              <dt>Pronouns</dt>
              <dd>He/Him</dd>
              <dt>Student Number</dt>
              <dd>103484306</dd>
              <dt>Mail</dt>
              <dd>
                <a href="mailto:103484306@student.swin.edu.au">Student Mail</a>
              </dd>
              <dt>More About Me</dt>
              <dd><a href="https://www.paulpallab.info/">Personal Site</a></dd>
            </dl>
          </div>
        </div>
      </div>
    </section>

    <section id="timetable">
      <h1>Time Table</h1>
      <table id="time-table">
        <thead>
          <tr>
            <th>Time Slots</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>9:00</td>
            <td></td>
            <td class="ITP">
              COS10009 <br />
              Live Online
            </td>
            <td></td>
            <td rowspan="2" class="CLE">
              COS10003 <br />
              Live Online
            </td>
            <td></td>
          </tr>
          <tr>
            <td>10:00</td>
            <td class="TNE">
              TNE10005 <br />
              Live Online
            </td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>11:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="ITP">COS10009 <br />Live Online</td>
          </tr>
          <tr>
            <td>12:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="2" class="CLE">COS10003 <br />Tutorial</td>
            <td rowspan="2" class="ITP">COS10009 <br />Tutorial</td>
          </tr>
          <tr>
            <td>13:00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>14:00</td>
            <td class="CWA">COS10011 <br />Live Online</td>
            <td rowspan="2" class="CWA">COS10011 <br />Tutorial</td>
            <td></td>
            <td class="ITP">COS10009 <br />Workshop</td>
            <td></td>
          </tr>
          <tr>
            <td>15:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>16:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>17:00</td>
            <td rowspan="3" class="TNE">TNE10005 <br />Tutorial</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>18:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>19:00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </section>
    <?php
    include("footer.inc")
    ?>
  </body>
</html>
