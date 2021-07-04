
<html>  

  <head>
    <style>

.wrap {
  height: 10%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  width: 450px;
  height: 140px;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 800;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #A2DCE7;
  box-shadow: 0px 15px 20px rgba(153, 221, 255, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

</style>
 </head>
 <body style="background-color:AliceBlue;">


 <form method="POST" action="slider.php">
    <div class="wrap" style="  height: 50%;">
      <input class="button" type="submit" name="Arm Controling" value="Arm Controling"  >
    </div>
   </form>

 <form method="POST" action="control_panel.php">
 	<div class="wrap" style="  height: 0%;">
      <input class="button" type="submit" name="Base Controling" value="Base Controling">
    </div>
   </form>


 </body>  
</html> 

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "7336f65a-cade-4c2d-af09-3142970ee45e", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "577cf4c6-bc6d-45f2-8f67-817b73ac8329", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>