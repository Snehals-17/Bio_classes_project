
<html lang="en">
<head>
    <link rel="stylesheet" href="css/popup.css">
    
    
    <style>
    
    @charset "utf-8";

/* CSS Document */

   
        .model-body{
           
            width: 100%;
            height: 100%;
        }




.quick-contact li{
	
    margin:10px 0px;
}
.ul li

{

list-style:none;

}
        



        .myform{
            
            
            width:100%;
            height: 100%;
        }




    
    
    
    
    </style>
</head>
<body>

<div class="container-fluid" style="padding:20px; background-color:black;margin-top:20px; 
font-family:Arial, Helvetica, sans-serif;">
 
     <div class="col-sm-12" style="color:white;"> 
            <h6 class="text-center">&copy;2017 DataCouncil-All Right Reserved | Design by Snehal Shivankar</h6>
        </div>
    
    
    <button type="button" class="btn btn-info btn-lg my_button" data-toggle="modal" data-target="#myModal">Enquiry</button>

 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    
    
      <!-- Modal content-->
     
        
        <div class="modal-body">
		    
    <button type="button" class="close" data-dismiss="modal" style="font-size: 42px; 
 color:black; height: 30px; width:40px;">&times;</button>
            
            
            
            
            
            
            
          
    <div id="contact-area">
      

      
            
            
            
               <div class="panel" style="display: block;">
        <div class="panelouter">
            <div class="panelfixer">
                 <div class="panelleft"> 
                    <b>Call us</b> +918087601850 <b>Email us</b> atharv11@gmail.com <b>Follow us </b> <a href="https://www.facebook.com/biologyclassesinpune/" target="_blank"  style="text-decoration:none; ">Biology By Atharv</a>
  <b>Locate us</b>

                        

Above Jijamata Bank,
Karve Nagar,Pune,
Maharashtra - 411052


 </div>
                <div class="panelright"> <b>We'd love to talk with you</b> Brief us your requirements below, and let's connect
                    <div class="quick-contact">
                        <form name="contactForm" method="post"  action="mail.php" onsubmit="return dn()">
                            <ul class="ul">
                                <li>
                                    <input id="Name" type="text" name="cname" class="toptxtbox namebg required" autocomplete="off" Placeholder="Name" required>
                                </li>
                                <li>
                                   
                                    <input   id="Email" type="email" type="text" name="cemail" class="toptxtbox emailbg required email" autocomplete="off" Placeholder="Email" required>
                                </li>
                                <li>
                                    <input id="Phone" pattern="[7-9]{1}[0-9]{9}"  type="text" name="cphone" class="toptxtbox phonebg required" autocomplete="off" Placeholder="Phone"  maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                                </li>
                                <li>
                                    <textarea name="cmsg" class="toptxtarea commentbg" Placeholder="Message"></textarea>
                                </li>
                                <li>
                                  
                                    
                                    <button type="submit" name="submit" class="sendbtn-2"></button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 
            
            
            
            
     

    </div>

</div>

       
  
    
  </div>
    </div>

    
    
    
    
    
    

<script>
function dn() {

    
     var name = document.getElementById("Name").value;
   
    if(name == "" ){
        alert("All fields are required!");
        return false;
    }

    else {
        alert("Thank you! Your message has been sent successfully.");
    }
}
</script>


</body>
</html>
