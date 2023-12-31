# Sessions-PHP
### **PHP Sessions**
These sessions have session variables that store all the necessary information into a temporary file. By default, it will destroy this file when you close the website. Thus, to put it simply, a session in PHP helps in storing information about users and makes the data available to all the pages of a website or application until you close it.  

### This repository is made to explore session in PHP, It takes feedback from user from 6 different pages and inserts it into database, As we are using multiple pages we can either use cookies or session to store the data, Here I am using session to store the feedback of user.The main objective of this repository is to get familiar with the use of session techincally.

## Page 1:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/97a54a67-d3e1-4772-a416-895512a4cccf)



## Page 2:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/5a07f593-dd51-4531-85ee-758d37f4b328)

## Page 3:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/294c2e2f-dc4f-4886-bd63-d031cc8834d5)


## Page 4:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/f62836f9-3211-423b-a026-a3071190c9fe)

## Page 5:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/69f52baf-3c60-435d-a88c-78e262343f8c)

## Page 6:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/e7aa7296-7fd9-4a3d-87a7-19d9a18951f9)

## Inserting feedback from multiple pages
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/c1612812-bdb9-4e7c-ba40-1fe94af1638d)

#### Key Concepts:

- **Session Start:** Sessions are started using the `session_start()` function at the beginning of each PHP page that needs to use session variables.

- **Session Variables:** Session variables are used to store data that needs to be accessible across different pages of a website during a user's visit.

- **Session ID:** Each user is assigned a unique session ID, typically stored in a cookie or passed through the URL. The session ID allows the server to associate data with a specific user.

- **Session Super Global:** PHP provides a special super global array `$_SESSION` to store and access session variables.

#### Working with Sessions:

- **Setting Session Variables:** To set a session variable, simply assign a value to it using the `$_SESSION` array. For example: `$_SESSION['username'] = 'john_doe';`.

- **Accessing Session Variables:** To access a session variable, use the `$_SESSION` array with the variable name. For example: `$username = $_SESSION['username'];`.

- **Checking Session Variable Existence:** To check if a session variable exists, use the `isset()` function. For example: `if (isset($_SESSION['username'])) { /* Do something */ }`.

- **Destroying a Session:** To end a session and clear all session data, use `session_destroy()` function. However, this does not unset the session variables immediately; they will still be accessible until the next page request.


## The following things occur when a session is started:

It creates a random `32 digit hexadecimal` value as an identifier for that particular session. The identifier value will look something like `4af5ac6val45rf2d5vre58sd648ce5f7.`
It sends a cookie named PHPSESSID to the user’s system. As the name gives out, the PHPSESSID cookie will store the unique session id of the session.
A temporary file gets created on the server and is stored in the specified directory. It names the file on the hexadecimal id value prefixed with `sess_.` Thus, the above id example will be held in a file called `sess_4af5ac6val45rf2d5vre58sd648ce5f7.`
PHP will access the PHPSESSID cookie and get the unique id string to get session variables’ values. It will then look into its directory for the file named with that string.

When you close the browser or the website, it terminates the session after a certain period of a predetermined time.
