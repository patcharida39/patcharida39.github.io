<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate Profit</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >


    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f8d7da;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: black;l
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color:#FFCCCC ;
        }

        .active {
            background-color:#FFCCCC ;
        }

    </style>
</head>

<body>

<ul>
    <li><a class="active" href="#home">Home</a></li>

</ul>

</body>
</html>


<html>

<body id="Calculate">
</div>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Asar");

        body{
            font-family: 'Asar', serif;
            background-image: url("https://images.pexels.com/photos/1089842/pexels-photo-1089842.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
        }



        * {
            box-sizing: border-box];
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            font-size: 120%;
        }

        label {
            padding: 4% 4% 4% ;
            display: inline-block;



        }

        input[type=submit] {
            background-color: #e4606d;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            font-size: 150%;

        }

        input[type=submit]:hover {
            background-color: #ed969e;

        }

        .container {
            border-radius: 20px;
            background-color: #f2f2f2;
            margin-top: 3%;
            padding: 3% 10% 4%;
            background-image: url("https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-size: cover;

        }

        .col-25 { /*first last b name*/
            float: left;
            width: 18%;
            margin-top: 33px;
            margin-left: 10%;
            font-size: 120%;
        }

        .col-75 {/* Box first last b name*/
            float: left;
            width: 50%;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        .container h1{
            text-align: center;
        }

        #file{
            margin-left: 23%;
            margin-top: 1%;
        }
        #submit{
            margin-left: 42%;
            margin-top: 3%;
        }
    </style>





    <div class="container" >
        <h1 >INFORMATION  FORM</h1> <br><br>

        <form  method="post" action="Controller.php" enctype="multipart/form-data">
            <div class="row">

                <div class="col-25">
                    <label for="fname">FIRST NAME</label>
                </div>

                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>

            </div>

            <div class="row">

                <div class="col-25">
                    <label for="lname">LAST NAME</label>
                </div>

                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="bsnname">BUSINESS NAME</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bsnname" name="bsnname" placeholder="Your Business name.."><br><br>
                </div>
            </div>

            <div class="row" id="file">
                <input type="file" name="file" id="file" class="input-large"> <br><br>
            </div>



            <div class="row" id="submit">
                <input type="submit" value="IMPORT">
            </div>
        </form>
    </div>
    </body>





</html>

