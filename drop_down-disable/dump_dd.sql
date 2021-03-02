CREATE TABLE category ( cat_id int(2) NOT NULL auto_increment, category varchar(25) NOT NULL default '', PRIMARY KEY (cat_id) ); 
# # Dumping data for table `category` # 
INSERT INTO category VALUES (1, 'Fruits'); INSERT INTO category VALUES (2, 'Colors'); INSERT INTO category VALUES (3, 'Games'); INSERT INTO category VALUES (4, 'Vehicles');
 # -------------------------------------------------------- # # Table structure for table `subcategory` # 
CREATE TABLE subcategory ( cat_id int(2) NOT NULL default '0', subcategory varchar(25) NOT NULL default '' ); 
# # Dumping data for table `subcategory` # 
INSERT INTO subcategory VALUES (1, 'Mango'); INSERT INTO subcategory VALUES (1, 'Banana'); INSERT INTO subcategory VALUES (1, 'Orange'); INSERT INTO subcategory VALUES (1, 'Apple'); INSERT INTO subcategory VALUES (2, 'Red'); INSERT INTO subcategory VALUES (2, 'Blue'); INSERT INTO subcategory VALUES (2, 'Green'); INSERT INTO subcategory VALUES (2, 'Yellow'); INSERT INTO subcategory VALUES (3, 'Cricket'); INSERT INTO subcategory VALUES (3, 'Football'); INSERT INTO subcategory VALUES (3, 'Baseball'); INSERT INTO subcategory VALUES (3, 'Tennis'); INSERT INTO subcategory VALUES (4, 'Cars'); INSERT INTO subcategory VALUES (4, 'Trucks'); INSERT INTO subcategory VALUES (4, 'Blkes'); INSERT INTO subcategory VALUES (4, 'Train'); 
