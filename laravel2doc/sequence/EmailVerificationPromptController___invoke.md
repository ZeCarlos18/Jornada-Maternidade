sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant EmailVerificationPromptController as EmailVerificationPromptController
    participant Model as Model
    participant DB as Database
    
    C->>R: Request
    R->>+EmailVerificationPromptController: __invoke()
    Note over EmailVerificationPromptController: Process request
    alt Uses database
      EmailVerificationPromptController->>+Model: operation()
      Model->>+DB: Database query
      DB-->>-Model: Return data
      Model-->>-EmailVerificationPromptController: Return result
    else Direct response
      Note over EmailVerificationPromptController: Process without database
    end
    EmailVerificationPromptController-->>-R: Return response
    R-->>C: Response
    
    Note over EmailVerificationPromptController: Generic operation flow
  