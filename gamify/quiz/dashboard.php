<?php
// session_start();
// require_once "../login/login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamify | Quiz</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body style="background:url(2.webp);
    height: 100%;
    background-position: center;
    background-size: cover;
    margin-top:500px">
    <!-- start Quiz button -->
    <div class="start_btn"><button style="color:#ffb320;">Answer Key</button></div>

    <!-- Info Box -->
    <div class="info_box" style="margin-top:100px;">
        <div class="info-title"><span>Answer Key</span></div>
        <div class="info-list">
            <div class="info" style="font-weight: bold;">1.Which of the following is not a part of Tripple alliance?</div>
            <div class="info" style="font-style: italic;">A. Russia is a part of Triple Entente</div>
            <div class="info" style="font-weight: bold;">2.Which group is called triple Entente?
</div>
            <div class="info" style="font-style: italic;">A.  Britain, France,Russia Triple entente
      Germany, Italy, Austria-Hungary Triple alliance</div>
            <div class="info" style="font-weight: bold;">3.Which of the following is considered as main cause of world wars?
</div>
            <div class="info" style="font-style: italic;">A. Aggressive Nationalism,Imperialism,Secret alliances and Militarism are considered as major reasons for the war </div>
            <div class="info" style="font-weight: bold;">4.Why builing taj mahal has become a difficult task for engineers?
</div>
            <div class="info" style="font-style: italic;">A. As mumtaz grave is on yamuna river, builing anything there can be a tidious task as soil will be run away during heavy water flow</div>
            <div class="info" style="font-weight: bold;">5.What was [divide and rule] under British Raj?</div>
            <div class="info" style="font-style: italic;">A. Could create differences between the people of different castes and creeds which would automatically make ruling over them easy</div>
        </div>
        <div class="buttons">
            <button style="color:#ffb320;background:#fff;border: 1px solid #ffb320;" onclick="window.location.href='index.php';">Exit</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn" style="background:#ffb320;border: 1px solid #ffb320;">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button style="height: 70px;" onclick="window.location.href = 'desc.php';">Answer Key</button>
            <button class="restart" style="height: 70px;">Replay Quiz</button>
        </div>
        <div class="buttons">
            <button class="quit" style="height: 70px;">Quit Quiz</button>
            <button onclick="window.location.href = 'logout-user.php';" style="height: 70px;">Logout</button>   
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>

</body>
</html>