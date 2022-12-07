<?php

  function set_faked_data () 
  {
    $customers_data_json = '[{"index":0,"age":20,"eyeColor":"blue","name":"Puckett Branch","gender":"male","company":"FIREWAX","email":"puckettbranch@firewax.com","phone":"+1 (968) 479-2314"},{"index":1,"age":31,"eyeColor":"green","name":"Shelia Boyd","gender":"female","company":"LOCAZONE","email":"sheliaboyd@locazone.com","phone":"+1 (995) 468-3653"},{"index":2,"age":37,"eyeColor":"green","name":"Tameka Pacheco","gender":"female","company":"JUNIPOOR","email":"tamekapacheco@junipoor.com","phone":"+1 (840) 412-2533"},{"index":3,"age":37,"eyeColor":"green","name":"Franks Holmes","gender":"male","company":"ZILLACTIC","email":"franksholmes@zillactic.com","phone":"+1 (968) 563-3318"},{"index":4,"age":23,"eyeColor":"blue","name":"Oneil Clayton","gender":"male","company":"AMTAS","email":"oneilclayton@amtas.com","phone":"+1 (998) 556-2196"},{"index":5,"age":28,"eyeColor":"blue","name":"Jenna Edwards","gender":"female","company":"CUIZINE","email":"jennaedwards@cuizine.com","phone":"+1 (805) 406-2471"},{"index":6,"age":24,"eyeColor":"blue","name":"Claire Strong","gender":"female","company":"TERASCAPE","email":"clairestrong@terascape.com","phone":"+1 (851) 561-3299"},{"index":7,"age":33,"eyeColor":"brown","name":"Spencer Reyes","gender":"male","company":"EXOTERIC","email":"spencerreyes@exoteric.com","phone":"+1 (897) 509-2920"},{"index":8,"age":26,"eyeColor":"blue","name":"Gretchen Farrell","gender":"female","company":"BLUPLANET","email":"gretchenfarrell@bluplanet.com","phone":"+1 (892) 579-3020"},{"index":9,"age":38,"eyeColor":"blue","name":"Lupe Campbell","gender":"female","company":"SNORUS","email":"lupecampbell@snorus.com","phone":"+1 (864) 521-2530"},{"index":10,"age":26,"eyeColor":"brown","name":"Boone Cortez","gender":"male","company":"BARKARAMA","email":"boonecortez@barkarama.com","phone":"+1 (978) 404-2534"},{"index":11,"age":31,"eyeColor":"green","name":"Leta Riley","gender":"female","company":"ATOMICA","email":"letariley@atomica.com","phone":"+1 (992) 434-2713"}]';
    $customers_data = json_decode($customers_data_json, true);
    
    $orders_data_json = '[{"index":0,"price":135,"product":"motherboard","owner":"LOCAZONE"},{"index":1,"price":138,"product":"cpu","owner":"MULTRON"},{"index":2,"price":278,"product":"cpu","owner":"TRIBALOG"},{"index":3,"price":202,"product":"motherboard","owner":"ANDRYX"},{"index":4,"price":87,"product":"hid","owner":"CONFRENZY"},{"index":5,"price":355,"product":"gpu","owner":"COMVEX"},{"index":6,"price":348,"product":"gpu","owner":"GLEAMINK"},{"index":7,"price":360,"product":"hid","owner":"OHMNET"},{"index":8,"price":300,"product":"hid","owner":"CENTURIA"},{"index":9,"price":351,"product":"hid","owner":"JOVIOLD"},{"index":10,"price":40,"product":"cpu","owner":"ELECTONIC"},{"index":11,"price":251,"product":"cpu","owner":"SIGNIDYNE"},{"index":12,"price":272,"product":"audio","owner":"MANGLO"}]';
    $orders_data = json_decode($orders_data_json, true);

    $meme_data_json ='[{"index":0,"nombre":"sheldon","url":"https://pics.me.me/trying-to-learn-any-programming-language-100-just-a-little-7917454.png"}]';
    $meme_data = json_decode($meme_data_json, true);

    $tag_data_json = '[{"idTag":0, "texto":"gracioso"}]';
    $tag_data = json_decode($tag_data_json, true);

    $_SESSION["customers_data"] = $customers_data;
    $_SESSION["orders_data"] = $orders_data;
    
    if (!isset($_SESSION["meme_data"]))
      $_SESSION["meme_data"] = $meme_data;

  }

?>