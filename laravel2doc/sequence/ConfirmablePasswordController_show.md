sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant ConfirmablePasswordController as ConfirmablePasswordController
    participant Model as Model
    participant DB as Database
    
    C->>R: GET /resource/{id}
    R->>+ConfirmablePasswordController: show(id)
    ConfirmablePasswordController->>+Model: find(id) / findOrFail(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-ConfirmablePasswordController: Model instance
    ConfirmablePasswordController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over ConfirmablePasswordController,Model: This sequence retrieves a specific resource by ID
  