sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant SocialAuthController as SocialAuthController
    participant Model as Model
    participant DB as Database
    
    C->>R: Request
    R->>+SocialAuthController: redirectToFacebook()
    Note over SocialAuthController: Process request
    alt Uses database
      SocialAuthController->>+Model: operation()
      Model->>+DB: Database query
      DB-->>-Model: Return data
      Model-->>-SocialAuthController: Return result
    else Direct response
      Note over SocialAuthController: Process without database
    end
    SocialAuthController-->>-R: Return response
    R-->>C: Response
    
    Note over SocialAuthController: Generic operation flow
  