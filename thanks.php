<?php include 'includes/header.php'; ?>

<?php
$title = "Thank You";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to      = 'idweek@medicalconferencesgroup.com'; // Your cPanel email
    $subject = 'Registration From TCT 2025';

    $headers  = "From: TCT 2025 <idweek@medicalconferencesgroup.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $message = "";
    foreach ($_POST as $key => $value) {
        $message .= $key . " : " . htmlspecialchars($value) . "\r\n";
    }
    $message .= "IP : " . $_SERVER['REMOTE_ADDR'];

    // Send email
    mail($to, $subject, $message, $headers);
}
?>


<div id="topform-section" >

<section class="contactpic">
        <span class="text1 regi">Thank You </span>
  <div class="breadcrumb">
    <p><a href="index.php">Home </a> <span>→</span> Thank you </p>
  </div>
</section>

   
    <style>
    .checkmark {
      width: 60px;
      height: 60px;
      border: 3px solid #dc3545;
      border-radius: 50%;
      position: relative;
      margin: 0 auto 20px;
      animation: rotate 0.8s ease-in-out;
    }
    .checkmark::after {
      content: '✓';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 40px;
      color: #dc3545;
      animation: popIn 0.5s ease-out 0.8s backwards;
    }
    @keyframes rotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    @keyframes popIn {
      0% { transform: translate(-50%, -50%) scale(0); }
      100% { transform: translate(-50%, -50%) scale(1); }
    }
    h2{
        font-size:35px; margin-bottom:20px;
      opacity: 0;
      animation: fadeUp 1s ease-in-out 1s forwards;
         font-family: 'Dancing Script';
    }
    p {

      font-size: 18px;
      color: #000;
      opacity: 0;
      animation: fadeUp 1s ease-in-out 1.2s forwards;
    }
    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
  </style>

    <!-- Page 1: Bounce-in Segments Animation -->
    <section class="min-h-screen bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-5">
        <div class="text-center container ">
            <div class="offset-md-2 col-md-8 shadowcont ">
           <div class="checkmark"></div>
             <h2 class="text-lg text-gray-600 mt-2 text-slide">Thank you for your submission!</h2>
        <p>We have successfully received your request and it is currently being processed. A dedicated registration and housing coordinator will contact you via email within 5 minutes to assist in completing your request and to address any questions you may have.</p>
        <p>Please keep an eye on your inbox. If you do not see an email shortly, we kindly ask that you check your spam or junk folder, as it may have been inadvertently filtered there.</p>
    </div>
        </div>
    </section>

    
    </div>
    
<?php include 'includes/footer.php'; ?>


