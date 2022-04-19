<!-- 
          ___   _       _____   __   _       ___   _____   _____   _____  
         /   | | |     | ____| |  \ | |     /   | |  _  \ /  _  \ |_   _| 
        / /| | | |     | |__   |   \| |    / /| | | |_| | | | | |   | |   
       / / | | | |     |  __|  | |\   |   / / | | |  _  { | | | |   | |   
      / /  | | | |___  | |___  | | \  |  / /  | | | |_| | | |_| |   | |   
     /_/   |_| |_____| |_____| |_|  \_| /_/   |_| |_____/ \_____/   |_|   

                    ..::AlenaBot::..  INFORMATION PANEL
.---------------------------------------------------------------------------.
|       Developer: Andry Noilien Guzmán Cardoza                             |
|       Phone: +5358511612                                                  |
|       Email: andrynoilien123@nauta.cu | andrynoilien@gmail.com            |
|       WhatsApp: +5358511612                                               |
|       Telegram: +5358511612                                               |
|       Info: http://www.facebook.com/Andry Noilien Guzmán Cardoza          | 
|             http://www.twitter.com/@AndryCardoza                          |
|       File: bot.php                                                       |
| ------------------------------------------------------------------------- |
|       Company: CommunityWeb Inc.                                          |
|       CommunityWeb (c) 2015-2016, Bad Boy. All Rights Reserved.           |
|       CommunityWeb (c) 2016-2019, Bad Boy. All Rights Reserved.           |
|       CommunityWeb (c) 2019-2021, Bad Boy. All Rights Reserved.           |
'---------------------------------------------------------------------------'

-->

<?php
class Bot
{
    private $name = "Alena";
    private $gender = "Robot";

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function hears($message, callable $call)
    {
        $call(new Bot);
        return $message;
    }

    public function reply($response)
    {
        echo $response;
    }

    public function ask($question, array $questionDictionary)
    {
        $question = trim($question);
        foreach ($questionDictionary as $questions => $value) {
            if ($question == $questions) {
                return $value;
            }
        }
    }
}
