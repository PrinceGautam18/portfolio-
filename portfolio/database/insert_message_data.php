<html>
    <head>
        <title>

        </title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: 'Nunito',sans-serif;
}
html{
    font-size: 100.5%;
    overflow-x: hidden;
}
body{
    background-color: rgb(1, 1, 42);
    color: white;
}
body a{
  
    text-decoration: none;
}
section{
    min-height: 100vh;
    padding: 6rem 15% 2rem;

}
h2{
    display: flex;
    justify-content: center;
}
.header{
    color:rgb(189, 193, 221) ;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 9%;
    background: rgb(1, 1, 42);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
.logo{
    font-size: 2rem;
    color: white;
    font-weight: 700;
    cursor:default;
}
.header .navbar{
    font-size: 1.2rem;
    color: white;
    margin-left: 4rem;
    font-weight: 700;
   
}
.header .navbar a {
    padding-left: 16px;
}
.header .navbar a:hover,
.header .navbar a.active{
    color: white;
}
#menu-icon{
    font-size: 3.6rem;
    color: white;
    display: none;


}
body{
    background:green;
}

        </style>
    </head>
    <body>
        
    <header class="header">
            <a href="#" class="logo">Portfolio</a>
            <i class="fa-solid fa-bars" id="menu-icon"></i>
            <nav class="navbar">
                <a href="portfolio.php" class="active">Home</a>
                <a href="about.php">About</a>
                <a href="#skill">skill</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>
    </body>
</html>