# Project 3
+ By: *Robelyn Garcia*
+ Production URL: <http://e15p3.robelyngarcia.me>

## Feature summary
*Outline a summary of features that your application has. Below are from a project similar to Bookmark, with unique features. Delete this and replace with your own feature summary*

+ Visitors can register/log in
+ Users can create/add/update/delete COVID-19 websites in their collection (title, release date, writer, summary, category)
+ There's a file uploader that's used to upload images for each website
+ User's can toggle whether websites in their collection are public or private
+ Each user has a public profile page which presents a short bio about their interests, as well as a list of public websites in their collection
+ Each user has their own account page where they can edit their bio, email, password
+ Users can clone websites from another user's public collection into their collection
+ The home page features
  + a stream of recently added public websites
  + a list of categories, with a link to each category that shows a page of websites (with URLs) within that category
  
## Database summary
*Describe the tables and relationships used in your database. Delete the examples below and replace with your own info.*

+ My application has 3 tables in total (`users`, `websites`, `categories`)
+ There's a many-to-many relationship between `websites` and `categories`
+ There's a one-to-many relationship between `websites` and `users`

## Outside resources
+ I Practiced my PHP logic at <https://paiza.io/users/show/45209>
+ I Practiced my HTML & CSS at <https://codepen.io/DrRobelynGarcia>.

## Notes for instructor
+ I Validated my HTML at <https://validator.w3.org>.
+ I Validated my CSS at <https://jigsaw.w3.org/css-validator>.