<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PSSI</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app2.css') }}">
</head>

<body class="chat-page">
    <div class="navbar">
        <a href="/home" class="navbar-logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <div class="navbar-title">E-PSSI</div>
        
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <button class="search-button" onclick="location.href='/talent'"><i class="fas fa-search"></i></button>
        </div>
    
        <div class="profile" onclick="toggleMenu(event)">
            <img src="{{ asset('img/fotoprofil.png') }}" alt="Profile">
            <span class="profile-name">Vini Sr</span>
            <div class="profile-menu" id="profileMenu">
                <a href="/profile">Profile</a>
                <a href="/login">Log out</a>
            </div>
        </div>
    </div>
    
    <div class="frame">
        <div class="menu-container">
            <ul class="menu-list">
                <li><a href="/home" onclick="activateMenuItem(this)"><img src="{{ asset('img/home.png') }}" alt="home">Home</a></li>
                <li><a href="/registration" onclick="activateMenuItem(this)"><img src="{{ asset('img/register.png') }}" alt="register">Register</a></li>
                <li><a href="/talent" onclick="activateMenuItem(this)"><img src="{{ asset('img/talent.png') }}" alt="talents">Talents</a></li>
                <li><a href="/onwatch" onclick="activateMenuItem(this)"><img src="{{ asset('img/onwatch.png') }}" alt="onwatch">On Watch</a></li>
                <li><a href="/chat" onclick="activateMenuItem(this)"><img src="{{ asset('img/chat.png') }}" alt="chat">Chat</a></li>
            </ul>
        </div>
        
        <div class="chat-container">
            <div class="chat-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-chevron-left" viewBox="0 0 16 16" style="margin-left: 1px; margin-right: 6px; cursor: pointer">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                  </svg>
                <div class="manager-info">
                    <div class="manager-img">
                        <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                    </div>
                    <div class="manager-name">Unai Emery</div>
                </div>
            </div>
            <div class="chat-messages">
                <div class="message manager-message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="message manager-message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie augue erat, vel placerat sapien cursus quis. Mauris nec turpis sit amet lacus pharetra placerat vitae vel odio.
                </div>
                <div class="message manager-message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="message user-message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="message manager-message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="message user-message">
                    lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                    orem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
            <div class="chat-input">
                <input type="text" placeholder="Text Message...">
                <button><i class="fa fa-paper-plane"></i></button>
            </div>
        </div>
    
    
        <div class="messages-container" onclick="location.href='/chat'">
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Isaac Guardiola</div>
                    <div class="text">Vamos!</div>
                </div>
                <div class="time">30s</div>
                <div class="badge">1</div>
            </div>
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">IShowSpeed</div>
                    <div class="text">YO CHAT IS THIS REAL?? 😱😱😱</div>
                </div>
                <div class="time">5min</div>
                <div class="badge">10</div>
            </div>
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Justin</div>
                    <div class="text">You Still Win The Game 👏</div>
                </div>
                <div class="time">12h</div>
            </div>
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Sean The Young</div>
                    <div class="text">Deal done ✅</div>
                </div>
                <div class="time">Yesterday</div>
            </div>
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Muslimino Rolando</div>
                    <div class="text">Thank you Mr Vini Sr!</div>
                </div>
                <div class="time">3d</div>
            </div>
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Muslimino Rolando</div>
                    <div class="text">Thank you Mr Vini Sr!</div>
                </div>
                <div class="time">3d</div>
            </div>
            <div class="message-list">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Muslimino Rolando</div>
                    <div class="text">Thank you Mr Vini Sr!</div>
                </div>
                <div class="time">3d</div>
            </div>
        </div>
    </div>
    
    <script>
        function toggleMenu(event) {
            event.stopPropagation();
            var menu = document.getElementById("profileMenu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    
        document.addEventListener("click", function(event) {
            var profileMenu = document.getElementById("profileMenu");
            var profile = document.querySelector(".profile");
            if (!profile.contains(event.target)) {
                profileMenu.style.display = "none";
            }
        });
    
        document.querySelector(".profile-menu").addEventListener("click", function(event) {
            event.stopPropagation();
        });

        function activateMenuItem(item, event) {
            event.preventDefault();
            document.querySelectorAll('.menu-list li a').forEach(link => {
                link.classList.remove('active');
            });
            item.classList.add('active');
            window.location.href = item.getAttribute('href');
        }

        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('.menu-list li a').forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    </body>
    </html>