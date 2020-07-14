To created rest api details bookstore

Details table of bookstore

users
id 
name
email
password
created
modified

books 
id 
title
publication_year
price
condition
created
modified

publishers
id
book_id 
pub_name
city
state
country
created
modified

authors
id
first_name
last_name
book_id
created
modified

inventory
id
book_id
stock_level_used
stock_level_new
created
modified

order_item
id int pk
book_id int fk
quantiy
price
created
modified

order
id int pk
order_item_id
customers_id
order_date
subtotal
shipping
total
created
modified

customers
id
first_name
last_name
street_number
street_name
country
phone_number
created
modified


















