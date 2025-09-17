sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant RegisteredUserController as RegisteredUserController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+RegisteredUserController: create(request)
    RegisteredUserController->>+V: validate(request)
    V-->>-RegisteredUserController: validated data
    RegisteredUserController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-RegisteredUserController: New model instance
    RegisteredUserController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over RegisteredUserController,Model: This sequence creates a new resource
  