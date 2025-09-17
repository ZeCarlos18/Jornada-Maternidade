sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant EmailVerificationNotificationController as EmailVerificationNotificationController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+EmailVerificationNotificationController: store(request)
    EmailVerificationNotificationController->>+V: validate(request)
    V-->>-EmailVerificationNotificationController: validated data
    EmailVerificationNotificationController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-EmailVerificationNotificationController: New model instance
    EmailVerificationNotificationController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over EmailVerificationNotificationController,Model: This sequence creates a new resource
  