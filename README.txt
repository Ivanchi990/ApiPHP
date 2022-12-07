Todas las pruebas las he realizado en la web https://reqbin.com/

-Un ejemplo de peticion por el post de crear un meme:

	+Ruta: http://localhost/php-api/meme
	+Content:

	{
  		"meme":{
    			"nombre":"trancas-barrancas",
   			"url":"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSzX4D6aQEPSeHgv5v5eVkhjynFSV1Mq-TqSlm_afChA&s",
   			"titSup":"trancas",
   			"titInf":"barrancas"
		},
    		"tag":{
      		"uno":"funny",
      		"dos":"cacota"
    		}
	}
	
	+Return: true