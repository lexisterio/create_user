## create_user
- By: Lexi Sterio

## Prerequisites
- Atom
- Terminal
- PHPmyAdmin

## Websites used for reference
- http://php.net/manual/en/function.mail.php

## Step 1
- Research and Create user (done in class)

## Step 2
- After new user is created an email is sent letting them know their username, password and url to login. 

# Step 3
- Account gets locked out after 3 failed attempts. In order to do this, you have to create another SESSION variable to save the failed attempts
- You need to create another column in the tbl_user in order to save the status of the user //

## STEP 4
- For the user to receive a welcome message based on the hour of the day, we need to get the hour of the day with the function date using the parameter ("G")
- There are 3 messages the user will receive based on the hour of the day. For 10am and earlier it will be goodmorning, for 17(5:00)and later will be good afternoon and > 20(8:00) will be goodnight

## Authors
- Lexi Sterio
