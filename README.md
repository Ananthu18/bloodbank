Blood Bank Management System 

Database/tables are included in the database folder

sample user details:
	 username : shanev
	 password : abc123

admin details:
	username : admin
	password : admin123



-> First Open "Main.html" using localhost.

-> Sign in and sign up(Validations given) option for user and sign in option for admin (credentials given above).

User Functions:

 -> Search function : 
		-> enter blood group and press adjacent search button to see available donors.
		-> enter city and press adjacent search button to see donors in the particular city.(available cities:Banglore,Hyderabad,Delhi,Chennai,Mumbai,etc.)
 
 -> Request blood function :
		-> Enter the email address and the required blood group,then press request button, "request processed email" will reach to the entered email address.
		-> When request is made, a unit of blood is deducted from the quantity of that selected blood group from the database.

 -> Our Members function :
	Displays all the donors with their details

 ->Donate blood function:
		-> Fill the form to join the system as a donor
		-> Form has the necessary validations:
			->First and Last Name should be characters
			->DOB should be selected such as the person in atleast of 18 years of age
			->Suitable date should be a date after today.		
			->Phone no validation
		->When you click submit, donor info will be stored to the database
 ->Logout :
	takes you back to the main page 

Admin Functions:

 ->Transfer function:
		In case of emergencies,when the bloodbank runs short of blood,it can request other blood banks.
		
		-> Choose the bloodbank,bloodgroup,and quantity required
		-> When you press request button, an email will be sent to the selected bloodbank.
 
 ->Organise Camp function:
	
		->Fill the form to conduct a blood donation camp.
		->When you click Organise button, an email will be sent to all the users of the system with all the camp details you filled.
 
 ->Donor list function:
		->Enter a date and press confirm,it will show you all the donors who all are available for donation on that particular date.

 
 ->Inventory Management:
		
		->Choose a blood group and click Check Availability,You will be able to see the available units of that particular blood group.
		->Choose a expiry date and press Check Quality, you will see all the blood groups which are not expired.
		->For all the blood groups which are expired with respect to the date entered,a unit of blood will be discarded from the database.

 ->Logout :
	takes you back to the Main page.

	
