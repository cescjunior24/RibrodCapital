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
              <li id="check-list"><a onclick="myFunction()" href="#section-presentation">QUIENES SOMOS</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-look-for">QUE BUSCAMOS</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-what-we-offer">QUE OFRECEMOS</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-our-team">NUESTRO EQUIPO</a></li>
              <li id="check-list"><a onclick="myFunction()" href="#section-contact">CONTACTO</a></li>
            </ul>
      </div>

    </header>
    <div class="iconos-lenguage">
        <a onclick="cambiaridiomaenglish()"> <img class="icon-lenguage-1" src="img/reino-unido.png" alt=""></a>
        <a onclick="cambiaridiomaspanish()" > <img class="icon-lenguage-2" src="img/spain.png" alt=""></a>
      </div>
      <section id="section-presentation">
        <h1> QUIENES SOMOS</h1>
        <div class="whoweare">
          <div>

            <div>
              <h3>RIBROD CAPITAL es un grupo privado de inversión y asesoramiento especializado en el sector sanitario.</h3>
              <h3>Buscamos invertir en las verticales farmacéutica y biotecnológica.</h3>
              <h3>Nuestro enfoque principal es invertir en pequeñas y medianas empresas maduras.</h3>
              <h3>Proporcionamos capital social en estructuras de capital flexibles y creativas.</h3>
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
            <h1>QUE BUSCAMOS</h1>
          </div>
          <h3>Nuestras empresas objetivo generalmente cumplen con los siguientes criterios:</h3>
          <div class="look-for-ideas-1">
            <div id="look-for-ideas-1-1-2">
              <h3>Ingresos de $ 5M a $ 50M</h3>
              <br>
              <img class="img-look-for" src="img/revenue.png" alt="">
            </div>
            <div id="look-for-ideas-1-1-2">
              <h3>Al menos $ 500K en flujo de caja libre</h3>
              <br>
              <img class="img-look-for" src="img/cash-flow.png" alt="">
            </div>
            <div id="look-for-ideas-1-3">
              <h3>En el negocio por lo menos cinco años, con un mínimo de tres años de estados financieros anteriores</h3>
              <img class="img-look-for" src="img/save-time.png" alt="">
            </div>
          </div>
          <div class="look-for-ideas-2">
            <div id="look-for-ideas-2-1">
              <h3>Principales operaciones en España, consideraremos selectivamente transacciones fuera de España</h3>
              <img class="img-look-for" src="img/spain.png" alt="">
            </div >
            <div id="look-for-ideas-2-1">
              <h3>Sólido equipo de gestión, ya sea titular o previamente identificado como parte de una adquisición</h3>
              <img class="img-look-for" src="img/trade.png" alt="">
            </div>
          </div>
        </div>
      </section>
      <section id="section-what-we-offer">
        <h1>QUE OFRECEMOS</h1>
        <h3>Nuestro equipo tiene la experiencia de inversión para estructurar acuerdos que satisfagan las diversas necesidades de los equipos de gestión y los propietarios de empresas.</h3>
        <div class="container-section-what-we-offer">
          <div class="what-we-offer-background1">
            <h3>Adquisición flexible, compra total o parcial</h3>
          </div>
          <div class="what-we-offer-background2">
            <h3>Consolidación de la deuda</h3>
          </div>
          <div class="what-we-offer-background3">
              <h3>Recapitalización</h3>
          </div>
          <div class="what-we-offer-background4">
            <h3>Desinversiones corporativas</h3>
          </div>
        </div>
      </section>
      <section id="section-our-team">
        <h1>CONOCE NUESTRO EQUIPO</h1>
        <div class="container-members-1">
            <div>
              <div class="member">
                <img class="member-img"src="img/marc.jpeg" alt="centered image">
                <h3>Marc Riba</h3>
                <h4>Fundador y CEO</h4>
              </div>

            </div>
            <div>
              <div class="member">
                <img class="member-img"src="img/gerarddelucas.PNG" alt="centered image">
                <h3>Gerard de Lucas</h3>
                <h4>Asesor legal</h4>
              </div>
            </div>
            <div class="member">
              <img class="member-img"src="img/MarkMyhew.jpeg" alt="centered image">
              <h3>Mark Mayhew</h3>
              <h4>Miembro de la Junta y Asesor Estratégico</h4>
            </div>
        </div>
        <div class="container-members-2">
          <div class="member">
            <img class="member-img"src="img/quim.jpeg" alt="centered image">
            <h3>Quim Valls</h3>
            <h4>Director financiero</h4>
          </div>
          <div class="member">
            <img class="member-img"src="img/julia.jpeg" alt="centered image">
            <h3>Júlia Bacaria</h3>
            <h4>Delegado de protección de datos</h4>
          </div>
          <div class="member">
            <img class="member-img"src="img/carolina.jpeg" alt="centered image">
            <h3>Carolina Andrade</h3>
            <h4>Directora de Relaciones Públicas y Comunicaciones</h4>
          </div>
        </div>
      </section>
      <section id="section-contact">
        <div>
          <h1>CONTÁCTENOS</h1>
        </div>
        <div class="form-contact">
          <div id="contact-form-container">

            <div>
              <form action="contact.php" method="post" target="_parent">
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
              <a href="#section-presentation"><p>Quienes somos</p></a>
              <a href="#section-look-for"><p>Lo que buscamos</p></a>
              <a href="#section-what-we-offer"><p>Lo que ofrecemos</p></a>
              <a href="#section-our-team"><p>Nuestro equipo</p></a>
              <a href="#section-contact"><p>Contacto</p></a>
            </div>
          </div>
          <div>
            <div>
              <p>Síguenos en:</p>
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


