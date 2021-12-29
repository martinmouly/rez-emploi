<!doctype html>
<head>
    <meta charset="utf-8">
    <script src="webroot/js/functions.js"></script>
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "stylehome.css">
</head>
<body>
    <nav>
        <div class = "nav-left">
            <img src = "images/logo.png" class = "logo"onclick="location.href='index.html'">
            <ul>
                <li><img src = "images/notification.png" ></li>
                <li><img src = "images/inbox.png" onclick="location.href='messagerie.html'">></li>
                <li><img src = "images/job.png" onclick="location.href='jobs.html'"></li>
              </ul>
        
        </div>
        <div class = "nav-right">
            <div class ="search-box">
                <img src = "images/search.png">
                <input type ="text" placeholder = "Search">
            </div>
            <div class = "nav-user-icon">
                <a onclick="getProfile()">
                    <img src = "images/profile-pic.png" >
                </a>

                

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="left-sidebar" id = "cprofile">
            <div class="imp-links">
                <a href="#"><img src = "images/news.png">News</a>
                <a href="#"><img src = "images/friends.png" onclick="location.href='listppl.html'">Friends</a>
                <a href="#"><img src = "images/group.png">Group</a>
                <a href="#"><img src = "images/watch.png">watch</a>

            </div>

        </div>
        <div class="main-content"id = "centerprofile">
            <?php
            $nom ='Buterin ';
            $prenom = 'vitalik';
            $pp = 'images/vitalik.jpg';
            $small_description ='ethereum co-founder, met Axel Battut in july 2021';
            $more1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni";
            $experience1 = array("logo"=>'images/ethereum.png', "title"=>'Founder of ethereum', "field"=>"cryptos",'date'=>'2014 -','more'=>$more1,'date'=>'10/12/2016');
            $experience2 = array("logo"=>'images/bitcoin.png', "title"=>'bitcoin contributor', "field"=>"cryptos",'date'=>'2010-2015','more'=>$more1,'date'=>'10/12/2014');
            $experiences = array($experience1,$experience2);
            // info profile 
            echo "<div class='info-profile'>               
                    <img src= '$pp' >                
                    <div>
                        <h4>$prenom $nom</h4>
                        <p>$small_description</p>
                            <div>
                                <button id='contact' onclick='goChat()'> Contacter</button>
                                <button>'Ajouter en ami'</button>
                            </div>
                    </div>
                </div>";
                // display one experience
            function affExp($experience)
            {
                echo "
                
            <h4>Experience</h4>
            <div class='exp'>
            <div class='info-profile'>
                
                <img src={$experience['logo']} id='compagny' >
                
                <div>
                    
                    <h4>{$experience['title']}</h4>
                    <h6>{$experience['field']}</h6>
                    <h5>{$experience['date']}</h5>
                    
                    </div>
                    

                </div>
                <p>{$experience['more']}</p>
            <h6>added on the :{$experience['date']}  </h6>
            </div>
            ";}
            // display all experiences 
            function affAllExp($experiences){
                foreach ($experiences as $exp){
                    affExp($exp);
                }
            }
            affAllExp($experiences);
            ?>
            
        </div>









        <div class="right-sidebar" id = "cprofile">
            <div class="sidebar-title">
                <h4>Events</h4>
                <a href = "#">See All</a>
            </div>

            <div class="event">
                <div class="left-event">
                    <h3>18</h3>
                    <span>March</span>
                </div>
                <div class="rightleft-event">
                    <h4>Event 1 </h4>
                    <p>description</p>
                    <a href="#">More info</a>
                </div>
            </div>
            <div class="sidebar-title">
                <h4>Publicité</h4>
                <a href = "#">close</a>
            </div>
            <img src="images/advertisement.png" class="sidebar-ads">
            <div class="sidebar-title">
                <h4>Conversation</h4>
                <a href = "#">hide chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/member-1.png" >
                </div>
                <p>Prenom Nom</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-2.png" >
                </div>
                <p>Prenom2 Nom2</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-3.png" >
                </div>
                <p>Prenom3 Nom3</p>
            </div>

        </div>
        
    </div>
</body>
<html>