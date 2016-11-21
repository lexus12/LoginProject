# LoginProject
Administration of database

This project is a simple PHP administration with defence of SQL injection. 

To proper use of this page You need to create MySql Database named "users"
in database create new table named "user" with 5 fields:
id - (autoincremented)
nick - 
password -
email -
user_privilege -(makes user an Admin or User)

In connect.class.php You can change a connection data,
in Default they are login: 'root' with no password,
Database worked on localhost.

in register.class.php You can change a privilige to allow only simple users to register account

//change this when You add a Admin user to value of 2 - User			
$this->privl = 1;
