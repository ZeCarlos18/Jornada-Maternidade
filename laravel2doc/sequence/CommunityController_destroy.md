sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant CommunityController as CommunityController
    participant Model as Model
    participant DB as Database
    
    C->>R: DELETE /resource/{id}
    R->>+CommunityController: destroy(id)
    CommunityController->>+Model: find(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-CommunityController: Model instance
    CommunityController->>+Model: delete()
    Model->>+DB: DELETE FROM table WHERE id = ?
    DB-->>-Model: Success
    Model-->>-CommunityController: Success
    CommunityController-->>-R: Return JSON response
    R-->>C: 204 No Content
    
    Note over CommunityController,Model: This sequence removes a resource
  