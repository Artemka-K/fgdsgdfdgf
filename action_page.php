<?php
echo 'через несколько секунд мы вас перенесём на страницу steam';

header ('Refresh: 5; url=https://steamcommunity.com/oauth/loginform/?goto=%2Foauth%2Flogin%3Fresponse_type%3Dtoken%26client_id%3DE9AECC2B')
?>