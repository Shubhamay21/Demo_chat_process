<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
    /* .msger
    {
        display:none;
    } */
    .btn{
    position:absolute;
    height:100px;
    width:100px;
    border:0px solid transparent;
    /* border: 2px solid rgb(232, 227, 227); */
    /* background-color: rgb(118, 123, 220); */
    top:80%;
    right:8%;
    border-radius:50px;
    background-image:url("images/chat-logo2.png");
    background-size:cover;
    }
    .msg-block{
        display:block;
        margin-bottom:10px;
    }

    .btn-1{
        border: 2px transparent;
        background-image:url("images/Close.png");
        height:25px;
        width: 25px;
        background-size:cover;
        margin-left: 700px;
        
    }
    .userright
    {
        /* display: block;
        float: right;
         */
        background-color: coral;
         /* padding: 5px; */
         max-width: 145px;
         padding: 10px;
        margin: 45px 3px;
        border-radius: 15px;
        /* background: var(--left-msg-bg); */
        border-top-left-radius: 0;
            /* border-bottom-left-radius: 0; */
    }
    .userleft
    {
        /* display: inline-block; */
        
        background-color: #83e027;
        float:right;
         /* padding: 5px; */
         max-width: 150px;
         padding: 10px;
        margin: -45px 0px;
        border-radius: 15px;
        /* background: var(--left-msg-bg); */
        border-top-right-radius: 0;
            /* border-bottom-left-radius: 0; */
    }
    #ul2{
        list-style-type: none;
    }
    #ul{
        width: 840px;
        margin:-48px 0px;
        list-style-type: none;
    }
    </style>
</head>
<body>
    <section class="msger">
        <header class="msger-header">
            <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i><span style="font-family: cursive;font-size:18px;"><b>Chat System</b></span>
            <button class="btn-1"></button>
            </div>
            <div class="msger-header-options">
            <span><i class="fas fa-cog"></i></span>
            </div>
        </header>
  
        <main class="msger-chat">
            <div class="msg-block">
            <div class="msg left-msg">
                <div id="msg_user2">
                <div class="msg right-msg">
                <div id="msg_user1">
                    <ul id="ul">
                     
                   
                    </ul>
                </div>
                    </div>
         
                </div>
              
            </div>
            </div>
                
            <!-- <div class="msg-block">
                <div class="right-msg">
                    <div id="msg_user2">
                        <ul id="ul2">

                        </ul>
                    </div>
                </div>
            </div> -->
        </main>
   
        <form class="msger-inputarea">
            <input type="text" class="msger-input" name="msg" id="msg" placeholder="Enter your message...">
            <button type="submit" id="btn_user1" name="btn_user1" onclick="send_text(event)" class="msger-send-btn">User 1</button>
        </form>
        <form class="msger-inputarea">
            <input type="text" class="msger-input" name="msg2" id="msg2" placeholder="Enter your message...">
            <button type="submit" id="btn_user2" name="btn_user2" onclick="send_texted(event)" class="msger-send-btn">User 2</button>
        </form>
  
    </section>
   
<button class="btn" onclick="open_msg()"></button>
<script>
    $(document).ready(function(){
    $(".btn").click(function(){
        $(".msger").toggle();
    })
    $(".btn-1").click(function(){
        $(".msger").hide();

    })
    });
    function send_text(event)
    {
        event.preventDefault();
        // console.log("hello");
        var txt2=document.getElementById("msg").value;
        if(txt2 == "")
        {
            alert("Can't be Empty");
        }else{
        // console.log(txt2);
        var ul=document.getElementById('ul');
        // // console.log(ul);
        var li=document.createElement('li');
        // // console.log(li);
        li.classList.add("userright");
        li.innerHTML=txt2;
        ul.appendChild(li);
        var msg2=document.getElementById("msg_user1");
        msg2.appendChild(ul);        
        // console.log(msg);
        
        // console.log(msg);
        refresh();
        }
    }
    function refresh(){
        var text=document.getElementById("msg");
        text.value=""; 
        }

    // btn sending msg here
    function send_texted(event)
    {
        event.preventDefault();
        // console.log("hello");
        var txt=document.getElementById("msg2").value;
        if(txt == "")
        {
            alert("Can't be Empty");
        }else{
        
        // console.log(txt);
        var ul=document.getElementById('ul');
        // console.log(ul);
        var li=document.createElement('li');
        // console.log(li);
        li.classList.add("userleft");
        li.innerHTML=txt;
        ul.appendChild(li);  
        var msg=document.getElementById("msg_user2");
        msg.appendChild(ul);      
        // console.log(msg);
        
        // console.log(msg);
  
        refreshed();
        }
    }
    
     function refreshed(){
        var txt=document.getElementById("msg2");
        txt.value=""; 
    }

    
</script>
</body>
</html>