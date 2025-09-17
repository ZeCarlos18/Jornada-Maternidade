sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant CommunityController as CommunityController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: PUT /resource/{id}
    R->>+CommunityController: edit(request, id)
    CommunityController->>+V: validate(request)
    V-->>-CommunityController: validated data
    CommunityController->>+Model: find(id)
    Model->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Model: Return record
    Model-->>-CommunityController: Model instance
    CommunityController->>+Model: update(data)
    Model->>+DB: UPDATE table SET ... WHERE id = ?
    DB-->>-Model: Success
    Model-->>-CommunityController: Updated model
    CommunityController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over CommunityController,Model: This sequence updates an existing resource
  