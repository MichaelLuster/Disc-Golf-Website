# Disc-Golf-Website
A disc golf management system, currently in the works, that is being built for interactions between buyers and sellers to be able to have a central place to be able to list, buy, and see last sold items more easily. Current features include a sign in/sign up, shopping cart, and a shop all option.

# Introduction
The current problem is there is no central place for people to be able to sell or see all the discs that everyone is selling, and instead all of the companies have their own website to sell discs or individual people are listing the discs they currently own on websites such as, eBay or Meta Platforms( previously known as Facebook) marketplace. This has resulted in people having to go to numereous different places to hopefully find the right disc they are looking for or to find information about a disc they own.

# Goals
The goal is to be able create a more central place for people to be able to find a disc they are looking for and to have sellers on one central platform to attract more people to their products. 

# Current Progress <br> 
The current progress includes a main menu for people to be able to see the newest releases, sign in and sign up page, an administration page, and a seller page that can be viewed at the following link:
<br>
The server that was being used for this project is not working, so none of the databases will function.
<br><br>
http://www.csce.uark.edu/~moluster/project_java/MainMenu/MainMenu.php

## Main Menu
<br><p align= "center"> ![Picture1](https://user-images.githubusercontent.com/77820332/156283026-65f8a36b-1936-4189-a319-f1d4d0e77abf.png) </p>
If the user presses the profile icon they will be able to see a pop up application where they can either sign in or sign up on the page, with other applications going to be added in the future.
<br> <p align= "center"> ![ModalArea](https://user-images.githubusercontent.com/77820332/164314300-0eb6c3e4-f6f1-4452-a904-0d8d39508962.png) </p>
If the user has not created an account then they should click the sign up option and create an account or if they try to sign in without an account an alert will be prompted that says wrong username/password.
## Sign Up
<br><br> <p align ="center"> ![CustomerSignUpPage](https://user-images.githubusercontent.com/77820332/164315155-ef79d8e3-a721-4872-8c8a-c16b42ef5c19.png) </p>
Once the user name inputs the information into the Sign up page they will have an account created and they be redirected to the main menu page. A user does not have to worry about their password being leaked in the database because the password is hashed in the database where no one with access to the databse can easily tell what is.
<br><p align = "center"> ![CustomerSignUpPage1](https://user-images.githubusercontent.com/77820332/164316096-826405eb-e822-412b-8ae1-adaec83b4056.png)</p>
<br> <p align ="center"> ![databaseCustomer](https://user-images.githubusercontent.com/77820332/164316466-aa909ae1-a507-4912-b15f-677baada7091.png)</p>
<br> <p align ="center"> ![SignedInMainMenu](https://user-images.githubusercontent.com/77820332/164316575-68e75af4-6a6b-4d10-8294-68b5929e8fd3.png)</p>
<br> <p align ="center"> ![SignInModalArea](https://user-images.githubusercontent.com/77820332/164316696-0f78dc2f-06eb-463e-b8e4-08ddc9e0f1b7.png)</p>
If a user chooses to log out or their session ends then they will be redirected to the main menu page where the user will have the option to either re-login back in to view their account or have an option to create a new account. 
<br><br><br>

## Admin Portl
 In the administration page, that only administration will have the link to be to access, there is a login page, that uses similiar setup as the customer sign in page, for allowing the administration to be able to log in to.
 <br> <p align = "center">![AdminLogin](https://user-images.githubusercontent.com/77820332/164319648-d7b11a6a-0cc8-4fb1-b9d6-b9a75e1155c3.png) </p>
 Once logged in the administration currently has the option to be able to mangage the inventory. 
 <br> <p align = "center">![AdminMainMenu](https://user-images.githubusercontent.com/77820332/166064741-063d58f1-1373-40d0-874b-b17fc67aea8a.png)</p>
 If the administration clicks the "manage inventory" button then they will be redirected to a page where they can see the current inventory or add another instance. The user can view the inventory by clicking the show inventory button or hide the hide inventory by clicking the hide inventory option. The user can add new inventory by filling in the form and clicking submit
 <br><p align = "center">![AdminManageInventory](https://user-images.githubusercontent.com/77820332/166064929-2e9d161c-a943-41c1-bdae-63f094c8f96e.png)</p>
 <br> <p align = "center">![AdminManageInventory1](https://user-images.githubusercontent.com/77820332/166065045-db56e8d3-9e64-4dfd-bcd2-b2dacc334fc3.png) </p>

## Seller Portal
From the main menu page of the customer if they press the modal and click on the "seller portal" they will be brought to the seller portal login page. If a user who wants to sell their discs, they can create a new account by clicking on the "make on here".
<br><p>![SellerSignIn](https://user-images.githubusercontent.com/77820332/166065499-2bc6af0b-9936-41e4-8bb5-9235a3e75715.png)</p>
Once a seller logins they will be brought to the main menu where, currently, they can logout or manage inventory.
<br><p>![SellerMainMenu](https://user-images.githubusercontent.com/77820332/166065696-31e26ea0-3764-4b2f-bcfa-543d595e70d6.png)</p>
If a user presses "Inventory" they will be brought to a page where they can manage how much they want to sell a disc for and how many of a certain product they have.
<br><p>![SellerPortalInventory](https://user-images.githubusercontent.com/77820332/166065980-27e9e38e-167a-4488-819f-0b548a78821c.png)</p>
<br><p>![SellerPortalManageInventory](https://user-images.githubusercontent.com/77820332/166066131-a913bca5-8125-4b5e-8d72-7cfc098fa1da.png)</p>





