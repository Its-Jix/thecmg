This module demonstrates the use of UIF hooks to add user-related data when 
importing users.  Sample CSV file(s) are provided for import.  

*** IMPORT INTO USER FIELDS PROVIDED BY CORE
Before importing, go to Account settings > Manage fields
(/admin/config/people/accounts/fields) and create two text fields as follows:

Label                 Name
First Name            field_first_name
Last Name             field_last_name

Then go to the user import page at /admin/people/uif and import file:

/data/example_1.csv

in this module's directory.  You can also import:

/data/example_2_invalid_data.csv

which shows an example import that fails.

*** ROLE UPDATE
Also included is an example of how to update user roles. See function uif_example_add_roles(), called by
both the uif_example_uif_post_create() and the uif_example_uif_post_update() hook. This function checks 
for a "roles" column in the data and, if present, adds them to the user.

