erDiagram
  post {
    int id PK "Primary key"
    int user_id FK "References user"
    string content
    string category
    datetime created_at
    datetime updated_at
  }
  user {
    int id PK "Primary key"
    string name
    string email
    string password
    string menstruation_day
    string profile_photo_path
    datetime created_at
    datetime updated_at
  }
  post }|--|| user : "user"
