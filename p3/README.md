# Project 3
+ By: *Robelyn Garcia*
+ Production URL: <http://e15p3.robelyngarcia.me>

## Feature summary
+ Website visitors can view the public pages of websites without registering or logging in.
+ Website visitors can register/create an account to become a member of the online community.
+ Registered users can login to save one, many and or all of Coronavirus websites to their favorites page.
+ Registered users can login to create private reviews for one, many and or all of Coronavirus websites in their collection.
+ Registered users can login to create anonymous reviews for one, many and or all of Coronavirus websites in and or not in their collection.
+ Each registered user has a member collection page which shows their favorite websites in their collection.
+ Logged in registered users can see their website favorites and saved website reviews on their member page.
+ Logged in registered users receive a personal message with their name on all of the individual website slug pages.
+ The home page features:
  +  A menu for guests with HOME, ALL WEBSITES, CONTACT US and LOGIN TO REVIEW WEBSITES links.
  +  A menu for logged in registered users with HOME, ALL WEBSITES, CONTACT US, REVIEW WEBSITES and LOGOUT links.
  + A link to view/read all websites (with URLs) to each individual website.
  + A link to view/read a list of websites by category (with URLs) to each individual website.
+ Website visitors or logged in registered users can email the website (directly from the contact us page) to a real email set up to the direct email URL and Contact Form.
+ Website visitors or logged in registered users can send comments to the website (directly from the contact us page) via a contact form that is GET by default and displays comments in the browser then redirects to the email server.
+ Website visitors or logged in registered users can share the functioning tinyurl listed on the contact us page.
  
## Database summary
+ My application has 3 tables in total (`users`, `websites`, `user_website`)
+ There's a many-to-many relationship between `websites` and `user_website`
+ There's a one-to-many relationship between `user_website` and `users`

## Outside resources
+ I Practiced my PHP logic at <https://paiza.io/users/show/45209>
+ I Practiced my HTML & CSS at <https://codepen.io/DrRobelynGarcia>.
+ I Validated my HTML at <https://validator.w3.org>.
+ I Validated my CSS at <https://jigsaw.w3.org/css-validator>.

## Notes for instructor
+ I used the BootstrapCDN compiled CSS for the first time and I really like the styling, although I did not apply all of it.
+ I hard coded, migrated and seeded user Jill's favorite websites and reviews. While I added user Jamal's favorite websites and reviews in the browser as a visiting logged and registered user.