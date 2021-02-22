 <?php

$con=mysqli_connect("localhost","root","","form");

if(isset($_POST['name1']) && !empty($_POST['name1']))
{
$name1=$_POST['name1'];
 $age1=$_POST['age1'];
 $gender1=$_POST['gender'];
 $ten1=$_POST['ten1'];
 $twelve1=$_POST['twelve1'];
 $degree1=$_POST['degree'];
 $native1=$_POST['native1'];
 $married1=$_POST['married'];
 $hobby1=$_POST['hobby1'];

 
mysqli_query($con,"insert into crud(username,age, gender, 10th, 12th, degree, native1, state1, hobby)values('$name1','$age1','$gender1','$ten1','$twelve1','$degree1','$native1','$married1','$hobby1')");


}
else{

    echo"not updated";
}
  $data=mysqli_query($con,"select * from crud;");
$data=mysqli_fetch_all($data,MYSQLI_ASSOC);

// $data=mysqli_query($con,"select * from crud;");
// $data=mysqli_fetch_all($data,MYSQLI_ASSOC);

?>
<html>
<head>
    <title>crud</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <div class="parent">
        <form method="POST" action="crud.php">
              <h2 class="form">
                 form
              </h2>
         <p class="name">name</p>
         <p class="age">age</p>
         <p class="gender">gender</p>
         <p class="ten">10th grade with %</p>
         <p class="twelve">12th grade with %</p>
         <p class="degree">degree</p>
         <p class="native">native</p>
         <p class="marriage">marital states</p>
         <p class="hobby">hobby</p>
         <input type="text" id="name1" name="name1" placeholder="enter your name">
         <input type="date" name="age1" id="age1" placeholder="enter your age">
         <input type="text" name="ten1" id="ten1" placeholder="%">
         <input type="text" name="twelve1" id="twelve1" placeholder="%">
         <input type="text" name="native1" id="native1" placeholder="enter your nativity">
         <input type="text" name="hobby1" id="hobby1" placeholder="enter your hobby">
         <input type="radio" id="male" name="gender" value="m">
       <label for="male" class="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="f">
       <label for="female" class="female">Female</label><br>
    
       <select id="degree1" name="degree">
           <option value="A">Associate degree </option>
           <option value="B">Bachelor's degree </option>
           <option value="M">Master's degree </option>
           <option value="D">Doctoral degree</option>
       </select>
         <input type="radio" id="married" name="married" value="m">
       <label for="married" class="married">married</label><br>
         <input type="radio" id="single" name="married" value="s">
       <label for="single" class="single">single</label><br>
         <input class="btn" name="go" type="submit" value="submit"></input>
       </form>
    </div>
    <div class="displayparent">
       <button type="submit" class="btn2">display form</button>
       <button type="submit" class="btn3">close form</button>
    </div>
    <div class="imagediv">
<img src="sucess.png" class="image"></img>
    </div>
    <div class="tablediv">
     
        <table class="mytable">
          <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
              
            
            <th>
              AGE
            </th>
            <th>
              GENDER
            </th>
            <th>
              10%
            </th>
            <th>
              12%
            </th>
            <th>
              DEGREE
            </th>
            <th>
              NATIVE
            </th>
            <th>
              STATUS
            </th>
            <th>
              HOBBY
            </th>
          </tr>
          </thead>
          <?php
          foreach($data as $da)
          {?>
          <tr>
            <td>
                <?php
                echo $da['id'];
                ?>
            </td>
            <td>
            <?php
                echo $da['username'];
                
                ?>
            </td>
            <td>
            <?php
                echo $da['age'];
                ?>
            </td>
            <td>
            <?php
                echo $da['gender'];
                ?>
            </td>
            <td>
            <?php
                echo $da['10th'];
                ?>
            </td>
            <td>
            <?php
                echo $da['12th'];
                ?>
            </td>
            <td>
            <?php
                echo $da['degree'];
                ?>
            </td>
            <td>
            <?php
                echo $da['native1'];
                ?>
            </td>
            <td>
            <?php
                echo $da['state1'];
                ?>
            </td>
            <td>
            <?php
                echo $da['hobby'];
                ?>
            </td>
          </tr>
          <?php
          unset($data);
          }
          ?>
        </table> 
    </div>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="go.js"></script>
    </body>
</html>