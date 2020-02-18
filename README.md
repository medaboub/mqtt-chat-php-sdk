# mqttchat-php-sdk

## Introduction
Since you do not have direct access to MQTTCHAT databases, you need an SDK as an intermediary to add your users to MQTTCHAT, edit user's informations etc ... The SDK is based on calls to REST services hosted on our web servers. All queries are authenticated using OAuth2 protocol.<br>
In this documentation we will see differents operations you can do with mqttchat PHP SDk.

## Setup

Before you can use the SDk, you must install it using PHP Composer or download latest release from this repository and extract it in your website root directory.<br>
The easiest way is to use php Composer,you should first install <a href="https://getcomposer.org/download/">php composer</a> software 
then  install the sdk using this command line.<br>
```
composer require med_aboub/mqttchat-php-sdk</code>
```

## Configuration

You must now get your REST authentication parameters **App_ID** and **APP_secret** wich are specific to each domain and are necessary to authenticate with REST services.
<br>
To obtain them, you must first create <a href="https://mqttchat.telifoun.com">MQTTCHAT account</a> then activate a free or paied subscription for your domain. Once activation is successful, you will receive in your client area (settings tab) the two parameters App_ID and APP_secret.
<br>
yous should add theses two parameters to config file of your SDK located at : <code>src/telifoun/mqttchat/config.php</code>
```php
<?php
namespace telifoun\mqttchat; 
 class config{     
    /** telifoun mqttchat app_id **/
    const APP_ID="mqttchat-xxxxxxxx";
    /** telifoun mqttchat app_secret **/
    const APP_SECRET="mqttchat-xxxxxxxxxxxxxxxx";  
}    
```
## Users Management

### Add new user
Adding a new user to MQTTCHAT is done in two steps: first define user basic informations with <code>Set</code> function then add it to your domain users list using <code>Add</code> function.

```php
require_once vendor/autoload.php;
$user=new telifoun\mqttchat\user();
$user->Set(1,"name","surname","profile_link","avatar_link",telifoun\mqttchat\user::GENDER_MALE);
$result=$user->Add();
if ($result["ok"]){
var_dump($result["response"]);
}else{
echo $result["response"]["error"];
}
```
If you don't like to add profile link or avatar link keep fields empties to be ignored.

### Edit user 

To edit existing user information’s, you should define the userid , informations to update then call <code>Update</code> function.

```php
require_once vendor/autoload.php;
$user=new telifoun\mqttchat\user();
$user->_setUserid(1);
$user->_setAvatarLink("http://www.exemple.com/images/avatar_men2.png");
$user->_setName("Foulen 2");
$result=$user->Update();    
```
And to verify that user information’s are changed, you can use <code>Get</code> function. Do not forget to specify user userid before.

```php
require_once vendor/autoload.php;
$user=new telifoun\mqttchat\user();
$user->_setUserid(1);
$result=$user->Get();
```
### Remove user
If you want to delete a user, the <code>Remove</code> function is made for that.
```php
require_once vendor/autoload.php;
$user=new telifoun\mqttchat\user();
$user->_setUserid(1);
$result=$user->Remove();
```
