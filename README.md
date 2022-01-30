# ForYourCare
This is a hospital website for online appoinment. I am making the wireframe of the website using figma tool and the website using the html,css bootstrap for front end and PHP and MySql for database. 

I have made login.php,sign-up.php,logout.php,health_symptom.php  and appointment.php with their respective css files. The index1.php is the main homepage.
            *In sign-up.php i have added the sign up functionality where if the user has already made an account and trying to make account again then the user will seee a message after clicking on submit and that is "This account is already created. Please create another account" as the already signed up user details is saved in mysql database.Afterclick on submi the page will go to login page.
            *In The login.php if the user enters a wrong username or password then there will be a message given indicating that "enter correct credentials" after entering the correct credentials the page will go to homepage i.e, index1.php.
            *In contact form if the user tries to submit without logged in, there is a message displayed as "please login in order to contact ous".
            *In symptom form we select one of the field of doctor and click on submit then it will go to health_symptom.php file where the list of doctors in that field will be displayed from the mysql database.
            *In the appointment form when we click on get appointment button it will take to appointment.php file where it will display the available  appointements in all field and there will be contact ous button to confirm appointment.
            *In the clinical test form when we click on get clinical test button we will got to contact ous form.
            *Remaining is the normal homepage,why choose ous,services offered,contact ous and the health detail forms and fotter and about ous page also.
           *the below is the command for mysql to insert the values. we can create the table by directly add table option given in the mysql.
           INSERT INTO `login` (`Login_Id`, `Username`, `Password`, `Joining_date`) VALUES (NULL, 'jitesh', 'jittejvp', current_timestamp());
INSERT INTO `appointment` (`Doctor_Id`, `Doctor_Name`, `Speciality`, `Start-Time`, `End-Time`, `Scheduled-Day`, `Date`) VALUES (NULL, 'Sundus Abbasi,DO', '\'Medical Oncology, Hematology', '12:30:00', '12:40:00', 'Wednesday', '2022-01-31');
            
