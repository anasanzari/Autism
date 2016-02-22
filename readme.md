# Documentation
## 1. Project Structure.
#### Root Scripts

  * /config.php   :   configuration variables.
  * /index.php    :   Front page.
  * /login.php    :   Login page. Handles the Login logic.
  * /logout.php   :   Logout script.

#### Folders

  * /admin        :   Admin page and other scripts for admin functionalities.
  * /common       :   Contain Articles and Videos (publicly accessible).
  * /doctor       :   Doctor's home page.
  * /helpers      :   Contain helper files and other Php classes which adds to the core functionalities of the Project.
  * /includes     :   contain Page templates reused in different pages.
  * /static       :   Meat of the front end. Contain images, fonts, stylesheets, javascript and sass files.
  * /trainer      :   Trainer's home page and other trainer accessible pages.
  * /videos       :   Videos are uploaded here.

## 2. Schema

### Articles
    Fields: id, name, author, publish date, content.
### Videos
    Fields: id, name, link, type.
### Users
    Fields: id, name, type, phone, address, email, password.
### Online
    Fields: id, lastseen.
### Chat
    Fields: id, from, to, message, time.

## 3. Other Technical Details

#### Dependencies
* video.js : Library for playing video files.
* markitup.js : Jquery Library for editor. Nice and neat interface for creating articles.
* bootstrap.js : Front end library.
