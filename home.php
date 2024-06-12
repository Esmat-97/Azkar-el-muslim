<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.summary{
    background-color: green ;
    padding: 16px;
    border-radius: 10px;
    color: #ecdcdc;

        h1{
        margin-top: 14px;
        margin-bottom: 0;
        font-size: 2.3rem;

    }

}



    #container{
        width: 550px;
        text-align: center;
        position: absolute;
        left:20%;
        right: 0;
        top: 55%; 
        transform: translateY(-50%); 
        padding: 25px;
       display: flex;
       flex-wrap: wrap;
    }

    #container div{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #eeeeee;
        width: 40%;
        height: 15vh;
        color: #444;
       flex-direction: column;
       margin-bottom: 20px;
       margin-left: 20px;
    }

    </style>
</head>
<body>
<ion-content>


  <div class="summary">
<strong>اذكار المسلم</strong>
  </div>


  <div id="container">

    <div routerLink="/morning">
      <a href="morning.php">
      <strong>اذكار الصباح</strong>
      </a>
  </div>



  <div routerLink="/evining">
  <a href="evining.php">
      <strong>اذكار المساء</strong>
      </a>
      </div>
    


  <div routerLink="/prayer">
  <a href="after.php">
  <strong> اذكار بعد الصلاة</strong>
      </a>
</div>



<div routerLink="/sleep">
<a href="sleep.php">
      <strong>اذكار النوم</strong>
      </a>
  </div>

</div>
 
</ion-content>
    
</body>
</html>
