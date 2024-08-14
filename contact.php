<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Gemstone Kingdom</title>
    <link rel="favicon" type="image/jpg" href="logo.jpg">

    <!-- ==== CSS File Links ====-->
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\subpages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ==== Google Fonts Links ====-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- javascript Links -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function () {
            emailjs.init({
                publicKey: "YIcsN-UvNnWBWpHHY",
            });
        })();
    </script>
</head>

<body>
    <?php require_once "common/header.php"; ?>

    <div class="abodetails">
        <h2>Get Answers to all your <br>questions you might have</h2>
        <h3>We will answer any questions you may have about our online sales right here. We love to hear from you.</h3>
        <br>
        <p>With more than 25 years of experience in Gem business, we being most trustworthy genuine Gemstones Dealers,
            Importers, Exporters, Wholesalers and Online Sellers in Sri Lanka.
            We are selling 100% Natural, Genuine and Certified Gemstones only.</p>
        <div class="form-container">
            <form action="#">
                <div class="user-details">
                    <div class="grid-item item1">
                        <div class="input-box">
                            <span class="details">Title</span>
                            <span class="req-star">*</span><br>
                            <select name="titles" class="form-control" id="titles">
                                <option value="">Select</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Miss.">Miss.</option>
                            </select>
                        </div>
                        <div class="input-box box-2">
                            <span class="details">Full Name</span>
                            <span class="req-star">*</span>
                            <input type="text" id="fullName" placeholder="Enter your full name" required>
                        </div>
                    </div>
                    <div class="grid-item item2">
                        <div class="input-box box-1">
                            <span class="details">Email</span>
                            <span class="req-star">*</span>
                            <input type="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box box">
                            <span class="details">Country</span>
                            <span class="req-star">*</span><br>
                            <select id="country" name="country" class="form-control">
                                <option value="">Select</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AL">Albania</option>
                                <option value="AD">Andorra</option>
                                <option value="AT">Austria</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BG">Bulgaria</option>
                                <option value="HR">Croatia (Hrvatska)</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="FR">France</option>
                                <option value="GI">Gibraltar</option>
                                <option value="DE">Germany</option>
                                <option value="GR">Greece</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HU">Hungary</option>
                                <option value="IT">Italy</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MK">Macedonia</option>
                                <option value="MT">Malta</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="ME">Montenegro</option>
                                <option value="NL">Netherlands</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="RO">Romania</option>
                                <option value="SM">San Marino</option>
                                <option value="RS">Serbia</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="ES">Spain</option>
                                <option value="UA">Ukraine</option>
                                <option value="DK">Denmark</option>
                                <option value="EE">Estonia</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FI">Finland</option>
                                <option value="GL">Greenland</option>
                                <option value="IS">Iceland</option>
                                <option value="IE">Ireland</option>
                                <option value="LV">Latvia</option>
                                <option value="LT">Lithuania</option>
                                <option value="NO">Norway</option>
                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="TR">Turkey</option>
                            </select>
                        </div>
                        <div class="input-box box-3">
                            <span class="details">City</span>
                            <span class="req-star">*</span>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="grid-item item3">
                        <div class="input-box box-1">
                            <span class="details">Phone</span>
                            <span class="req-star">*</span>
                            <input type="text" placeholder="Enter your number" required>
                        </div>
                        <div class="box-2">
                            <span class="details">Is this Phone Number available on?<br>
                                <label class="opt"><input type="checkbox">&nbsp;Whatsapp
                                    <span class="checkmark"></span>
                                </label>
                                <label class="opt"><input type="checkbox">&nbsp;Viber
                                    <span class="checkmark"></span>
                                </label>
                                <label class="opt"><input type="checkbox">&nbsp;Telegram
                                    <span class="checkmark"></span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="grid-item item4">
                        <div class="input-box box-1">
                            <span class="details">Subject</span>
                            <span class="req-star">*</span>
                            <input type="text" required>
                        </div>
                        <div class="input-box box-2">
                            <span class="details">Your Budget(Approximately in your preferred currency)</span>
                            <span class="req-star">*</span>
                            <input type="text" placeholder="Eg: (USD), (GBP), (EUR), (AUD), (CHF)" required>
                        </div>
                    </div>
                    <div class="grid-item item5">
                        <div class="input-box box-1">
                            <textarea name="message" placeholder="Your Message" class="message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="btn-container">
                        <button class="submit-btn" type="submit" onclick="sendMail()">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php require_once "common/footer.php"; ?>

    <script>

    </script>
</body>

</html>