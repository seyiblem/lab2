<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>
.comment{
width: 270;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 7px solid #ccc;
border-radius: 4px;

}
</style>
   
   
</head>
<body>
<container>
<center>    
<form method="get" action="submit.html" onsubmit="return check_input_data();">  
<b>Name:</b> <input type="text" name="username" id="username" size= "45"  >&nbsp;<span id="errName" style="color:red;"></span>

<br><br>
    
<b>Age:</b> <select name="select_box" id="select_box" >
<option value="0">Select Age</option>
<option value="1">18 & Below</option>
<option value="2">18 & Above</option>
</select> &nbsp;  <span id="errAge" style="color:red;"></span> 
    
<br><br>
    
<b>E-mail:</b> <input type="text" name="useremail"  id="usermail" size="45"> &nbsp;<span id="errMail" style="color:red;"></span>
<br><br>
    
<b>Website:</b> <input type="text" name="website" id="website" size= "45"> &nbsp;<span id="errWebpage" style="color:red;"></span>
<br><br>
    
<b>Comment:</b> <textarea name="comment" id="comment" rows="4" cols="40"></textarea> &nbsp;<span id="errComment" style="color:red;"></span>
    
<br><br>
    
<b>Gender:</b> 
    
Male<input type="radio" name="gender" id="mgender" value = "Male" > 
Female<input type="radio" name="gender" id="fgender" value = "Female">  &nbsp;<span id="errGender" style="color:red;"></span>
<br><br>
<input name="submit" type="submit"  value="Submit" >  
</form>
</center>

</container>
<br> <br>
    <script lang="javascript">
    
function check_input_data()
{
    var uname = document.getElementById('username').value;
    var select_box = document.getElementById('select_box').value;
    var umail= document.getElementById('usermail').value;
    var web_site =document.getElementById('website').value;
    var comm =document.getElementById('comment').value; 
    var mgender = document.getElementById('mgender').checked;
    var fgender = document.getElementById('fgender').checked;
    
    var errName = document.getElementById('errName');
    
    //alert(mgender);
    //alert(fgender);
//    if (uname =="" || select_box=="0" || umail== "" || web_site=="" ||comm=="")
//    {
//    alert('Please input data !');  
//    }   
//    else if(!mgender && !fgender){
//        alert("select a gender");
//        return false;
//    } else
//        return true;
    
    if(uname == ""){
        errName.innerHTML = "Enter your name!";
      //  return false;
    } else {
        errName.innerHTML = "";
    }
    
     if(select_box=="0")
    {
    errAge.innerHTML = "Select Age Group!";
    //return false;
    } else {
        errAge.innerHTML = "";
    }
    
    
    if(umail=="")
    {
    errMail.innerHTML = "Enter a valid Email!";
    //return false;
    } else {
        errMail.innerHTML = "";
    }
    
    
     if(web_site=="")
    {
    errWebpage.innerHTML = "Enter a website!";
    //return false;
    } else {
        errWebpage.innerHTML = "";
    }
    
    
     if(comm=="")
    {
    errComment.innerHTML = "Drop your comments!";
    //return false;
    } else {
        errComment.innerHTML = "";
    }
    
      if (!mgender && !fgender)
       errGender.innerHTML = "Select a gender!";
    else{
        errGender.innerHTML = ""
       // return true;
    }
    
    valid = (uname != "" && select_box != "0" && umail != "" && web_site != "" && comm != "" && (mgender || fgender) );

    
    return valid;
      
  
}    
</script> 
</body>
</html>