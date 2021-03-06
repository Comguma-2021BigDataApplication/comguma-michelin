<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comguma's Michelin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="layout.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://d3js.org/d3.v7.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <!-- TOP NAV BAR -->
            <nav class="sticky-nav">
                <div class="flex-left">
                    <button type="button" class="btn-image" id="btn-logo-brand" onClick="location.href='index.php'">
                        <img src="data:image/jpeg;base64,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"
                            width=auto height=50px />
                    </button>
                    <div class="nav-box">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="filterSearch.html">Restaurants</a>
                            </li>
                            <li>
                                <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <a href="mypage.php">My Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-right">
                    <div class="login-box">
                        <ul>
                            <li>
                                <a href="login.php">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="content-center">
        <h2>
            Welcome
        </h2>
        <p>
            We are Jimin Kim, Seoyoung Ryu, and Geonhui Jo from team13.
        </p>
        <img src="landingimg.png" width=500px height=auto>
    </div>
    <svg width="960" height="500"></svg>
    <script src="https://d3js.org/d3.v7.min.js"></script>

</body>

</html>