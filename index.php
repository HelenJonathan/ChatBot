<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <p>Sample Questions:</p>
        <ul>
            <li>Hello</li>
            <li>What is your name</li>
            <li>What is your gender</li>
            <li>How old are you</li>
            <li>Where are you from</li>
            <li>Do you write codes</li>
            <li>How are you</li>
        </ul>
        <div class="chatbox">
            <div class="header">
                <h4>Chat with Alicia <span class="avail">Online </span></h4>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Chat Box">
                </div>
                <div>
                    <input type="submit" value="Send" id="btn">
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>
