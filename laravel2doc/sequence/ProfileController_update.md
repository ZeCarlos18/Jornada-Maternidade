sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant ProfileController as ProfileController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: PUT /resource/{id}
    R->>+ProfileController: update(request, id)
    ProfileController->>+V: validate(request)
    V-->>-ProfileController: validated data
    ProfileController->>+Model: find(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-ProfileController: Model instance
    ProfileController->>+Model: update(data)
    Model->>+DB: UPDATE table SET ... WHERE id = ?
    DB-->>-Model: Success
    Model-->>-ProfileController: Updated model
    ProfileController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over ProfileController,Model: This sequence updates an existing resource
  