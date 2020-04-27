# Project 3
+ By: *Robelyn Garcia*
+ Production URL: <http://e15p3.robelyngarcia.me>

## Feature summary
+ Website visitors can register/create an account and login or view the public pages of websites without registering or logging in.
+ Registered users can login to create and update reviews for one, many and or all of COVID-19 websites.
+ The home page features:
  +  A menu for guests with HOME, ALL WEBSITES, CONTACT US and LOGIN TO REVIEW WEBSITES links.
  +  A menu for logged in registered users with HOME, ALL WEBSITES, CONTACT US, REVIEW WEBSITES and LOGOUT links.
  + A link to view/read all websites (with URLs) to each individual website.
  + A link to view/read a list of websites by category (with URLs) to each individual website.
+ Website visitors or logged in registered users can email the website (directly from the contact us page) for more information to a real email set up with an automatic email response.
+ Website visitors or logged in registered users can send comments to the website (directly from the contact us page) via a contact form that is GET by default and displays comments in the browser.
+ Logged in registered users receive a personal message on the individual website pages to review the website.
+ Website visitors or logged in registered users can share the functioning tinyurl listed on the contact us page.

## TBD
+ Logged in users can see their website reviews and other users reviews of websites.
+ There's a file uploader that's used to upload images for each website.
+ User's can toggle whether websites in their collection are public or private.
+ Each user has a public profile page which shows their email, name and a list of public websites in their collection.
+ Each user has their own account page where they can edit their name, email, password.
+ Users can clone websites from another user's public collection into their collection, in their collection (name, summary, category).
  
## Database summary TBD
+ My application has 3 tables in total (`users`, `websites`, `categories`, `organization`, `review`)
+ There's a many-to-many relationship between `websites` and `categories`
+ There's a one-to-many relationship between `websites` and `users`
+ There's a one-to-many relationship between `websites` and `review`

## Outside resources
+ I Practiced my PHP logic at <https://paiza.io/users/show/45209>
+ I Practiced my HTML & CSS at <https://codepen.io/DrRobelynGarcia>.

## Notes for instructor
+ I Validated my HTML at <https://validator.w3.org>.
+ I Validated my CSS at <https://jigsaw.w3.org/css-validator>.
+ I used the BootstrapCDN compiled CSS for the first time and I really like the styling, although I did not apply all of it.