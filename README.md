# BaxiApi
A simple text Api endpoint for Baxi

# How to use
1. run `git clone https://github.com/OfficialOzioma/BaxiApi.git`
2. cd into the directory where it was cloned
3. run `php artisan serve` - to start the php server
4. open **routes/api.php** and change the **Route::post** to **Route::get**, to prevent 	errors when running opening it on the browser
5. if your have Postman installed, don't change the Route::post in routes/api.php
7. on the browser or Postman type the following url 
	http://127.0.0.1:8001/api/eko - for Eko the electricity payment
	http://127.0.0.1:8001/api/dstv - for dstv payment.

# Note:
Because this a test api, i don't have the all the complete data, such as agentId and agentReference



