# Disc-Golf-Website
A disc golf management system, currently in the works, that is being built for interactions between buyers and sellers to be able to have a central place to be able to list, buy, and see last sold items more easily. Current features include a sign in/sign up, shopping cart, and a shop all option.

# Introduction
The current problem is there is no central place for people to be able to sell or see all the discs that everyone is selling, and instead all of the companies have their own website to sell discs or individual people are listing the discs they currently own on websites such as, eBay or Meta Platforms( previously known as Facebook) marketplace. This has resulted in people having to go to numereous different places to hopefully find the right disc they are looking for or to find information about a disc they own.

# Goals
The goal is to be able create a more central place for people to be able to find a disc they are looking for and to have sellers on one central platform to attract more people to their products. 

# Current Progress <br> 
The current progress includes a main menu for people to be able to see the newest releases, sign in and sign up page, and an administration page
<br> <p align= "center"> ![Picture1](https://user-images.githubusercontent.com/77820332/156283026-65f8a36b-1936-4189-a319-f1d4d0e77abf.png) </p>
If the user presses the profile icon they will be able to see a pop up application where they can either sign in or sign up on the page, with other applications going to be added in the future.
<br> <p align= "center"> ![ModalArea](https://user-images.githubusercontent.com/77820332/164314300-0eb6c3e4-f6f1-4452-a904-0d8d39508962.png) </p>
If the user has not created an account then they should click the sign up option and create an account or if they try to sign in without an account an alert will be prompted that says wrong username/password.
<br><br> <p align ="center"> ![CustomerSignUpPage](https://user-images.githubusercontent.com/77820332/164315155-ef79d8e3-a721-4872-8c8a-c16b42ef5c19.png) </p>
Once the user name inputs the information into the Sign up page they will have an account created and they be redirected to the main menu page. A user does not have to worry about their password being leaked in the database because the password is hashed in the database where no one with access to the databse can easily tell what is.
<br><p align = "center"> ![CustomerSignUpPage1](https://user-images.githubusercontent.com/77820332/164316096-826405eb-e822-412b-8ae1-adaec83b4056.png)</p>
<br> <p align ="center"> ![databaseCustomer](https://user-images.githubusercontent.com/77820332/164316466-aa909ae1-a507-4912-b15f-677baada7091.png)</p>
<br> <p align ="center"> ![SignedInMainMenu](https://user-images.githubusercontent.com/77820332/164316575-68e75af4-6a6b-4d10-8294-68b5929e8fd3.png)</p>
<br> <p align ="center"> ![SignInModalArea](https://user-images.githubusercontent.com/77820332/164316696-0f78dc2f-06eb-463e-b8e4-08ddc9e0f1b7.png)</p>
If a user chooses to log out or their session ends then they will be redirected to the main menu page where the user will have the option to either re-login back in to view their account or have an option to create a new account. 
<br><br><br>
 In the administration page, that only administration will have the link to be to access, there is a login page, that uses similiar setup as the customer sign in page, for allowing the administration to be able to log in to.
 <br> <p align = "center">![AdminLogin](https://user-images.githubusercontent.com/77820332/164319648-d7b11a6a-0cc8-4fb1-b9d6-b9a75e1155c3.png) </p>
 Once logged in the administration currently has the option to be able to mangage the inventory. 
 <br> <p align = "center">![AdminMainMenu](https://user-images.githubusercontent.com/77820332/164319911-a11b2eec-998c-4531-9408-0b55fb843ab2.png)</p>
 If the adinistration clicks the "manage inventry" button then they will be redirected to a page where they can see the inventory or add another instance.
 <br> <p align = "center">![AdminManageInventory](https://user-images.githubusercontent.com/77820332/164320127-1c7402b1-bc0e-4316-ae3b-d806cb4db496.png) </p>


