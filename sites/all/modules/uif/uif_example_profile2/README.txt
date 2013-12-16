This module demonstrates the use of UIF hooks to support adding Profile 2 data.
Sample CSV file(s) are provided for import.  

*** IMPORT INTO USER FIELDS PROVIDED BY PROFILE 2 MODULE

* Install / enable the Profile 2 module

* Add a Profile 2 profile called 'main' (this is the default)

* Add two fields from /admin/structure/profiles/manage/main/fields as follows:
  Label                 Name
  First Name            field_first_name
  Last Name             field_last_name
  
* Enable this module

Then go to the user import page at /admin/people/uif and import file:

/data/profile_2_example_1.csv

