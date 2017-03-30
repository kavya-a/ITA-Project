Enable Search by item by extracting item from images of menu cards

Problem : Today, there are a multitude of restaurants, food delivery companies and cafes
serving a wide variety of dishes that customers can choose from.So, most people use websites
like Zomato to decide where and what they want to eat. Currently, food ordering websites like
Zomato allow users to search for food outlets in a particular location,of a particular price range,
cuisine, category(delivery or dine in) etc.However, they do not allow users to find restaurants
which serve a particular dish that they would like to try out ; that is they do not support search by
food item.

Proposed Solution : Currently, Zomato displays information about restaurants along with their
respective menus for users to look at. The menus are available on the website as images only. So,
a useful extension to the website would be to provide an option for searching for restaurants by
item/dish name.Using this feature, if a user feels like eating pizza, then they can search for
“pizza” and find the best places that serve pizza in their location.

Tools and Technologies : In order to incorporate this functionality into the existing website, we
wish to develop a module that will directly extract items names from the menus(text extraction
from an image using technologies like OCR).This text can then be used as data to implement
search based on a particular dish.
We will be building a website along the lines of zomato to demonstrate our improvement.The
website will be built using HTML,Bootstrap and JavaScript on the front end and PHP and
MySQL on the back end.

Features :
1. The added feature will allow users to find a more appropriate place to satisfy their
craving.
2. If the menu cards can be analysed as text instead of images, then users can also easily
search menus of restaurants to see if the restaurant has the item on their mind.