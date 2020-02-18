# mqttchat-php-sdk

## Introduction
Since you do not have direct access to MQTTCHAT databases, you need an SDK as an intermediary to add your users to MQTTCHAT, edit user's informations etc ... The SDK is based on calls to REST services hosted on our web servers. All queries are authenticated using OAuth2 protocol.
In this documentation we will see differents operations you can do with mqttchat PHP SDk.

## Setup

Before you can use the SDk, you must install it using PHP Composer or download it from this repository and extract it in your website root directory.<br>
The easiest way is to use php Composer, you can install the sdk using this command line.<br>
<code>composer require med_aboub/mqttchat-php-sdk</code>


## Configuration
