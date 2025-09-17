sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant SocialAuthController as SocialAuthController
    participant User as User
    participant DB as Database
    
    C->>R: Request
    R->>+SocialAuthController: handleFacebookCallback()
    Note over SocialAuthController: Process request
    alt Uses database
      SocialAuthController->>+User: operation()
      User->>+DB: Database query
      DB-->>-User: Return data
      User-->>-SocialAuthController: Return result
    else Direct response
      Note over SocialAuthController: Process without database
    end
    SocialAuthController-->>-R: Return response
    R-->>C: Response
    
    Note over SocialAuthController: Generic operation flow
  