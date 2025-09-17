sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant PostController as PostController
    participant V as Validator
    participant Post as Post
    participant DB as Database
    
    C->>R: POST /resource
    R->>+PostController: store(request)
    PostController->>+V: validate(request)
    V-->>-PostController: validated data
    PostController->>+Post: create(data)
    Post->>+DB: INSERT INTO table
    DB-->>-Post: Return new record
    Post-->>-PostController: New model instance
    PostController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over PostController,Post: This sequence creates a new resource
  