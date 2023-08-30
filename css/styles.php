<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        .header {
            color: black;
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            z-index: 1000;
            background-color: grey;
            font-weight: bold;
        }

        .form-container{
            background-color: cyan;
            width: 30rem;
            height: 30rem;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            border-radius: 20%;
            margin:2rem auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        :is(.form-container, .book-container, .flight-card) button{
            border-radius: 10%;
            background-color: blue;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            font-size: large;
        }

        :is(.form-container, .book-container, .flight-card) button:hover{
            background-color: lightgrey;
            color: blue;
        }

        .heading{
            text-align: center;
        }

        form{
            align-items:center;
            justify-content:center;
            display:flex;
            flex-direction: column;
        }

        form input{
            width: 100%;
            height: 25px;
            margin: 1rem;
            border:2px solid;
        }

        form textarea{
            margin: 1rem 0;
            border:2px solid;
        }

        .small{
            height: 25rem;
        }


        .contact-container{
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: wheat;
            padding: 2rem;
        }

        .heading h1{
            margin-bottom: 2rem;
        }

        .book-container{
            padding:3rem;
            background-color: wheat;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .flight{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: cyan;
            width: 35rem;
            border-radius: 20%;
            padding: 3rem 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .flight input{
            width:7rem;
            margin-left: 0;
            border: 1px solid;
            padding-left: 0.5rem;
        }

        .classes select{
            width: 5rem;
            height: 2rem;
            margin: 2erm 0;
            margin-bottom: 2rem;
        }

        .flight-card{
            background-color: goldenrod;
            padding: 2rem;
            border: 1px solid;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .flight-card .info{
            justify-content: center;
            display: flex;
            margin-top: 1rem;
        }

        .flight-card .info :is(.depart, .arrival){
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 2rem;
            background-color: seagreen;
            border-radius: 10%;
            justify-content: space-between;
            margin: 0 10rem;
        }

        @media(max-width: 1100px)
        {
            .flight-card .info :is(.depart, .arrival){
                margin: 0 5rem;
            }
        }

        @media(max-width: 900px)
        {
            .contact-container{
                flex-direction: column;
            }

            #menu-btn.menu .ham {
                display: inline-block;
                transition: 0.2s linear;
            }

            #menu-btn.menu .cross {
                display: none;
                transition: 0.2s linear;
            }
        
            #menu-btn.change .ham {
                display: none;
            }
        
            #menu-btn.change .cross {
                display: inline-block;
            }
        
            .header .navbar {
                position: absolute;
                top: 99%;
                left: 0;
                right: 0;
                padding: 2rem;
                transition: 0.2s linear;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }
        
            .header .navbar.change {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                background-color: white;
            }
        
            .header .navbar a {
                display: block;
                margin: 2rem;
                text-align: center;
            }
        }

        @media(max-width: 750px)
        {
            .flight-card .info :is(.depart, .arrival){
                margin: 0 2rem;
            }
        }

        @media(max-width: 650px)
        {
            .flight-card{
                padding: 1rem 0;
            }
        }

        @media(max-width: 500px){
            .book-container .input-tag{
                display: flex;
                flex-direction: column;
            }

            .flight{
                border-radius: 10%;
            }
        }

    </style>
</head>
<body>
    
</body>
</html>