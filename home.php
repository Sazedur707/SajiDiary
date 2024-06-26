<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saji Diary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 10px;
            background-color: #f9f9f9;
        }

        

        .description {
            max-width: 600px;
            margin: 50px auto;
            padding: 0 20px;
            animation: slide-up 1s ease-out;
        }

        .description p {
            color: #666666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        

        .buttons {
            text-align: center;
            margin-top: 30px;
            animation: fade-in 1s ease-out;
        }

        .buttons a {
            text-decoration: none;
        }

        .buttons a button {
            background-color: blue;
            color: #ffffff;
            border: none;
            width: 120px;
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .buttons a button:hover {
            background-color: darkblue;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes slide-up {
            0% {
                transform: translateY(50px);
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body><?php include 'title.php'; ?>
    
    <div class="buttons">
        <a href="register.php"><button>Register</button></a>
        <a href="login.php"><button>Login</button></a>
    </div>
    <div class="description">
        <p>Saji Diary is an online platform that allows you to maintain a personal diary and capture your thoughts, experiences, and memories in a secure and private way.</p>
        <p>It provides a convenient and intuitive interface for writing, organizing, and searching your entries.</p>
        <p>With Saji Diary, you can express yourself freely, reflect on your daily life, set goals, and track your progress.</p>
        <p>Whether you want to keep a journal, document your travels, or simply record your thoughts, Saji Diary is here to accompany you on your personal journey.</p>
        <p>Our mission is to provide a reliable and user-friendly platform that respects your privacy and keeps your personal data secure.</p>
        <p>We understand the importance of confidentiality when it comes to personal writings, and we ensure that your entries are encrypted and accessible only by you.</p>
        <p>Start your digital diary today with Saji Diary and unlock the power of self-reflection, mindfulness, and personal growth.</p>
        <h2>Formatting Your Text</h2>
  <p>Use HTML tags like <strong>&lt;strong&gt;</strong>, <em>&lt;em&gt;</em>, and <u>&lt;u&gt;</u> to apply formatting to your text. Use &lt;br&gt; tag for a new line. For example:</p>
  <pre>
    &lt;strong&gt;This text will be bold.&lt;/strong&gt;<br>
    &lt;em&gt;This text will be italicized.&lt;/em&gt;<br>
    &lt;u&gt;This text will be underlined.&lt;/u&gt;<br>
  </pre>
  <p>You can combine these tags to achieve the desired formatting effect.</p>

        <p><Strong>Designed and made by <i>Saji Softwares</i></Strong><br>sazedurrahman707@gmail.com</p>
        <p><a href="https://www.facebook.com/Szdr79/"><img src="img/facebook.png" alt="facebook"></a> 
        <a href="#"><img src="img/github.png" alt="github"></a></p>
    </div>
</body>
</html>
