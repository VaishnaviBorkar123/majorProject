
function OtherClick() {
  var categoryval = document.getElementById("category").value;
  if (categoryval == "Other") {
    //document.getElementById("Otherlbl").style.visibility="visible";
    //document.getElementById("Othertxtarea").style.visibility="visible";
    document.getElementById("profbtn").disabled=true;
    document.getElementById("projbtn").disabled=true; 
    document.getElementById("state").disabled=true;
    document.getElementById("category").disabled=true;
    document.getElementById("commentdiv").style.display="block";
    document.getElementById("emaildiv").style.display="block";
    document.getElementById("Emailbtn").style.visibility="visible";
    //let commentdiv = document.createElement("div");
    //commentdiv.className='form-group';
    //castDescription2.className='child-container';
  } else {
    document.getElementById("Emailbtn").style.visibility="hidden";
    document.getElementById("profbtn").disabled=false;
    document.getElementById("projbtn").disabled=false; 
    document.getElementById("state").disabled=false;
  }
  
}

function profbtnactivate()
{
  document.getElementsByName("formimp").submit();
  document.getElementById("formimp").action = "/majorProject/index.php";
  alert("hello");
  return true;
}

function projactivate()
{
  document.getElementsByName("formimp").submit();
  document.getElementById("formimp").action = "/majorProject/index.php";
  return true;
}