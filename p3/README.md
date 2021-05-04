# Project 3
+ By: *Robelyn Garcia*
+ Production URL: <https://hesweb.dev/e15/projects/3>

## Feature summary
+ Website visitors can view the public pages of websites without registering or logging in.
+ Website visitors can register/create an account to become a member of the online community.
+ Registered users can login to save one, many and or all of Coronavirus websites to their favorites page.
+ Registered users can login to create private reviews for one, many and or all of Coronavirus websites in their collection.
+ Registered users can login to create anonymous reviews for one, many and or all of Coronavirus websites in and or not in their collection.
+ Each registered user has a member collection page which shows their favorite websites in their collection.
+ Logged in registered users can see their website favorites and saved website reviews on their member page.
+ Logged in registered users receive a personal message with their name on all of the individual website slug pages.
+ Logged in registered users can see all other online community members on the community page.  Only viewable by members logged in from the link on the members page.
+ The home page features:
  +  A menu for guests with HOME, ALL WEBSITES, CONTACT US and MEMBER LOGIN links.
  +  A menu for logged in registered users with HOME, ALL WEBSITES, CONTACT US, REVIEW WEBSITES and LOGOUT links.
  + A link to view/read all websites (with URLs) to each individual website.
  + A link to view/read a list of websites by category (with URLs) to each individual website.
+ Website visitors or logged in registered users can email the website (directly from the contact us page) to a real email set up to the direct email URL with a functioning automatic reply.
+ Website visitors or logged in registered users can send comments to the website (directly from the contact us page) via a contact form that is GET by default and displays comments in the browser then redirects to the email server.
+ Website visitors or logged in registered users can share the functioning tinyurl listed on the contact us page.
  
## Database summary
+ My application has 3 tables in total (`users`, `websites`, `user_website`) (`user_website` is the Pivot table).
+ There's a many-to-many relationship between `websites` and `user_website`.
+ There's a one-to-many relationship between `user_website` and `users`.
+ There's a one-to-many relationship between `websites` and `user_website`.

## Outside resources
+ I Practiced my PHP logic at <https://paiza.io/users/show/45209>.
+ I Practiced my HTML & CSS at <https://codepen.io/DrRobelynGarcia>.

## Notes for instructor
+ I Validated my HTML at <https://validator.w3.org>. The only error is “Attribute dusk not allowed on element a at this point”, which is also on the http://bookmark.hesweb.xyz.
+ I used the BootstrapCDN compiled CSS for the first time and I really like the styling, although I did not apply all of it.  This Bootstrap CSS did not validate with W3C, but I thought it would be okay since http://bookmark.hesweb.xyz had the exact same Parse Errors and CSS was not required.
+ I hard coded, migrated and seeded user Jill's favorite websites and reviews. While I added user Jamal's favorite websites and reviews in the browser as a registered and logged in user.
+ I also added myself as a user within the browser to test all of the features on production.  I set these up manually at the website every time I migrated and reseeded tables.
