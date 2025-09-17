sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant CommunityController as CommunityController
    participant Model as Model
    participant DB as Database
    
    C->>R: GET /resource
    R->>+CommunityController: index()
    CommunityController->>+Model: all() / get() / paginate()
    Model->>+DB: SELECT * FROM table
    DB-->>-Model: Return records
    Model-->>-CommunityController: Collection of models
    CommunityController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over CommunityController,Model: This sequence retrieves a list of resources
  