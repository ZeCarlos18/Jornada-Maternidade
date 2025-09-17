sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant ProfileController as ProfileController
    participant Model as Model
    participant DB as Database
    
    C->>R: Request
    R->>+ProfileController: updatePhoto()
    Note over ProfileController: Process request
    alt Uses database
      ProfileController->>+Model: operation()
      Model->>+DB: Database query
      DB-->>-Model: Return data
      Model-->>-ProfileController: Return result
    else Direct response
      Note over ProfileController: Process without database
    end
    ProfileController-->>-R: Return response
    R-->>C: Response
    
    Note over ProfileController: Generic operation flow
  