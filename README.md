# Sessions-PHP
### **PHP Sessions**
These sessions have session variables that store all the necessary information into a temporary file. By default, it will destroy this file when you close the website. Thus, to put it simply, a session in PHP helps in storing information about users and makes the data available to all the pages of a website or application until you close it.  
#### Key Concepts:

- **Session Start:** Sessions are started using the `session_start()` function at the beginning of each PHP page that needs to use session variables.

- **Session Variables:** Session variables are used to store data that needs to be accessible across different pages of a website during a user's visit.

- **Session ID:** Each user is assigned a unique session ID, typically stored in a cookie or passed through the URL. The session ID allows the server to associate data with a specific user.

- **Session Super Global:** PHP provides a special super global array `$_SESSION` to store and access session variables.


## Page 1:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/97a54a67-d3e1-4772-a416-895512a4cccf)

## Page 2:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/1d8c3e3e-aedb-4205-aaa8-c71b94a609c6)

## Page 3:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/f81579f0-d9d7-4f20-bec8-28148a9e3692)

## Page 4:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/f62836f9-3211-423b-a026-a3071190c9fe)

## Page 5:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/69f52baf-3c60-435d-a88c-78e262343f8c)

## Page 6:
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/e7aa7296-7fd9-4a3d-87a7-19d9a18951f9)

## Inserting feedback from multiple pages
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/c1612812-bdb9-4e7c-ba40-1fe94af1638d)

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

### XAMPP
XAMPP is a popular software package that allows you to set up a local web server environment on your computer. It stands for "X" (cross-platform), "Apache" (web server), "MySQL" (database), "PHP" (scripting language), and "Perl" (programming language).

To run website on XAMPP, follow these steps:

### Install XAMPP: First, download XAMPP from the Apache Friends website (https://www.apachefriends.org/).

### Start XAMPP:

Once installed, open XAMPP control panel.
Start the Apache and MySQL services by clicking the "Start" buttons next to them for running a web server and database.
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/ecf83cc6-063d-4903-9055-dd08be920f48)


### Create a Project Folder:

Create a new folder in the **"htdocs"** directory of your XAMPP installation. By default, this directory is located at `"C:\xampp\htdocs"` on Windows or `"/opt/lampp/htdocs/"` on Linux.
Place your website files (HTML, CSS, JavaScript, etc.) inside this folder.
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/e5fdb379-bc8c-468a-a8db-30ef49d60bda)


### Access Your Website:

Open your web browser and enter the following URL: "http://localhost/your-folder-name/home.html". Replace "your-folder-name" with the name of the folder you created in step 3 and "home.html" with the name of your main HTML file.
For example, if your main HTML file is "index.html" and your folder name is "my-website," the URL will be "http://localhost/my-website/index.html".  
In this case it's `TMJ` folder name and these are the files, gif's, photos present in these folder.
![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/85ba9f34-e7e7-429e-996c-d8d57e0f78fe)


### Test Your Website:
Your website should now be running locally on your computer via XAMPP. You can test it in your browser, just like you would on a live web server.
Remember that while using XAMPP, your website is only accessible on your local machine. Other devices won't be able to access it over the internet. XAMPP is primarily meant for development and testing purposes.

Additionally, if your website uses server-side scripting languages like PHP, you'll need to place those files in the same folder as your HTML files, and XAMPP will automatically execute the PHP scripts when accessed through the browser.

![image](https://github.com/Tanvi-Jain01/Sessions-PHP/assets/123053700/242e7ed2-f336-413f-a9cb-2e577f6c8aa1)






