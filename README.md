# QR Codes on Tickets System with Payment
The project is a website that can scan, identify and process a virtual ticket in a closed loop scenario by creating a virtual profile (Service Provider Account + Customer Account).
A service provider creates an account, and generates a QR Code holding ticket info (first name, last name, date, location, price, Service provider ID) and pays the ticket through an open source payment platform.
A customer creates an account, and scans the QR Code via file upload.  

# Assumptions
1. Assume that there are only two users, one customer and one provider.
2. Assume that the ticket price is generated randomly for every transaction payment.
3. Assume the payment card number is “4242424242424242” and the expired date is “12/21”.


# GUI Structure
1. Login Page

    This page is used to login to the website where both customer and service provider users can login to the website.
    The privileges of the user is determined depending on the type of the user so each user can access only pages he has access rights to.
    
![Screenshot](GUIimages/login.png)

2. Signup Page

    This page is used to create an account on the website.
    So the user must fill all the required data to sign up on the website.

![Screenshot](GUIimages/signup.PNG)


3. Payment Page

    A service provider uses this page to complete the payment method and generate the qr code.
![Screenshot](GUIimages/payment.png)
![Screenshot](GUIimages/qr.PNG)



4. QR Page

# How to run?
1. Install Xampp and PHP 
2. Clone the project code
3. Go to the project root “QR-Codes-on-Tickets-System-with-Payment-master”
4. Run the following commands:
  - composer require khanamiryan/qrcode-detector-decoder
  - composer require “braintree/braintree_php”
5. Create new database called “qrcode” in PhpMyAdmin
6. Inside the database, Import “qrcode.sql” file
7. Run Xampp local host
8. Go to local host link in browser 

# Demo 
https://youtu.be/hf88VQUZpOQ
[![Watch the video](GUIimages/login.png)](https://youtu.be/hf88VQUZpOQ)

# Libraries and APIs used
1. Braintree API  for payment method
2. Phpqrcode library for generating QR-Code
3. Php-qrcode-detector-decode library for scanning QR-code

# References
- http://phpqrcode 1.sourceforge.net
- https://github.com/braintree/braintree_php
- https://github.com/khanamiryan/php-qrcode-detector-decoder
- https://www.braintreepayments.com/sandbox
