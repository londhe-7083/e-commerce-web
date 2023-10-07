
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
    <script src="https://cpwebassets.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>Ecommerce Card Login &amp; </title>

    <link rel="canonical" href="https:/io/fastroware/pen/BaGRGyN">
  
  
  
  
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card {
  width: 300px;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

h2 {
  color: #007BFF;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  text-align: left;
  margin-bottom: 5px;
}

input {
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

button {
  padding: 10px;
  background-color: #007BFF;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.switch {
  margin-top: 15px;
  font-size: 14px;
}

.switch a {
  color: #007BFF;
  text-decoration: none;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form>
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Enter your username">

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password">

      <button type="submit">Login</button>
    </form>
    <div class="switch">Don't have an account? <a href="#" onclick="switchCard()">Register here</a></div>
  </div>

  <div class="card" style="display: none;">
    <h2>Register Form</h2>
    <form>
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" placeholder="Enter your full name">

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Enter your email">

      <label for="new-password">New Password</label>
      <input type="password" id="new-password" placeholder="Enter your new password">

      <button type="submit">Register</button>
    </form>
    <div class="switch">Already have an account? <a href="#" onclick="switchCard()">Login here</a></div>
  </div>
</div>
  
      <script id="rendered-js" >
function switchCard() {
  const loginCard = document.querySelector('.container .card:nth-child(1)');
  const registerCard = document.querySelector('.container .card:nth-child(2)');

  if (loginCard.style.display === 'none') {
    loginCard.style.display = 'block';
    registerCard.style.display = 'none';
  } else {
    loginCard.style.display = 'none';
    registerCard.style.display = 'block';
  }
}
//# sourceURL=pen.js
    </script>

  
</body>

</html>
