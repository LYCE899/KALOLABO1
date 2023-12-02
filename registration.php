

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="style.css">

    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}
body {
    margin: 0px;
    padding: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    position: relative;
    background-color: blue;
}
.header{
    background-color: #287265;
    height: 80px;
    margin: 10;
}
nav ul li
{ 
  list-style-type: none;
  display: inline-block;
  padding: 15px;  
}
ul li a{
  color: #fff;
  letter-spacing: 0.1rem;
}
ul li b{
  color: #fff;
  letter-spacing: 0.1rem;
  
}
ul li a:hover{
  color: #ffd358;
  text-decoration: underline;
  
}
.menu li{
  float: left;
  padding: 35px; 
}
.menu li a{
  text-decoration: none; 
}
form{
  padding: 10;
  text-align: left;
}
input[type="search"]{
  font-size: 10x;
}

.divclass {
    display: flex;
    justify-content: space-between; /* Ajuste l'espacement entre les boutons */
}
.button-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px; /* Ajoutez une marge en bas pour espacer les boutons du titre */
}


.Btn_add,
.Btn_modifier,
.Btn_supprimer {
    width: fit-content;
    margin-bottom: 20px;
    background-color: #2bc48a;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: left;
    border-radius: 6px;
    text-decoration: none; 
}

.Btn_add img {
    margin-right: 5px;
    height: 20px;
}
/*tableau*/
table {
    border-collapse:collapse;
    color: #404040;
}
th {
    font-size: 16px;
    border-bottom: 3px solid #ffcb61;
    padding: 5px 20px;
    font-weight: 500;
}
td {
    font-weight: 400;
    padding: 5px 30px;
    font-size: 14px;
    text-align: center;

}
img {
    height: 25px;
   
}
tr:nth-child(2n){
    background-color: #f6f8f8;
}
tr:nth-child(2n) td {
    border-bottom: 1px solid #e0e0e0;
    border-top:  1px solid #e0e0e0;
}
/*Form CSS*/
.form {
    background-color: #f6f8f8;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-radius: 6px;
}
.form form {
    display: flex;
    width: 350px;
    flex-direction: column;
}
.back_btn {
    color: blue;
    text-decoration: 0;
    display: flex;
    align-items: center;
}
.back_btn img {
    height: 16px;
    margin-right:5px ;
}
h2 {
    margin: 10px 0;
    font-weight: 500;
    text-transform: uppercase;
}
.erreur_message {
    color: red;
    font-size: 12px;
}
label {
    margin-top: 5px;
    text-transform: uppercase;
}
input{
    padding: 5px;
    border: 1px solid #999;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid #ffcb61;
}
input[type="submit"]{
    margin-top: 25px;
    background-color: blue;
    border: 1px solid #2bc48a;
    cursor: pointer;
    color: #fff;
    text-transform: uppercase;
}

    </style>

</head>
<body>
   
    <div class="form">
        <a href="index.php" class="back_btn">Back</a>
        <center><h2>registration</h2></center>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>First name</label>
            <input type="text" name="id">
            <label>Last name</label>
            <input type="text" name="nom">
            <label>Age</label>
            <input type="text" name="prenoms">
            <label>Email</label>
            <input type="email" name="age">
            <label>Password</label>
            <input type="password" name="Password"></br></br>
            <input type="submit" name="btn_send" value="SEND">
        </form>
       
    </div>
</body>
</html>
