<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>
        <meta name="viewport" content="width=device width, initial scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>

        <style>
            p.info{
                margin: 0px 0px 20px 0px;
                color: grey;
                font-size: 12px;
            }
        </style>

        <form onsubmit="return checkform();"" method="post">
            <label for="name" >name</label> <br> 
            <input type="text" name="name" id="name"/> <br> 
            <p class="info" id="nameinfo"></p>
            
            <label for="password">password</label><br> 
            <input type="password" name="password" id="password"/> <br>
            <p class="info" id="passwordinfo"></p>

            <label for="phone">phone number</label><br>
            <input type="text" name="phone" id="phone"/> <br> 
            <p class="info" id="phoneinfo"></p>

            <label for="email">email adress</label><br>
            <input type="text" name="email" id="email"/><br> 
            <p class="info" id="emailinfo"></p>

            <label for="zip">zip code</label><br> 
            <input type="text" name="zip" id="zip"/> <br> 
            <p class="info" id="zipinfo"></p>

            <input type="submit" name="submit" id="submit"/> 
            <p class="info" id="returninfo"></p>
        </form> 
        
        <!--<script src="Week2JS.js"></script>-->
        <script src="Week2JS.js"></script>

    </body>
</html>