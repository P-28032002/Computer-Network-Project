/* CSS Document */
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

.img{
  background: url('img3.jpg')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 52px;
  font-weight: 600;
}
.center .btns{
  margin-top: 20px;
}
.center .btns button{
  height: 55px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
}
.center .btns button:first-child{
  color: #fff;
  background: none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
}
.center .btns button:last-child{
  background: white;
  color: black;
}

section{
    height:100vh;
    width:100%;
	  padding-top: 40;
	  background-color: #FBDA61;
	  background-image: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
    display: flex;
    align-items:center;
    justify-content: center;    
    flex-direction:column;
}
.container{
    margin-top:10px;
    width:90%;
    height:60vh;
    max-width: 500px;
    margin: auto;
    padding: 0px;
    box-shadow: 0px 0px 50px #00000010;
    background-image: linear-gradient(to right top, #100537, #00407a, #007db4, #00bddc, #00fff0);background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
    
    border-radius: 8px;
}
.form-group{
    width:100%;
    margin-top: 20px;
    font-size: 20px;
    
}
.form-group input,
.form-group textarea{
    width: 100%;
    padding: 5px;
    font-size: 18px;
    border: 2px solid rgba(128, 128, 128, 0.5);
    margin-top: 25px;
    height: 20%;
} 
textarea{
  resize: vertical;
	height: 30%;
}
button[type="submit"]{
    width: 100%;
    border: none;
    outline: none;
    padding:20px;
    font-size: 24px;
    border-radius: 8px;
    font-family: 'Montserrat';
    color: #000000;
    text-align:center;
    cursor: pointer;
    background-color:#ADD8E6;
    margin-top: 10px;
    transition: .3s ease background-color;
}
button[type="submit"]:hover{
  background-color:#0066cc;
  color: #ffffff;
	text-decoration: none;
}
.center .btns button a{
  text-decoration: none;
}