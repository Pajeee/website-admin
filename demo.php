<!DOCTYPE html>
<html>
    <head>  <title>Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <style>
            #demographic{
                width: 40rem;
                display: flex;
                justify-content: space-between;
            }
            select{
                width: 8rem;
                padding: 12px 20px;
                margin: 8px 0;
                border: 1px solid rgb(155, 155, 155);
                border-radius: 4px;
                box-sizing: border-box;
            }
            .box2 p{
                top:-5%;
            }
            #chart{
                width: 30rem;
                height: 30rem;
            }
        </style>
    </head>
    <body>
        <div class="main-div">
            <div class="box1">

                <div class="admin">
                    <h1>Administrator</h1>
                </div>

                <div class="menu">
                    <a href="index.html">Downloads</a>
                    <a href="ratings.html">Ratings</a>
                    <a href="demo.html">Demographics</a>
                </div>

                <div class="logout">
                    <a href="#">Log Out</a>
                </div>

                <div class="brand-name">
                    <img src="../images/logo.png" alt="Logo">
                    <h2>FordaCommute</h2>
                </div>
            </div>
        </div>

        <div class="box2">
            <p>Demographics</p>
            <form id="demographic">
                <select name="demo" id="options1" onchange="changeDemo()">
                    <option value="sex">Sex</option>
                    <option value="age">Age</option>
                    <option value="status">Status</option>
                </select>

                <select name="date" id="options2">
                    <option value="jan">January</option>
                    <option value="feb">February</option>
                    <option value="mar">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="jun">June</option>
                    <option value="jul">July</option>
                    <option value="aug">August</option>
                    <option value="sept">September</option>
                    <option value="oct">October</option>
                    <option value="noc">November</option>
                    <option value="dec">December</option>
                </select>
            </form>
            <div class="chart" id="chart">
                <canvas id="pie"></canvas>
            </div>
        </div>
    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <?php
            function changeDemo() {;
                $x = $_GET["id"];
                if($x == "sex"){
                    echo "<script src='../js/demo1.js'></script>" ;
                }else if($x == "age"){
                    echo "<script src='../js/demo2.js'></script>" ;
                }else{
                    echo "<script src='../js/demo3.js'></script>" ;
                }
            }
        ?>

</html>