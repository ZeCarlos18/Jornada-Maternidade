sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant ProfileController as ProfileController
    participant Model as Model
    participant DB as Database
    
    C->>R: DELETE /resource/{id}
    R->>+ProfileController: destroy(id)
    ProfileController->>+Model: find(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-ProfileController: Model instance
    ProfileController->>+Model: delete()
    Model->>+DB: DELETE FROM table WHERE id = ?
    DB-->>-Model: Success
    Model-->>-ProfileController: Success
    ProfileController-->>-R: Return JSON response
    R-->>C: 204 No Content
    
    Note over ProfileController,Model: This sequence removes a resource
  