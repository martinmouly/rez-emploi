<?php
class Side{

    function navbar(){
   
        echo"<nav>
        <div class = 'nav-left'>
            <img src = 'images/logo.png' class = 'logo'>
            <ul>
                <li><img src = 'images/notification.png' ></li>
                <li><img src = 'images/inbox.png' ></li>
                <li><img src = 'images/job.png'onClick=`document.location.href='jobs.html'`></li>
              </ul>
        
        </div>
        <div class = 'nav-right'>
            <div class ='search-box'>
                <img src = 'images/search.png'>
                <input type ='text' placeholder = 'Search'>
            </div>
            <div class = 'nav-user-icon'>
                <a onclick='UpdateStatus()' value='Status Update'>
                    <img src = 'images/profile-pic.png' >
                </a>

                

            </div>
        </div>
    </nav>";
    }
    function left(){
        echo'<div class="left-sidebar" id ="cprofile">
        <div class="imp-links">
            <a href="#"><img src = "images/news.png">News</a>
            <a href="#"><img src = "images/friends.png" onclick="location.href=`listppl.html`">Friends</a>
            <a href="#"><img src = "images/group.png">Group</a>
            <a href="#"><img src = "images/watch.png">watch</a>

        </div>
        </div>';
    }
    function right(){
        echo'<div class="right-sidebar"id ="cprofile">
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

    </div>';
    }
}
?>