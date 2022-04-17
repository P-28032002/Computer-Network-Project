<?php
	header("Content-type: text/css; charset:UTF-8");
	
?>	
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;

}
  ::selection{
    color: #000;
    background: #fff;
  }
  nav{
    position: sticky;
    background: #1b1b1b;
    width: 100%;
    padding: 10px 0;
    z-index: 12;
  }
  nav .menu{
    max-width: 1250px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
  }
  .menu .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
  }
  .menu ul{
    display: inline-flex;
  }
  .menu ul li{
    list-style: none;
    margin-left: 7px;
  }
  .menu ul li:first-child{
    margin-left: 0px;
  }
  .menu ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .menu ul li a:hover{
    background: #fff;
    color: black;
  }
  a:visited {
    color: black;
    text-decoration: none;
  }
  .info{
    background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

  }
.data{
    margin-left:10px;
}