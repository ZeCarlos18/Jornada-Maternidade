classDiagram
  class Post {
    +user_id
    +content
    +category
  }
  class User {
    +name
    +email
    +password
    +menstruation_day
    +profile_photo_path
  }
  Post <-- User : user
