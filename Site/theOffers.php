<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <title>Candidature stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.2/css/all.min.css" integrity="sha512-NicFTMUg/LwBeG8C7VG+gC4YiiRtQACl98QdkmfsLy37RzXdkaUAuPyVMND0olPP4Jn8M/ctesGSB2pgUBDRIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        
.nav {
    width: 95%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: auto;
    margin-top: 5px;
}


.nav ul {
    display: flex;
    justify-content: space-around;
    align-items: center;
    list-style: none;
    flex-grow: 0.3;
    height: 57px ;
}
.nav .state {
    height: 57px ;

}
.nav .state button {
    width: 120px;
    height: 35px;
    font-weight: bold;
    margin: 0px 7px;
    border: 0px;
    border-radius: 8px;
}

.nav .state button:nth-child(1) {
  
    background-color: white;
    color: black;
    border: 2px solid gray;
}
.nav .state button:nth-child(2) {
  
    background-color: black;
    color: white;
}
.nav  .logo {
    padding-bottom:10px
}
.nav  .logo img {
    width: 53px;
    height: 64px;
    position:reltive;
    bottom:5px
}


.nav ul li span {
    color:black ;
    font-weight:bold ;
    width:100%;
    height100%;
}

.nav ul li {
    flex-grow: 0.5;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 4px;
    width: 70px;
    height: 100%;
    border-radius: 8px;   
}

.nav ul li:hover {
    background-color: rgb(240, 240, 240) ;
    color: black;
    cursor: pointer;
}


.nav .state  button:nth-child(1):hover{
    background-color: rgb(242, 238, 238);
    color: black;
}

.para {
    width: 200px;
    margin: auto;
    background-color: rgb(218, 132, 132);
}
        
ul li span a {
    color: black !important;
    width:100%;
    height:100%;
  display:flex;
  justify-content:center;
  align-items:center;
  text-decoration:none !important;
  
}

.container {
      display:flex;
      flex-direction:column;
      justify-content:space-between;
      align-items:center;
      height:800px;
      overflow-y:scroll;
      padding:20px 20px;
      margin-top:50px
}

.container   .offer{
      display:flex;
      justify-content:space-between;
      align-items:center;
      background:#eae5e5;
     padding:15px;
      margin:15px;
}
.container  .offer img{
        width:100px;
        height:100px;
        border-radius:100%;
        margin:0px 15px
}
.container .offer .Description p{
      color:black;
      font-size:18px
}
 button{
      color:black;
      width:150px;
      height:50px
      display:flex;
      justify-content:space-between;
      align-items:center;
      border-radius:8px;
      background:#c6bcbc;
      margin:0px 5px
}
button .bi{
      color:black;
      font-size:30px
}
 button span{
      position:relative;
      bottom:5px
}
.buttons {
    display:flex;
      justify-content:flex-end;
      align-items:center;
}
.modal {
    position:absolute;
    left:-150px !important;

}
.modal-content {
    height:800px !important;
    width:800px !important;
}
.modal-content table {
    width:100%;
    color:black
}
    </style>

</head>
<body>
        <!--navbar-->
<div class="nav">
    <div class="logo"><img src="./Logo CRO_0 (1).png" alt=""></div>
    <ul>
        <li><span><a href="index.php">Accueil</a></span></li>
        <li><span> <a href="theOffers.php">a propos</a></span></li>
        <li class="bg-secondary"><span><a href="theOffers.php">offers</a></span></li>
        <li><span><a href="theOffers.php">contacts</a></span></li>

    </ul>

    <div class="state">
        <button>s'inscrire</button>
        <button>se connecter</button>
    </div>
</div>

<div class="container">


    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
           <div class="buttons">
           <button class="postuler btn btn-light">
            <i class="bi bi-file-earmark-plus-fill"></i>
            <span>Postuler</span>
            </button>
            <button class="postuler btn btn-light">
            <i class="bi bi-zoom-in"></i>
            <span>Details</span>
            </button>
           </div>
                </div>
    </div>
    <div class="offer">
        <img src="./img/java.jpg" alt="">
        <div class="Description">
            <h5 class="title">Java FullStack Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
            <div class="buttons">
           <button class="postuler  btn btn-light">
            <i class="bi bi-file-earmark-plus-fill"></i>
            <span>Postuler</span>
            </button>
            <button class="postuler  btn btn-light " data-toggle="modal" data-target="#exampleModalCenter">
            <i class="bi bi-zoom-in"></i>
            <span>Details</span>
            </button>
           </div>
         </div>
    </div>
 
    <div class="offer">
        <img src="./img/Angular.png" alt="">
        <div class="Description">
            <h5 class="title">Angular Senior frontend</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
            <div class="buttons">
           <button class="postuler  btn btn-light">
            <i class="bi bi-file-earmark-plus-fill"></i>
            <span>Postuler</span>
            </button>
            <button class="postuler  btn btn-light">
            <i class="bi bi-zoom-in"></i>
            <span>Details</span>
            </button>
           </div>
        </div>
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
            <div class="buttons">
           <button class="postuler">
            <i class="bi bi-file-earmark-plus-fill"></i>
            <span>Postuler</span>
            </button>
            <button class="postuler">
            <i class="bi bi-zoom-in"></i>
            <span>Details</span>
            </button>
           </div>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
            <div class="buttons">
           <button class="postuler">
            <i class="bi bi-file-earmark-plus-fill"></i>
            <span>Postuler</span>
            </button>
            <button class="postuler">
            <i class="bi bi-zoom-in"></i>
            <span>Details</span>
            </button>
           </div>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
    </div>
    <div class="offer">
        <img src="./img/python.png" alt="">
        <div class="Description">
            <h5 class="title">Python Senior Developper</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias inventore consequuntur dolorem unde, iste voluptatibus repellendus! Reprehenderit modi voluptatem facere, ducimus libero mollitia tenetur obcaecati nemo eum pariatur nostrum.</p>
        </div>
        
  
</div>
</div>
<div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <table>
                        <thead>
                            <tr>
                                <td>Subject</td><td>Date</td><td>Salary Post</td>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>Java Developer</td>
                                    <td>2024/02/26</td>
                                    <td>1200$</td>

                                </tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>