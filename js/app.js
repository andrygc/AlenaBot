//
//           ___   _       _____   __   _       ___   _____   _____   _____  
//          /   | | |     | ____| |  \ | |     /   | |  _  \ /  _  \ |_   _| 
//         / /| | | |     | |__   |   \| |    / /| | | |_| | | | | |   | |   
//        / / | | | |     |  __|  | |\   |   / / | | |  _  { | | | |   | |   
//       / /  | | | |___  | |___  | | \  |  / /  | | | |_| | | |_| |   | |   
//      /_/   |_| |_____| |_____| |_|  \_| /_/   |_| |_____/ \_____/   |_|   
// 
//                     ..::AlenaBot::..  INFORMATION PANEL
// .---------------------------------------------------------------------------.
// |       Developer: Andry Noilien Guzmán Cardoza                             |
// |       Phone: +5358511612                                                  |
// |       Email: andrynoilien123@nauta.cu | andrynoilien@gmail.com            |
// |       WhatsApp: +5358511612                                               |
// |       Telegram: +5358511612                                               |
// |       Info: http://www.facebook.com/Andry Noilien Guzmán Cardoza          | 
// |             http://www.twitter.com/@AndryCardoza                          |
// |       File: app.js                                                        |
// | ------------------------------------------------------------------------- |
// |       Company: CommunityWeb Inc.                                          |
// |       CommunityWeb (c) 2015-2016, Bad Boy. All Rights Reserved.           |
// |       CommunityWeb (c) 2016-2019, Bad Boy. All Rights Reserved.           |
// |       CommunityWeb (c) 2019-2021, Bad Boy. All Rights Reserved.           |
// '---------------------------------------------------------------------------'
// 
// 

const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");

const getMessage = (msg) => {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText;
      const chatBody = document.querySelector(".scroller");
      const divCpu = document.createElement("div");
      divCpu.className = "alena visible";
      divCpu.innerHTML = response;
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;
      chatBody.append(divUser);
      setTimeout(() => {
        chatBody.append(divCpu);
      }, 2000);
      //   console.log(divCpu);
    }
  };
  xhr.open("GET", "bot/chat.php?msg=" + msg, true);
  xhr.send();
};

btnSend.addEventListener("click", (e) => {
  e.preventDefault();
  if (chat.value == "") {
  } else {
    getMessage(chat.value);
    chat.value = "";
  }
});
