sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant VerifyEmailController as VerifyEmailController
    participant Model as Model
    participant DB as Database
    
    C->>R: Request
    R->>+VerifyEmailController: __invoke()
    Note over VerifyEmailController: Process request
    alt Uses database
      VerifyEmailController->>+Model: operation()
      Model->>+DB: Database query
      DB-->>-Model: Return data
      Model-->>-VerifyEmailController: Return result
    else Direct response
      Note over VerifyEmailController: Process without database
    end
    VerifyEmailController-->>-R: Return response
    R-->>C: Response
    
    Note over VerifyEmailController: Generic operation flow
  