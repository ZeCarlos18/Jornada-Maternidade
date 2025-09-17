sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant PasswordController as PasswordController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: PUT /resource/{id}
    R->>+PasswordController: update(request, id)
    PasswordController->>+V: validate(request)
    V-->>-PasswordController: validated data
    PasswordController->>+Model: find(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-PasswordController: Model instance
    PasswordController->>+Model: update(data)
    Model->>+DB: UPDATE table SET ... WHERE id = ?
    DB-->>-Model: Success
    Model-->>-PasswordController: Updated model
    PasswordController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over PasswordController,Model: This sequence updates an existing resource
  