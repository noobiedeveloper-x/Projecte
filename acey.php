<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>System Analysis</title>
  </head>
  <body>
    <style>

  /* CSS VARIABLES */
  :root {
    --primary: hsl(226, 29%, 32%);
    --dark: #4b4949;
    --light: #fcf7fa;
    --shadow: 0 1px 5px rgba(54, 52, 52, 0.9);
  }

  html {
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    color: #c5c5c5;
  }

  body {
    background: #fbf9fa;
    margin: 30px 50px;
    line-height: 1.5;
  }

  .btn {
    background: var(--dark);
    color: var(--light);
    padding: 0.6rem 1.3rem;
    text-decoration: none;
    border: 0;
  }

  img {
    max-width: 100%;
    border-bottom-right-radius: 40px;
    border-top-left-radius: 40px;
  
  }

  .wrapper {
    display: grid;
    grid-gap: 20px;
  }

  /* Navigation */
  .main-nav ul {
    display: grid;
    grid-gap: 20px;
    padding: 0;
    list-style: none;
    grid-template-columns: repeat(4, 1fr);
  }

  .main-nav a {
    background: var(--primary);
    display: block;
    text-decoration: none;
    color: var(--dark);
    padding: 0.8rem;
    font-size: 1.1rem;
    text-align: center;
    text-transform: uppercase;
    box-shadow: var(--shadow);
  }

  .main-nav a:hover {
    background: var(--dark);
    color: var(--light);
  }

  /* Top Container */
  .top-container {
    display: grid;
    grid-gap: 20px;
    grid-template-areas:
      "showcase showcase top-box-a"
      "showcase showcase top-box-b";
  }

  .showcase {
    grid-area: showcase;
    min-height: 400px;
    background: url("https://png.pngtree.com/thumb_back/fw800/background/20230518/pngtree-person-is-typing-on-a-laptop-with-code-on-the-screen-image_2581299.jpg");
    background-size: cover;
    padding: 3rem;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: flex-end;
    box-shadow: var(--shadow);
    border-radius: 20px;
  }

  .showcase h1 {
    font-size: 3.5rem;
    margin-bottom: 0;
    color: var(--light);
  }

  .showcase p {
    font-size: 1.1rem;
    margin-top: 0;
    color: var(--light);
  }

  /* Top boxes */
  .top-box {
    background: var(--primary);
    display: grid;
    justify-items: center;
    align-items: center;
    padding: 1.5rem;
    box-shadow: var(--shadow);
    border-radius: 20px;
  }

  .top-box .price {
    font-size: 2rem;
  }

  .top-box-a {
    grid-area: top-box-a;
  }

  .top-box-b {
    grid-area: top-box-b;
  }

  .boxes {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    
  }

  .box {
    background: var(--primary);
    padding: 1.5rem;
    text-align: center;
    box-shadow: var(--shadow);
    border-radius: 30px;
  }

  /* Info */
  .info {
    background: var(--primary);
    box-shadow: var(--shadow);
    display: grid;
    grid-gap: 30px;
    grid-template-columns: repeat(2, 1fr);
    padding: 3rem;
    border-radius: 30px;
  }

  /* Portfolio */
  .portfolio {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }

  .portfolio img {
    width: 100%;
    box-shadow: var(--shadow);
    
  }

  /* Footer */
  footer {
    margin-top: 2rem;
    background: var(--dark);
    color: var(--light);
    text-align: center;
    padding: 1rem;
    color: #58b5d5;
  }

  /* Media queries */
  @media (max-width: 700px) {
    .top-container {
      grid-template-areas: 
        "showcase showcase"
        "top-box-a top-box-b";
    }

    .showcase h1 {
      font-size: 2.5rem;
    }

    .showcase p {
      font-size: 0.9rem;
    }

    .top-box {
      padding: 1.2rem;
    }

    .top-box .price {
      font-size: 1.5rem;
    }

    .main-nav ul {
      grid-template-columns: 1fr;
    }

    .info {
      grid-template-columns: 1fr;
    }

    .info .btn {
      display: block;
      text-align: center;
    }
  }
  @media (max-width: 500px) {
    .top-container {
      grid-template-areas: 
        "showcase"
        "top-box-a"
        "top-box-b";
    }
  }

  @media (max-width: 375px) {
    body {
      margin: 10px 20px;
    }
  }
    </style>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"
      integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />

  

      <!-- Top container -->
      <section class="top-container">
        <header class="showcase">
          <h1> SYSTEM ANALYSIS </h1>
          <p>
            Blue Fire Development Team is dedicated to delivering high-quality solutions in system analysis. 
      Our team of experts is committed to providing innovative 
      and reliable services to meet your business needs. 
      With a focus on excellence, we strive to bring your ideas to life and make a 
      positive impact on your projects.
          </p>
          
        </header>
        <div class="top-box top-box-a">
          <h4>Membership</h4>
          <p class="price">₱2345</p>
          <button class="btn" onclick="openBuyModal()">JOIN NOW!</button>
        </div>
        <div class="top-box top-box-b">
          <h4>Pro Membership</h4>
          <p class="price">₱299/mnth</p>
          <button class="btn" onclick="openBuyModal()">JOIN NOW!</button>
        </div>
      </section>

      <br>
      <br>
      <!-- Boxes section -->
      <section class="boxes">
        <div class="box">
          <i class="fas fa-chart-pie fa-4x"></i>
          <h3>Analytics</h3>
          <p>
            Through our complete analytics solution, which offers real-time data and useful indicators to support well-informed decision-making, you can elevate your business insights. Our system analytics provide a thorough picture of your digital environment by smoothly tracking user activity, website performance, and other data. With our dynamic analytics platform, you can maximize your web presence and unlock the potential for strategic upgrades.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-globe fa-4x"></i>
          <h3>Marketing</h3>
          <p>
            Elevate your brand presence with our comprehensive marketing solutions tailored to amplify your system's strengths. From targeted social media campaigns that engage your audience to data-driven strategies optimizing your online visibility, our marketing services ensure your system stands out in the digital landscape. With a focus on measurable results and strategic outreach, we empower your business to reach new heights and capture the attention of your desired market.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-cog fa-4x"></i>
          <h3>Development</h3>
          <p>
            "Empower your business with our cutting-edge system development services, tailored to elevate your digital presence. Our expert development team combines innovation and expertise to craft robust and scalable solutions, ensuring your system evolves seamlessly with your growing needs. From custom feature enhancements to full-stack development, trust us to transform your vision into a dynamic and efficient reality."
          </p>
        </div>
        <div class="box">
          <i class="fas fa-users fa-4x"></i>
          <h3>Support</h3>
          <p>
            Our trained support staff is committed to offering prompt assistance for any questions you may have or problems you might run into with our system. 
            Whether you need help with functionality, run into technical issues, or just want some advice, our friendly support team is here to make sure everything goes well.
            In order to earn your trust and ensure that you are successful using our system, we work hard to provide prompt, efficient help that is focused on your needs and is available around-the-clock.
           
           
          </p>
        </div>
      </section>
      <br>
      <br>
      <section class="info">
        <img
          src="coffee.jpg";
          alt="";
        />
        <div>
          <h2> SYSTEM ANALYSIS ON WEB </h2>
          <p>
            Our web analytics service provides comprehensive analysis of your systems to determine user requirements, performance metrics, and security measures.
            We carefully assess content relevance, ensure seamless integration, and provide actionable insights through analysis.
            Leave it to us to optimize your website and ensure compliance, responsiveness, and a first-class user experience.
           
           
"

          </p>

        </div>
      </section>

      <br>
      <br>

      <style>
        .buy-modal {
    color: white;
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #1f2b3e;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    z-index: 1;
}

.buy-modal .modal-content {
    text-align: right;
}

.buy-modal h2 {
    color: white;
    margin-right: 36%;
}

.buy-modal form {
    display: flex;
    flex-direction: column;
}

.buy-modal label {
    margin-top: 10px;
    font-size: 14px;
    color: white;
    text-align: left;
}

.buy-modal input {
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

.buy-modal .card-details {
    display: flex;
    justify-content: space-between;
}

.buy-modal button {
    background-color: #3498db;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    margin-top: 15px;
}

.buy-modal button:hover {
    background-color: #2980b9;
}

.Image1 {
    height: 100px;
    margin-right: 36%;
}

.Price {
    color: white;
    font-size: 15px;
    margin-right: 36%;

}

select {
  width: 100%;
  height: 30px;
}
</style>

     
      <!-- The Buy Modal -->
<div id="buyModal" class="buy-modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" onclick="closeBuyModal()">&times;</span>
    
        <h2>Checkout</h2>
        <img class="Image1" src="https://i.ibb.co/hgJ7z3J/6375aad33dbabc9c424b5713-card-mockup-01.png" alt="6375aad33dbabc9c424b5713-card-mockup-01" border="0"></a>
        <form id="paymentForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your Email" required>

    <label for ="subscription">Subscrition Type</label>
    <select>
          <option id ="tool" value="Membership-System">Membership</option>
          <option id ="tool" value ="Pro-Membership-System">Pro-Membership</option>
</select>
    <label for="card">Credit Card Number:</label>
    <input type="text" id="card" name="card" placeholder="XXXX-XXXX-XXXX-XXXX" required>

    <div class="card-details">
        <div class="expiry-date">
            <label for="expiry">Expiry Date:</label>
            <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
        </div>
        <div class="cvv">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="XXX" required>
          
        </div>
    </div>

    <button type="button" onclick="submitForm()">Proceed to Payment</button>

</form>

    </div>
</div>

<script>
    
    document.getElementById('buyModal').style.display = 'none';

    function openBuyModal() {
        document.getElementById('buyModal').style.display = 'block';
    }

    // Close the Buy Modal
    function closeBuyModal() {
        document.getElementById('buyModal').style.display = 'none';
    }

  
    window.onclick = function(event) {
        if (event.target == document.getElementById('buyModal')) {
            document.getElementById('buyModal').style.display = 'none';
        }
    };
</script>

<script>
    function submitForm() {
   

    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        card: document.getElementById('card').value,
        expiry: document.getElementById('expiry').value,
        cvv: document.getElementById('cvv').value,
        tool: document.getElementById('tool').value,
    };

    const jsonData = JSON.stringify(formData);


    const xhr = new XMLHttpRequest();
    const url = 'http://localhost/Portfollio/Toolbuy.php'; 

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            alert('Success a message to your gmail has been send');
           
        } else {
           
            alert('Error: ' + xhr.status);
        }
    }
};
    // Send the JSON data WELL WEIRD
    xhr.send(jsonData);
}
    </script>
      <!-- Portfolio -->
      <section class="portfolio">
        <img src="https://fs2.mapua.edu.ph/MHSS/Images/MHSS_now_offers_advanced_coding_program_for_Junior_High_School.jpg" alt="" />
        <img src="https://assets.entrepreneur.com/content/3x2/2000/1651846334-GettyImages-1253430957.jpg?format=pjeg&auto=webp" alt="" />
        <img src="https://res.cloudinary.com/highereducation/images/f_auto,q_auto/v1664422671/BestCollegeReviews.org/GettyImages-1204374053_286153cada/GettyImages-1204374053_286153cada.jpg?_i=AA" alt="" />
        <img src="https://www.columbiasouthern.edu/media/gtfbso4a/business-information-technology.jpg" alt="" />
        <img src="https://cdn2.hubspot.net/hubfs/53/homepage-web-design.jpg" alt="" />
        <img src="https://search4local.co.uk/wp-content/uploads/2020/08/Cardiff-Web-Design-Agency.jpeg" alt="" />
        <img src="https://goldlilys-media.com/sites/default/files/webplatform.jpg" alt="" />
        <img src="https://img.freepik.com/premium-photo/ux-ui-design-process-modish-mobile-application-website_31965-39900.jpg" alt="" />
        <img src="https://conmigomedia.com/wp-content/uploads/2022/12/seo-1024x683.jpg" alt="" />
        <img src="https://webifly.com/wp-content/uploads/elementor/thumbs/person-working-html-computer-q7pfe34z6jh6cq8zn3q1338cnevrv2lhknlilxn7ns.jpg" alt="" />
      </section>

      <!-- Footer -->
      <footer>
        <p>AZURE &copy; 2023</p>
      </footer>
    </div>
    <!-- Wrapper End -->
  </body>
</html>