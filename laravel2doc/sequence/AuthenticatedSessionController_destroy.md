sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant AuthenticatedSessionController as AuthenticatedSessionController
    participant Model as Model
    participant DB as Database
    
    C->>R: DELETE /resource/{id}
    R->>+AuthenticatedSessionController: destroy(id)
    AuthenticatedSessionController->>+Model: find(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-AuthenticatedSessionController: Model instance
    AuthenticatedSessionController->>+Model: delete()
    Model->>+DB: DELETE FROM table WHERE id = ?
    DB-->>-Model: Success
    Model-->>-AuthenticatedSessionController: Success
    AuthenticatedSessionController-->>-R: Return JSON response
    R-->>C: 204 No Content
    
    Note over AuthenticatedSessionController,Model: This sequence removes a resource
  