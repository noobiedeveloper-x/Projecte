<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="http://localhost/Portfollio/Assets/img/css/vincent.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
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

<body>

    <header class="header">
        <a href="#" class="logo">Android Development</a>

        <nav class="navbar">
         
        </nav>
    </header>

    <section class="home">
        <div class="home-content">
            <h1>Vince Gomonod</h1>
            <h3>Android Development</h3>
            <p>An android developer uses analytical skills and computer training to develop systems for android devices. It involves: 
            Using a variety of tools to write program code in order to design and build applications for Android products. Collaborating with other 
            teams to design new features that users need.</p>
            <div class="btn-box">
            
            </div>
        </div>

        <div class="home-sci">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-gmail' ></i></a>
        </div>
    </section>

    <div class="container">
        <h2>Choose your plan</h2>
        <div class="price-row">
            <div class="price-col">
                <p>Starter</p>
                <h3>₱299 <span>/ month</span></h3>
                <ul>
                    <li>Android SDK (Software Development Kit)</li>
                    <li>Advanced Features</li>
                    <li>Basic Security</li>
                    <li>Enhanced Security</li>
                    <li>Simple Customization</li>
                    <li>Limited Support</li>
                </ul>
                <button class="" onclick="openBuyModal()">BUY NOW!</button>
            </div>

            <div class="price-col">
                <p>Advanced</p>
                <h3>₱599 <span>/ month</span></h3>
                <ul>
                    <li>Android SDK (Software Development Kit)</li>
                    <li>Early Access</li>
                    <li>Free Email Address</li>
                    <li>Enhanced Security</li>
                    <li>Simple Customization</li>
                    <li>Medium Support</li>
                </ul>
                <button class="" onclick="openBuyModal()">BUY NOW!!</button>
            </div>
            
            <div class="price-col">
                <p>Premium</p>
                <h3>₱999 <span>/ month</span></h3>
                <ul>
                    <li>Android SDK (Software Development Kit)</li>
                    <li>Ad-Free-Experience</li>
                    <li>Free Email Address</li>
                    <li>Enhanced Security</li>
                    <li>Free SSL Certificate</li>
                    <li>Unlimited Support</li>
                </ul>
                <button class="" onclick="openBuyModal()">BUY NOW!!</button>
            </div>
        </div> 
    </div>

    <div class="container2">
        <form>
            <h1>Contact Us</h1>
            <input type="text" id="nameF" placeholder="First name" required>
            <input type="text" id="emailF" placeholder="Email" required>
            <h4>Type Message Here...</h4>
            <textarea required id ="message"></textarea>
            <input type="submit" value="Send" id="button" onclick="submitFeedback()">
        </form>
    </div>

    <footer>
        <p>&copy; 2023 Azure Development Team | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
      </footer>


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
          <option id ="tool" value="Starter-Android">Starter</option>
          <option id ="tool" value ="Advanced-Android">Advanced</option>
          <option id ="tool" value ="Premium-Android">Premium</option>
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

<script>
    function submitFeedback() {
    // Get form data
    const formData = {
        name: document.getElementById('nameF').value,
        email: document.getElementById('emailF').value,
        message: document.getElementById('message').value,
    };

    console.log(formData);
    const jsonData = JSON.stringify(formData);


    const xhr = new XMLHttpRequest();
    const url = 'http://localhost/Portfollio/feedback-endpoint.php'; 

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            // Handle the response from PHP (if needed)
            console.log(xhr.responseText);
            alert('Feedback submitted successfully! We will get back to you soon.');

           
        } else {
            // Handle HTTP errors here, if needed
            alert('Error: ' + xhr.status);
        }
    }
};
    // Send the JSON data
    xhr.send(jsonData);
}

    </script>
</body>
</html>