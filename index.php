<!DOCTYPE html>
<html>
<head>
  <title>RIBROD CAPITAL</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <script src="scripts.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/01424de658.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="layout">
    <header class="header">
      <div class="container-icon">
        <img class="img" src="img/logo.jpeg" alt="">
      </div>
      <div class="menu">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="menu-icon"><img src="img/burguer.svg" alt=""></i>
        </label>
            <ul id="menu">
              <li id="check-list"><a onclick="myFunction()" href="#section-presentation">WHO WE ARE</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-look-for">WHAT WE LOOK FOR</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-what-we-offer">WHAT WE OFFER</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-our-team">OUR TEAM</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-contact">CONTACT</a></li>
            </ul>
      </div>
    </header>
    <div class="iconos-lenguage">
        <a onclick="cambiaridiomaenglish()"> <img class="icon-lenguage-1" src="img/reino-unido.png" alt=""></a>
        <a onclick="cambiaridiomaspanish()" > <img class="icon-lenguage-2" src="img/spain.png" alt=""></a>
      </div>
      <section id="section-presentation">
        <div class="whoweare">
          <div>
            <div>
              <h3>RIBROD CAPITAL is private investment and advisory group specialised in international M&A.</h3>
              <h3>Our mission is to build the future by connecting people.</h3>
              <h3>We seek to value invest in small and medium sized companies that operate in overlooked industries.</h3>
              <h3>We also advise and broker M&A operations for ourclients by connecting them to our international network in all markets.</h3>
            </div>
          </div>
          <div class="container-img-section-presentation">
            <img class="img-whoweare" src="img/whoweare.jpg" alt="">
          </div>
        </div>
      </section>

      <section id="section-look-for">
        <div>
          <div class="container-title">
            <h1>OUR INVESTMENT STRATEGY</h1>
          </div>
          <h3>Our target companies generally meet the following criteria:</h3>
          <div class=look-for-ideas>
            <div class="look-for-ideas-1">
              <div class="look-for-ideas-1-2">
                <h3>Companies making 500k to 5M in anual revenue</h3>
                <br>
              </div>
              <div class="look-for-ideas-1-2">
                <h3>30% profit margins</h3>
                <br>
              </div>
              <div class="look-for-ideas-1-2">
                  <h3>Non digitalised or non internationalised</h3> 
                </div>
            </div>
              <div class="look-for-ideas-1">
                <div class="look-for-ideas-1-2">
                  <h3>In a scalable market</h3>
                </div >
                <div class="look-for-ideas-1-2">
                  <h3>In business at least five years, with a minimum of three years of prior financial statements</h3>
                </div>
                <div class="look-for-ideas-1-2">
                  <h3>Principal operations in Spain, we will selectively consider transactions outside of Spain</h3>
                </div>
            </div>
          </div>
         
        </div>
      </section>





      <section id="section-what-we-offer">
        <h1>WHAT WE OFFER</h1>
        <h3>Our team has the investment experience to structure deals to meet the varied needs of management teams and business owners</h3>
        <div class="container-section-what-we-offer">
          <div class="what-we-offer-background1">
            <h3>Flexible acquisition, partial or full buyout</h3>
          </div>
          <div class="what-we-offer-background2">
            <h3>Debt consolidation</h3>
          </div>
          <div class="what-we-offer-background3">
              <h3>Recapitalisation</h3>
          </div>
          <div class="what-we-offer-background4">
            <h3>Corporate divestitures</h3>
          </div>
        </div>
        <div>
          <div class="what-we-offer-text-2">
            <h3>We open companies to international markets such as the US, Canada, UK and Brazil. We have a strong network in these massive markets to identify
                partnerships, grow sales and overall expand the company’s business
                operations</h3>
          </div>
        </div>
      </section>
      <section id="section-our-team">
        <h1>MEET OUR TEAM</h1>
        <div class="container-members-1">
            <div>
              <div class="member">
                <img class="member-img"src="img/marc.jpeg" alt="centered image">
                <h3>Marc Riba</h3>
                <h4>Founder & CEO</h4>
              </div>

            </div>
            <div>
              <div class="member">
                <img class="member-img"src="img/gerarddelucas.PNG" alt="centered image">
                <h3>Gerard de Lucas</h3>
                <h4>Legal Counsel</h4>
              </div>
            </div>
            <div class="member">
              <img class="member-img"src="img/MarkMyhew.jpeg" alt="centered image">
              <h3>Mark Mayhew</h3>
              <h4> Board Member & Strategic Advisor</h4>
            </div>
        </div>
        <div class="container-members-2">
          <div class="member">
            <img class="member-img"src="img/quim.jpeg" alt="centered image">
            <h3>Quim Valls</h3>
            <h4> Chief Financial Officer</h4>
          </div>
          <div class="member">
            <img class="member-img"src="img/julia.jpeg" alt="centered image">
            <h3>Júlia Bacaria</h3>
            <h4>Data Protection Officer</h4>
          </div>
          <div class="member">
            <img class="member-img"src="img/carolina.jpeg" alt="centered image">
            <h3>Carolina Andrade</h3>
            <h4>PR & Communications Director</h4>
          </div>
        </div>
      </section>
      <section id="section-contact">
        <div>
          <h1>CONTACT US</h1>
        </div>
        <div class="form-contact">
          <div id="contact-form-container">

            <div>
              <form action="contact.php" method="post">
                <div >
                  <p>
                    <p><label for="firstname">First Name</label></p>
                    <input type="text" id="firstname" name="firstname" placeholder="Your name..">
                  </p>
                  <p><label for="lastname">Last Name</label></p>
                    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
                  </p>
                </div>
                <div>
                  <p>
                    <p><label for="organitzation">Organitzation</label></p>
                    <input type="text" id="organitzation" name="organitzation" placeholder="Your Organitzation">
                  </p>
                  <p>
                    <p><label for="mail">E-mail</label></p>
                    <input type="text" id="mail" name="mail" placeholder="Your E-mail">
                  </p> 
                </div>
                <p><label for="subject">Subject</label></p>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <br>
                <button type="submit" value="Submit">Contact us</button>
              </form>
            </div>
          </div>

        </div>
      </section>
      <footer id="section-footer">  
        <div class="container-footer">
          <div>
            <div>
              <img src="" alt="">
            </div>
            <div class="directions-footer">
              <p>Carrer Tuset 23-25, 1o 8a</p>
              <p>Barcelona, Barcelona, Espanya</p>
              <p>Telephone: +34 615 64 86 26</p>
              <p>E-mail: m.riba.ribrodcapital@gmail.com</m></p>
            </div>
          </div>
          <div>
            <div class="menu-footer">
              <a href="#section-presentation"><p>Who we are</p></a>
              <a href="#section-look-for"><p>What we look for</p></a>
              <a href="#section-what-we-offer"><p>What we offer</p></a>
              <a href="#section-our-team"><p>Our team</p></a>
              <a href="#section-contact"><p>Contact</p></a>
            </div>
          </div>
          <div>
            <div>
              <p>Follow us on:</p>
            </div>
            <div class="icons-footer">
              <a href="https://www.linkedin.com/company/88027467/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              <!--<i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-square-twitter"></i> 
              <i class="fa-brands fa-square-instagram"></i>-->
            </div>
          </div>
        </div>


      </footer>
  </div>
</body>
</html>


