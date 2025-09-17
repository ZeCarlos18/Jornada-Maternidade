sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant PostController as PostController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+PostController: create(request)
    PostController->>+V: validate(request)
    V-->>-PostController: validated data
    PostController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-PostController: New model instance
    PostController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over PostController,Model: This sequence creates a new resource
  