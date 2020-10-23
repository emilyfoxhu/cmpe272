# cmpe272
#### 1. Hosting/Web Programming Environment Setup
> Yahoo domain + Heroku hosting environment  
> company link: http://www.yi-playground.com/

#### 2. First Web Application
> •	Create / Makeup a company name  
•	Create a company web site  
•	The web site must contain the following sections:  
>> o	Home (the main page)  
o	About (Description about the company)  
o	Products/Services (The products/services that you are going to sell)  
o	News (Latest news about the company, products, etc.)  
o	Contacts (Company contacts)  (stored in text file(s) and use php to read into the web site.)  

The app will read from contacts.txt into the website.

#### 3. Secure Section Creation
> •	Add a secure section in the web site.  
•	The secure section holds a document listing the current users of your web site.  
•	The secure section requires login by an administrator.  
>> o	Use the userid and password authentication method to implement the login process.  

In contact page, there is a SECURE SECTION, click "log in to have a look!" to log in.  
The app will authenticate userid and password by comparing user input with password.txt.  
userid and password:  
> admin,admin123  
user,user123  
dog,bone  
cat,fish  
rabbit,carrot  
tiger,meat

#### 4. User Creation and Searching with Database
> •	Create a mySQL database.  
•	Create a user table that contains at least first name, last name, email, home address, home phone and cell phone.  
•	Create a User section/tab in web site.  
•	The User section should link to two forms:  
     o	User creation form with all the fields above.  
     o	User search form allowing search by names, email or phone numbers.  
•	Create at least 20 users for your company.  

In User page, there are two forms to be submitted. You could create a new user, and perform search action.  
When you did not complete all tables(firstname/lastname/email/homeaddress/homephone/cellphone), you will fail to create a new user.  
When you successfully created a new user, you'll find seach results increase by 1.
![1](https://user-images.githubusercontent.com/33148410/96972625-93788d80-14cb-11eb-905f-a804864beeb6.jpg)
